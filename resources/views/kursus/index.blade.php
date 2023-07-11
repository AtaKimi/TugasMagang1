<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('kursus.index') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-5">
        <div class="flex justify-between">
            <h1 class="dark:text-gray-200 text-3xl font-bold mb-4">Daftar Kursus</h1>
            <button type="submit"
            class="bg-green-400 text-white text-sm rounded-lg px-4 my-2 hover:bg-green-600"><a href="{{route('kursus.create')}}">Tambah</a></button>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach ($kursus as $k)
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
                    <div class="dark:bg-black rounded-lg shadow p-6">
                        <h2 class="dark:text-gray-400 text-xl font-semibold mb-2">{{ $k->judul }}</h2>
                        <p class="dark:text-gray-200 truncate">{{ $k->deskripsi }}</p>
                        <div class="flex items-center justify-between mt-4">
                            <div class="text-sm dark:text-gray-200">
                                <span>Mulai: {{ $k->tanggal_mulai }}</span>
                                <span>Berakhir: {{ $k->tanggal_berakhir }}</span>
                            </div>
                            <a href="{{ route('kursus.show', $k->id) }}" class="text-blue-600 hover:underline">Lihat
                                Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($kursus->isEmpty())
            <p class="text-center text-gray-600">Belum ada kursus yang tersedia</p>
        @endif
    </div>

</x-app-layout>
