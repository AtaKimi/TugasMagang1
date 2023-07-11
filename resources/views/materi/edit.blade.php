<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('materi.edit') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-5 dark:bg-gray-900">
        <h1 class="text-3xl font-bold mb-4 dark:text-white">Edit Materi</h1>
        <form action="{{ route('materi.update', $materi) }}" method="POST"
            class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="judul" class="text-gray-600 text-sm block dark:text-gray-300">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $materi->judul) }}"
                    class="bg-gray-100 text-gray-600 text-sm rounded-lg w-full p-2 mt-1 dark:bg-gray-700 dark:text-white @error('judul') border border-red-500 @enderror">
                @error('judul')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="isi_materi" class="text-gray-600 text-sm block dark:text-gray-300">Isi Materi</label>
                <textarea name="isi_materi" id="isi_materi" rows="10"
                    class="bg-gray-100 text-gray-600 text-sm rounded-lg w-full p-2 mt-1 dark:bg-gray-700 dark:text-white @error('isi_materi') border border-red-500 @enderror">{{ old('isi_materi', $materi->isi_materi) }}</textarea>
                @error('isi_materi')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-between mt-4">
                <a href="{{ route('materi.index') }}"
                    class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Batal</a>
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
