<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee - Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-2xl">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Add New Employee</h1>
                <a 
                    href="/pegawai" 
                    class="px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all"
                >
                    ← Back to List
                </a>
            </div>
            <p class="text-gray-600">Enter the new employee's information below</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <form action="/pegawai/store" method="post" class="space-y-6">
                {{ csrf_field() }}
                
                <!-- Name Field -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">
                        Name
                    </label>
                    <input 
                        type="text" 
                        id="nama"
                        name="nama" 
                        required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                        placeholder="Enter employee name"
                    >
                </div>

                <!-- Position Field -->
                <div>
                    <label for="jabatan" class="block text-sm font-medium text-gray-700 mb-1">
                        Position
                    </label>
                    <input 
                        type="text" 
                        id="jabatan"
                        name="jabatan" 
                        required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                        placeholder="Enter position"
                    >
                </div>

                <!-- Age Field -->
                <div>
                    <label for="umur" class="block text-sm font-medium text-gray-700 mb-1">
                        Age
                    </label>
                    <input 
                        type="number" 
                        id="umur"
                        name="umur" 
                        required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                        placeholder="Enter age"
                    >
                </div>

                <!-- Address Field -->
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">
                        Address
                    </label>
                    <textarea 
                        id="alamat"
                        name="alamat" 
                        required
                        rows="4"
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                        placeholder="Enter address"
                    ></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button 
                        type="submit"
                        class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all"
                    >
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Save Employee
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>