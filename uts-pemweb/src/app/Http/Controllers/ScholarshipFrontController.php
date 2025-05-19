<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Scholarship;
// use App\Models\Application;
// use Illuminate\Support\Facades\Auth;

// class ScholarshipFrontController extends Controller
// {
//     public function index()
//     {
//         $scholarships = Scholarship::where('status', 'Aktif')
//             ->whereDate('end_date', '>=', now())
//             ->get();

//         return view('livewire.show-scholarship-page', compact('scholarships'));
//     }

//     public function apply(Request $request)
//     {
//         $request->validate([
//             'scholarship_id' => 'required|exists:scholarships,id',
//         ]);

//         Application::create([
//             'user_id' => Auth::id(),
//             'scholarship_id' => $request->scholarship_id,
//         ]);

//         return back()->with('success', 'Berhasil daftar beasiswa!');
//     }
// }
