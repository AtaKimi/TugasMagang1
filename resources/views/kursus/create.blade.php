
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('kursus.create') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-5 dark:bg-gray-900">
        <h1 class="text-3xl font-bold mb-4 dark:text-white">Tambah Kursus</h1>
        <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
            <form action="{{ route('kursus.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="judul" class="block text-sm font-semibold text-gray-600 dark:text-gray-300">Judul</label>
                    <input type="text" id="judul" name="judul" value="{{ old('judul') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 @error('judul') border-red-500 @enderror">
                    @error('judul')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="deskripsi"
                        class="block text-sm font-semibold text-gray-600 dark:text-gray-300">deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="5"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="tanggal_mulai" class="block text-sm font-semibold text-gray-600 dark:text-gray-300">Tanggal
                        Mulai</label>
                    <input type="date" id="tanggal_mulai" name="tanggal_mulai" value="{{ old('tanggal_mulai') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 @error('tanggal_mulai') border-red-500 @enderror">
                    @error('tanggal_mulai')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="tanggal_berakhir"
                        class="block text-sm font-semibold text-gray-600 dark:text-gray-300">Tanggal Berakhir</label>
                    <input type="date" id="tanggal_berakhir" name="tanggal_berakhir"
                        value="{{ old('tanggal_berakhir') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 @error('tanggal_berakhir') border-red-500 @enderror">
                    @error('tanggal_berakhir')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('kursus.index') }}" class="text-sm text-blue-600 hover:underline mr-2">Kembali</a>
                    <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
