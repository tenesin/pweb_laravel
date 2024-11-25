<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee - Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-2xl">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Edit Employee</h1>
                <a 
                    href="/pegawai" 
                    class="px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all"
                >
                    ← Back to List
                </a>
            </div>
            <p class="text-gray-600">Update employee information below</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            @foreach($pegawai as $p)
            <form action="/pegawai/update" method="post" class="space-y-6">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

                <!-- Name Field -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">
                        Nama
                    </label>
                    <input 
                        type="text" 
                        id="nama"
                        name="nama" 
                        required
                        value="{{ $p->pegawai_nama }}"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                    >
                </div>

                <!-- Position Field -->
                <div>
                    <label for="jabatan" class="block text-sm font-medium text-gray-700 mb-1">
                        Jabatan
                    </label>
                    <input 
                        type="text" 
                        id="jabatan"
                        name="jabatan" 
                        required
                        value="{{ $p->pegawai_jabatan }}"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                    >
                </div>

                <!-- Age Field -->
                <div>
                    <label for="umur" class="block text-sm font-medium text-gray-700 mb-1">
                        Umur
                    </label>
                    <input 
                        type="number" 
                        id="umur"
                        name="umur" 
                        required
                        value="{{ $p->pegawai_umur }}"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                    >
                </div>

                <!-- Address Field -->
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">
                        Alamat
                    </label>
                    <textarea 
                        id="alamat"
                        name="alamat" 
                        required
                        rows="4"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                    >{{ $p->pegawai_alamat }}</textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button 
                        type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all"
                    >
                        Simpan
                    </button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</body>
</html>