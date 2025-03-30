<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Pegawai') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">

                <form action="{{ route('pegawai.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Nama</label>
                        <input type="text" name="name" id="name"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Masukkan nama pegawai">
                    </div>
                    <div class="mb-4">
                        <label for="nip" class="block text-gray-700">NIP</label>
                        <input type="text" name="nip" id="nip"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Masukkan NIP">
                    </div>
                    <div class="mb-4">
                        <label for="jabatan" class="block text-gray-700">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Masukkan jabatan">
                    </div>
                    <div class="mb-4">
                        <button type="button" onclick="history.back()"
                            class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                            Kembali
                        </button>
                        <button type="submit"
                            style="background-color: #3b82f6; color: #ffffff; padding: 8px 16px; border-radius: 4px;">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
