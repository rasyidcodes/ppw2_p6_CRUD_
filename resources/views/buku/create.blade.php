<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container mx-auto p-8 ">
        <div class="rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-semibold mb-4">Tambah Buku</h2>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-gray-600">Judul Buku</label>
                <input type="text" id="judul" name="judul" class="border border-gray-300 rounded px-3 py-2 w-full">
            </div>            
            <div class="mb-4">
                <label for="penulis" class="block text-gray-600">Penulis</label>
                <input type="text" id="penulis" name="penulis" class="border border-gray-300 rounded px-3 py-2 w-full">
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-gray-600">Harga</label>
                <input type="text" id="harga" name="harga" class="border border-gray-300 rounded px-3 py-2 w-full">
            </div>
            <div class="mb-4">
    <label for="tgl_terbit" class="block text-gray-600">Tanggal Terbit</label>
    <input type="date" id="tgl_terbit" name="tgl_terbit" class="border border-gray-300 rounded px-3 py-2 w-full">
    
</div>

            <div class="mb-4">
                <button type="submit" class="bg-green-500  hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                <a href="/buku" class="text-red-500 ml-2 font-bold">Batal</a>
            </div>
        </form>
        </div>
    </div>
    
</body>
</html>
