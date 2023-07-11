<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('materi.show') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-5 dark:bg-gray-900">
        <div class="flex justify-between">
            <h1 class="text-3xl font-bold mb-4 dark:text-white">{{ $materi->judul }}</h1>
            <form action="{{ route('materi.destroy', $materi->id) }}" method="POST" id="hapus-form">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="inline-flex items-start px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 dark:bg-red-800 dark:hover:bg-red-900 dark:focus:ring-red-700"
                    onclick="if (confirm('Apakah Anda yakin ingin menghapus materi ini?')) document.getElementById('hapus-form').submit();">Hapus</button>
            </form>
        </div>
        <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
            <p class="text-gray-600 dark:text-gray-300">{!! nl2br(e($materi->isi_materi)) !!}</p>
            <div class="flex items-center justify-between mt-4">
                <div class="text-sm text-gray-600 dark:text-gray-400">
                    <span>Dibuat: {{ $materi->created_at->format('d M Y') }}</span>
                    <span>Diubah: {{ $materi->updated_at->format('d M Y') }}</span>
                </div>
                <a href="{{ route('materi.edit', $materi) }}" class="text-blue-600 hover:underline">Edit Materi</a>
            </div>
        </div>
        <div class="container my-3">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold mb-4 dark:text-white">List Link Materi</h2>
                <a href="{{route('materi.edit-link-materi-relationship', $materi->id)}}" class="inline-block px-4 py-2 my-2 bg-green-500 text-white rounded hover:bg-green-600">Edit Materi</a>
            </div>
            <table class="table-auto border-collapse border border-gray-800 w-full">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Isi Materi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materi->linkMateri()->get() as $lm)
                        <tr class="bg-gray-800 text-white">
    
                            <td class="border border-gray-900 px-4 py-2">{{ $lm->judul }}</td>
                            <td class="border border-gray-900 px-4 py-2">{{ Str::limit($lm->link, 20) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
