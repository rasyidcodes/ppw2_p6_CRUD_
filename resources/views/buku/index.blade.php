<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container mx-auto mt-10 p-8">
        <div class="rounded-lg shadow-lg p-8"> 
        <div class="flex flex-1 justify-between ">
            <h1 class="text-3xl font-semibold text-center ">Daftar Buku</h1>
            <a href="{{ route('buku.create') }}" class="bg-green-500  hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4 ">Tambah Buku</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul Buku
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Penulis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal terbit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                        
                    </tr>
                </thead>

                <tbody>
                    
                    @php
                        $no = 0;
                        @endphp
                        @foreach ($data_buku as $buku)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">{{ ++$no }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $buku->judul }}</td>
                            <td class="px-6 py-4">{{ $buku->penulis }}</td>
                            <td class="px-6 py-4">Rp {{ number_format($buku->harga, 2) }}</td>
                            <td class="px-6 py-4">{{ $buku->tgl_terbit }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('buku.edit', $buku->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin mau dihapus?')" class="text-red-500 hover:text-red-700">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>

      
        <div class="mt-6 p-4 bg-white shadow-md rounded-lg">
            <p class="text-md font-medium">Jumlah buku yang tersedia: {{ $jumlah_buku }}</p>
            <p class="text-md font-medium">Total harga dari seluruh buku: Rp {{ number_format($total_harga, 2) }}</p>
        </div>
        </div>
    </div>
</body>
</html>
