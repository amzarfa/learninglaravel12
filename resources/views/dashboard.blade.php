<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Grid untuk card -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Card Pegawai -->
                <a href="/pegawai" class="block bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg text-gray-900">Pegawai</h3>
                        <p class="mt-2 text-sm text-gray-600">
                            Klik untuk melihat data pegawai.
                        </p>
                    </div>
                </a>
                <br>
                <!-- Card Mahasiswa -->
                <a href="/mahasiswa" class="block bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg text-gray-900">Mahasiswa</h3>
                        <p class="mt-2 text-sm text-gray-600">
                            Klik untuk melihat data mahasiswa.
                        </p>
                    </div>
                </a>
                <br>
                <!-- Card User Management -->
                <a href="/usermanagement"
                    class="block bg-white overflow-hidden shadow-sm sm:rounded-lg hover:bg-gray-100">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg text-gray-900">User Management</h3>
                        <p class="mt-2 text-sm text-gray-600">
                            Klik untuk melihat data User.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
