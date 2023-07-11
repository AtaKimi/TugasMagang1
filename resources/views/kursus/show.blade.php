<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('kursus.show') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-5 dark:bg-gray-900">\
        <div class="flex justify-between">
            <h1 class="text-3xl font-bold mb-4 dark:text-white">{{ $kursus->judul }}</h1>
            <form action="{{ route('kursus.destroy', $kursus->id) }}" method="POST" id="hapus-form">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="inline-flex items-start px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 dark:bg-red-800 dark:hover:bg-red-900 dark:focus:ring-red-700"
                    onclick="if (confirm('Apakah Anda yakin ingin menghapus materi ini?')) document.getElementById('hapus-form').submit();">Hapus</button>
            </form>
        </div>

        <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
            <p class="text-gray-600 dark:text-gray-300">{{ $kursus->deskripsi }}</p>
            <div class="flex items-center justify-between mt-4">
                <div class="text-sm text-gray-600 dark:text-gray-400">
                    <span>Mulai: {{ $kursus->tanggal_mulai }}</span>
                    <span>Berakhir: {{ $kursus->tanggal_berakhir }}</span>
                </div>
                <a href="{{ route('kursus.edit', $kursus->id) }}" class="text-blue-600 hover:underline">Edit Kursus</a>
            </div>
        </div>
        <div class="container my-3">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold mb-4 dark:text-white">List Materi</h2>
                <a href="{{route('kursus.edit-materi-relationship', $kursus->id)}}" class="inline-block px-4 py-2 my-2 bg-green-500 text-white rounded hover:bg-green-600">Edit Materi</a>
            </div>
            <table class="table-auto border-collapse border border-gray-800 w-full">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Isi Materi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kursus->materi()->get() as $m)
                        <tr class="bg-gray-800 text-white">
    
                            <td class="border border-gray-900 px-4 py-2">{{ $m->judul }}</td>
                            <td class="border border-gray-900 px-4 py-2">{{ Str::limit($m->isi_materi, 20) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
