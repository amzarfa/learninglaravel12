<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                <div class="mb-4">
                    <label class="block text-gray-700">Nama</label>
                    <input type="text" value="{{ $data['name'] }}" disabled
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">NIP</label>
                    <input type="text" value="{{ $data['nip'] }}" disabled
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Jabatan</label>
                    <input type="text" value="{{ $data['jabatan'] }}" disabled
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <button type="button" onclick="history.back()"
                        class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                        Kembali
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
