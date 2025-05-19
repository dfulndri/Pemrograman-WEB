<x-layout>
    <x-slot name="title">Daftar Beasiswa</x-slot>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Daftar Beasiswa Tersedia</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($scholarships as $scholarship)
                <div class="border rounded p-4 shadow">
                    <h2 class="text-xl font-semibold">{{ $scholarship->name }}</h2>
                    <p class="text-sm text-gray-600 mb-2">{{ $scholarship->type }} |
                        Pendaftaran: {{ $scholarship->start_date }} - {{ $scholarship->end_date }}
                    </p>
                    <p class="mb-4">{{ $scholarship->description }}</p>

                    <button wire:click="selectScholarship({{ $scholarship->id }})"
                        class="bg-blue-500 text-white px-4 py-2 rounded">
                        Daftar
                    </button>
                </div>
            @endforeach
        </div>

        @if ($selectedScholarship)
            <div class="mt-10 border-t pt-6">
                <h3 class="text-lg font-bold mb-4">Formulir Pendaftaran</h3>
                <form wire:submit.prevent="submitApplication" class="space-y-4">
                    <div>
                        <label class="block font-medium">IPK</label>
                        <input type="text" wire:model="gpa" class="w-full border rounded px-3 py-2" />
                    </div>
                    <div>
                        <label class="block font-medium">Semester</label>
                        <input type="number" wire:model="semester" class="w-full border rounded px-3 py-2" />
                    </div>
                    <div>
                        <label class="block font-medium">Upload Dokumen (ZIP/PDF)</label>
                        <input type="file" wire:model="document" class="w-full" />
                    </div>
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
                        Kirim Pendaftaran
                    </button>
                </form>
            </div>
        @endif
    </div>
</x-layout>
