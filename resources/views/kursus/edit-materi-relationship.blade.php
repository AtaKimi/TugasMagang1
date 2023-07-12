<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('kursus.edit-materi-relationship') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4 text-gray-200">Tambahkan atau hapus materi</h1>
        <form action="{{ route('kursus.update-materi-relationship', $kursus->id) }}" method="post">
            @csrf
            @method('PUT')
            <table class="table-auto border-collapse border border-gray-800 w-full">
                <thead>
                    <tr class="bg-gray-900 text-white">
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Isi Materi</th>
                        <th class="px-4 py-2">Choice</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materi as $m)
                        <tr class="bg-gray-800 text-white">

                            <td class="border border-gray-900 px-4 py-2">{{ $m->judul }}</td>
                            <td class="border border-gray-900 px-4 py-2">{{ Str::limit($m->isi_materi, 20) }}</td>
                            <td class="border border-gray-900 px-4 py-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="checkbox" name="materi_ids[]"
                                        value="{{ $m->id }}"
                                        @foreach ($kursus->materi()->get() as $item)  @if ($m->id == $item->id) checked @endif @endforeach
                                        class="h-6 w-6 border border-gray-800 rounded checked:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-900">
                                    <label for="checkbox" class="ml-2 text-lg"></label>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('kursus.show', $kursus->id) }}"
                    class="text-sm text-blue-600 hover:underline mr-2">Kembali</a>
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">Simpan</button>
            </div>
        </form>

    </div>

</x-app-layout>
