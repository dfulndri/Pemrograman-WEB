<?php

namespace App\Livewire;

use App\Models\Application;
use App\Models\Scholarship;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;


class ShowScholarshipPage extends Component
{
    use WithFileUploads;

    public $scholarships;
    public $selectedScholarship = null;
    public $gpa;
    public $semester;
    public $document;

    public function mount()
    {
        $this->scholarships = Scholarship::where('status', 'Aktif')->whereDate('end_date', '>=', now())->get();
    }

    public function selectScholarship($id)
    {
        $this->selectedScholarship = Scholarship::find($id);
    }

    public function submitApplication()
    {
        $this->validate([
            'gpa' => 'required|numeric|between:0,4.00',
            'semester' => 'required|integer|min:1',
            'document' => 'required|file|mimes:zip,pdf|max:2048',
        ]);

        $path = $this->document->store('documents');

        Application::create([
            'user_id' => Auth::id(), // Pastikan mahasiswa sudah login
            'scholarship_id' => $this->selectedScholarship->id,
            'gpa' => $this->gpa,
            'semester' => $this->semester,
            'document' => $path,
            'status' => 'Baru',
        ]);

        session()->flash('message', 'Pendaftaran berhasil dikirim!');
        $this->reset(['selectedScholarship', 'gpa', 'semester', 'document']);
    }

    public function render()
    {
        return view('show-scholarship-page');
    }
}
