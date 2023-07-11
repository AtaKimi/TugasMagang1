<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-5">
        <div class="flex flex-wrap mx-4 justify-center">
          <div class="w-full lg:w-1/2 px-4 m-4 lg:mb-0">
            <div class="dark:bg-gray-800 rounded-lg shadow p-6">
              <h2 class="dark:text-gray-200 text-xl font-semibold mb-4">Kursus</h2>
              <div class="flex items-center justify-between mb-2">
                <div class="dark:text-gray-600">Jumlah Kursus</div>
                <div class="dark:text-gray-200 text-lg font-bold">{{count($kursus)}}</div>
              </div>
              <div class="flex items-center justify-between mb-2">
                <a href="{{route("kursus.index")}}" class="text-blue-600 hover:underline">Lihat List Kursus</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/2 px-4 m-4 lg:mb-0">
            <div class="dark:bg-gray-800 rounded-lg shadow p-6">
              <h2 class="dark:text-gray-200 text-xl font-semibold mb-4">Materi</h2>
              <div class="flex items-center justify-between mb-2">
                <div class="dark:text-gray-600">Jumlah Materi</div>
                <div class="dark:text-gray-200 text-lg font-bold">12</div>
              </div>
              <div class="flex items-center justify-between mb-2">
                <a href="/materi" class="text-blue-600 hover:underline">Lihat List Materi</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/2 px-4 m-4 lg:mb-0">
            <div class="dark:bg-gray-800 rounded-lg shadow p-6">
              <h2 class="dark:text-gray-200 text-xl font-semibold mb-4">Materi</h2>
              <div class="flex items-center justify-between mb-2">
                <div class="dark:text-gray-600">Jumlah Materi</div>
                <div class="dark:text-gray-200 text-lg font-bold">12</div>
              </div>
              <div class="flex items-center justify-between mb-2">
                <a href="/materi" class="text-blue-600 hover:underline">Lihat List Materi</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 dark:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
