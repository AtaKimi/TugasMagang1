<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('link-materi.create') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-5 dark:bg-gray-900">
        <h1 class="text-3xl font-bold mb-4 dark:text-white">Tambah Link Materi</h1>
        <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
            <form action="{{ route('link-materi.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="judul" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:text-white @error('judul') border-red-500 @enderror">
                    @error('judul')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="link" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Link</label>
                    <input type="text" name="link" id="link" value="{{ old('link') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-700 dark:text-white @error('link') border-red-500 @enderror">
                    @error('link')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex items-start px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-800 dark:hover:bg-indigo-900 dark:focus:ring-indigo-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>
