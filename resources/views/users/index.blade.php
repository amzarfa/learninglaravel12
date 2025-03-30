<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('usermanagement.create') }}"
                    style="background: #3b82f6; color: #ffffff; padding: 8px 16px; border-radius: 4px;">
                    + Tambah User
                </a>
            </div>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($data as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex space-x-3">
                                        <!-- Tombol Show -->
                                        <a href="{{ route('usermanagement.show', $user->id) }}"
                                            style="margin-right: 1rem; padding: 0.25rem 0.5rem; background-color: #3B82F6; color: #ffffff; border-radius: 0.25rem; text-align: center;"
                                            onmouseover="this.style.backgroundColor='#2563EB'"
                                            onmouseout="this.style.backgroundColor='#3B82F6'">
                                            Show
                                        </a>
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('usermanagement.edit', $user->id) }}"
                                            style="margin-right:1rem; padding: 0.25rem 0.5rem; background-color: #10B981; color: #ffffff; border-radius: 0.25rem; text-align: center;"
                                            onmouseover="this.style.backgroundColor='#059669'"
                                            onmouseout="this.style.backgroundColor='#10B981'">
                                            Edit
                                        </a>
                                        <!-- Tombol Hapus -->
                                        <form method="POST" action="{{ route('usermanagement.destroy', $user->id) }}"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                style="padding: 0.25rem 0.5rem; background-color: #EF4444; color: #ffffff; border-radius: 0.25rem; border: none; cursor: pointer; text-align: center;"
                                                onmouseover="this.style.backgroundColor='#DC2626'"
                                                onmouseout="this.style.backgroundColor='#EF4444'">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
