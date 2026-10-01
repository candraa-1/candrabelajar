<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: { extend: { fontFamily: { sans: ['Rubik', 'ui-sans-serif', 'system-ui', 'sans-serif'] } } }
        }
    </script>
</head>
<body class="bg-stone-50 font-sans text-stone-800 antialiased p-6 sm:p-10">

    <div class="mx-auto max-w-5xl">
        <div class="overflow-x-auto rounded-xl border-2 border-black bg-white">
            <table class="min-w-full border-collapse text-left text-sm">
                <thead class="bg-stone-100 text-stone-700">
                    <tr>
                        <th class="border border-black px-5 py-3 font-medium">Judul Buku</th>
                        <th class="border border-black px-5 py-3 font-medium">Penulis</th>
                        <th class="border border-black px-5 py-3 font-medium">Tahun Terbit</th>
                        <th class="border border-black px-5 py-3 font-medium">Stok</th>
                        <th class="border border-black px-5 py-3 font-medium text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $b)
                    <tr class="hover:bg-stone-50">
                        <td class="border border-black px-5 py-4 font-medium text-stone-900">{{ $b ['judul'] }}</td>
                        <td class="border border-black px-5 py-4 text-stone-600">{{ $b ['penulis'] }}</td>
                        <td class="border border-black px-5 py-4 text-stone-600">{{ $b ['tahun_terbit'] }}</td>
                        <td class="border border-black px-5 py-4 text-stone-600">{{ $b ['stok'] }}</td>
                        <td class="border border-black px-5 py-4">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('buku.edit' , $b->id) }}"
                                   class="rounded-md border border-black px-3 py-1.5 text-xs font-medium text-stone-700 hover:bg-stone-100">Update</a>
                                <a href="{{ route('buku.delete' , $b->id) }}"
                                   class="rounded-md border border-black px-3 py-1.5 text-xs font-medium text-red-600 hover:bg-red-50">delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{route('buku.tambah')}}"
           class="mt-5 inline-block rounded-lg bg-emerald-800 px-4 py-2 text-sm font-medium text-white hover:bg-emerald-900">Add Buku</a>
    </div>

</body>
</html>