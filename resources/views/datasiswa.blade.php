<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Siswa</title>

    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">

    <div class="max-w-6xl mx-auto px-6 py-10">

        <!-- Judul -->
        <div class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">
                Data Siswa
            </h1>
        </div>


        <!-- Table -->
        <div class="bg-white rounded-lg border border-gray-200 overflow-hidden">

            <div class="overflow-x-auto">

                <table class="w-full">

                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>

                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-600">
                                Id
                            </th>
                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-600">
                                Nama
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-600">
                                No Absen
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-600">
                                Jurusan
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-600">
                                Kelas
                            </th>

                            <th class="px-6 py-4 text-left text-sm font-medium text-gray-600">
                                Alamat
                            </th>

                            <th class="px-6 py-4 text-center text-sm font-medium text-gray-600">
                                Action
                            </th>

                        </tr>
                    </thead>


                    <tbody class="divide-y divide-gray-200">

                        @foreach ($siswa as $b)
                        
                        <tr class="hover:bg-gray-50">
                            
                            @for ($i=0;$i<=5;$i++)
                            
                            <td class="px-6 py-4 text-sm text-gray-800">
                                {{ $i }}
                            </td>
                            @endfor
                            <td class="px-6 py-4 text-sm text-gray-800">
                                {{ $b->nama }}
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-600">
                                {{ $b->no_absen }}
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-600">
                                {{ $b->jurusan }}
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-600">
                                {{ $b->kelas }}
                            </td>

                            <td class="px-6 py-4 text-sm text-gray-600">
                                {{ $b->alamat }}
                            </td>

                            <td class="px-6 py-4 text-center">

                                <a href="{{ route('siswa.edit', $b->id) }}"
                                   class="text-blue-600 hover:text-blue-800 text-sm mr-3">
                                    Edit
                                </a>

                                <a href="{{ route('siswa.delete', $b->id) }}"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')"
                                   class="text-red-600 hover:text-red-800 text-sm">
                                    Delete
                                </a>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>


        <!-- Tambah Siswa -->
        <div class="mt-4">
            <a href="{{ route('siswa.tambah') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-md">
                Tambah Siswa
            </a>
        </div>

    </div>

</body>
</html>