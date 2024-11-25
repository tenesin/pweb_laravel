<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Header -->
        <div class="mb-8">
            <a href="https://www.malasngoding.com/"><h1 class="text-3xl font-bold text-gray-800 mb-2">www.malasngoding.com</h1></a>
            <a href="/pegawai"><p class="text-gray-600">Data Pegawai</p></a>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
            <form action="/pegawai/cari" method="GET" class="flex gap-2">
                <input 
                    type="text" 
                    name="cari" 
                    placeholder="Search employees..." 
                    class="flex-1 px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                >
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    Search
                </button>
            </form>
        </div>

        <a href="/pegawai/tambah" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors mb-6">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Tambah Pegawai Baru
        </a>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden mb-6">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Umur</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($pegawai as $p)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $p->pegawai_nama }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $p->pegawai_jabatan }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $p->pegawai_umur }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $p->pegawai_alamat }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                <span class="text-gray-300">|</span>
                                <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination Info -->
        <div class="bg-white rounded-lg p-4 shadow-sm mb-4">
            <div class="text-sm text-gray-600">
                <p>Page: {{ $pegawai->currentPage() }}</p>
                <p>Total Records: {{ $pegawai->total() }}</p>
                <p>Records Per Page: {{ $pegawai->perPage() }}</p>
            </div>
        </div>

        <!-- Pagination Links -->
        <div class="flex justify-center">
            {{ $pegawai->links() }}
        </div>
    </div>
</body>
</html>