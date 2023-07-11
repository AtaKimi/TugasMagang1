<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('materi.create') }}
        </h2>
    </x-slot>

    <div class="bg-gray-900 min-h-screen">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-white text-4xl font-bold mb-4">Tambah Materi Baru</h1>
            <form action="{{ route('materi.store') }}" method="POST" class="bg-gray-800 rounded-lg shadow-lg p-4">
                @csrf
                <div class="mb-4">
                    <label for="judul" class="text-gray-300 text-sm block">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul') }}"
                        class="bg-gray-700 text-black text-sm rounded-lg w-full p-2 mt-1 @error('judul') border border-red-500 @enderror">
                    @error('judul')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="isi_materi" class="text-gray-300 text-sm block">Isi Materi</label>
                    <textarea name="isi_materi" id="isi_materi" rows="10"
                        class="bg-gray-700 text-black text-sm rounded-lg w-full p-2 mt-1 @error('isi_materi') border border-red-500 @enderror">{{ old('isi_materi') }}</textarea>
                    @error('isi_materi')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 text-white text-sm rounded-lg px-4 py-2 hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
