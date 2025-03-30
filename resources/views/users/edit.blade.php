<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg p-6">
                <form action="{{ route('usermanagement.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Nama</label>
                        <input type="text" name="name" id="name" value="{{ $data->name }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="text" name="email" id="email" value="{{ $data->email }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <button type="button" onclick="history.back()"
                            class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                            Kembali
                        </button>
                        <button type="submit"
                            style="background-color: #3b82f6; color: #ffffff; padding: 8px 16px; border-radius: 4px;">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
