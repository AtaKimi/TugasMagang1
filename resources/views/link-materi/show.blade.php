<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('link-materi.show') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-5 dark:bg-gray-900">
        <div class="flex justify-between">
            <h1 class="text-3xl font-bold mb-4 dark:text-white">{{ $link_materi->judul }}</h1>
            <form action="{{ route('link-materi.destroy', $link_materi->id) }}" method="POST" id="hapus-form">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="inline-flex items-start px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 dark:bg-red-800 dark:hover:bg-red-900 dark:focus:ring-red-700"
                    onclick="if (confirm('Apakah Anda yakin ingin menghapus link materi ini?')) document.getElementById('hapus-form').submit();">Hapus</button>
            </form>
        </div>
        <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
            <p class="text-gray-600 dark:text-gray-300">{{ $link_materi->link }}</p>
            <div class="flex items-center justify-between mt-4">
                <div class="text-sm text-gray-600 dark:text-gray-400">
                    <span>Dibuat: {{ $link_materi->created_at->format('d M Y') }}</span>
                    <span>Diubah: {{ $link_materi->updated_at->format('d M Y') }}</span>
                </div>
                <a href="{{ route('link-materi.edit', $link_materi) }}" class="text-blue-600 hover:underline">Edit Link Materi</a>
            </div>
        </div>
    </div>
    
</x-app-layout>
