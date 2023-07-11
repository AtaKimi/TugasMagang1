<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('link-materi.index') }}
        </h2>
    </x-slot>

    <div class="bg-gray-900 min-h-screen">
        <div class="container mx-auto px-4 py-8">
            <div class="flex justify-between">
                <h1 class="text-white text-4xl font-bold mb-4">Daftar Link Materi</h1>
                <button type="submit"
                class="bg-green-400 text-white text-sm rounded-lg px-4 my-2 hover:bg-green-600"><a href="{{route('link-materi.create')}}">Tambah</a></button>
            </div>
            <div class="grid grid-cols-3 gap-4">
                @foreach ($link_materi as $lm)
                    <div class="bg-gray-800 rounded-lg shadow-lg p-4">
                        <h2 class="text-white text-xl font-semibold truncate">{{ $lm->judul }}</h2>
                        <p class="text-gray-300 text-sm mt-2">{{ $lm->created_at->format('d M Y') }}</p>
                        <p class="text-gray-400 text-sm mt-2">{{ $lm->link }}</p>
                        <a href="{{ route('link-materi.show', $lm) }}"
                            class="text-blue-400 text-sm mt-4 hover:underline">Lihat detail</a>
                    </div>
                @endforeach
            </div>
            @if ($link_materi->isEmpty())
                <p class="text-center text-gray-600">Belum ada kursus yang tersedia</p>
            @endif
        </div>
    </div>
</x-app-layout>
