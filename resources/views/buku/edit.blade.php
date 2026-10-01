@error('stok')
    <h1>ERRORRR</h1>    
    <h1>{{$message}}</h1>
@enderror
@error('harga')
    <h1>ERRORRR LAGII</h1>    
    <h1>{{$message}}</h1>
@enderror



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

    <div class="mx-auto max-w-md">
        <form action="{{route('buku.update' , $buku->id) }}" method="POST"
              class="flex flex-col gap-4 rounded-xl border-2 border-black bg-white p-6">
            @csrf
            @method('PUT')
            <input type="text" id="judul" value = "{{ old('judul' , $buku->judul) }}" placeholder="Masukkan Judul Buku" name="judul"
                   class="w-full rounded-lg border border-black bg-white px-4 py-2.5 text-sm placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-black/20">
            <input type="text" id="penulis" value = "{{ old('penulis', $buku->penulis) }}" placeholder="Masukkan Penulis" name="penulis" min="0" required
                   class="w-full rounded-lg border border-black bg-white px-4 py-2.5 text-sm placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-black/20">
            <input type="text" id="tahun_terbit" value = "{{ old('tahun_terbit' , $buku->tahun_terbit) }}" placeholder="Masukkan Tahun Terbit" name="tahun_terbit" min="0" required
                   class="w-full rounded-lg border border-black bg-white px-4 py-2.5 text-sm placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-black/20">
            <input type="text" id="stok" value = "{{ old('stok', $buku->stok) }}" placeholder="Masukkan Stok Buku" name="stok" min="0" required
                   class="w-full rounded-lg border border-black bg-white px-4 py-2.5 text-sm placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-black/20">
            <input type="submit"
                   class="cursor-pointer rounded-lg bg-emerald-800 px-4 py-2.5 text-sm font-medium text-white hover:bg-emerald-900">
        </form>
    </div>

</body>
</html>