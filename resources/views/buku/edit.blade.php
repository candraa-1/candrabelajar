@error('stok')
    <h1>ERRORRR</h1>    
    <h1>{{$message}}</h1>
@enderror
@error('harga')
    <h1>ERRORRR LAGII</h1>    
    <h1>{{$message}}</h1>
@enderror



<form action="{{route('buku.update' , $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" id="judul" value = "{{ old('judul' , $buku->judul) }}" placeholder="Masukkan Judul Buku" name="judul">
    <input type="text" id="penulis" value = "{{ old('penulis', $buku->penulis) }}" placeholder="Masukkan Penulis" name="penulis" min="0" required>
    <input type="text" id="tahun_terbit" value = "{{ old('tahun_terbit' , $buku->tahun_terbit) }}" placeholder="Masukkan Tahun Terbit" name="tahun_terbit" min="0" required>
    <input type="text" id="stok" value = "{{ old('stok', $buku->stok) }}" placeholder="Masukkan Stok Buku" name="stok" min="0" required>
    <input type="submit" >
</form>