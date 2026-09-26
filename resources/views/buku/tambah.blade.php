@error('stok')
    <h1>ERRORRR</h1>    
    <h1>{{$message}}</h1>
@enderror
@error('harga')
    <h1>ERRORRR LAGII</h1>    
    <h1>{{$message}}</h1>
@enderror



<form action="{{route('buku.kirim')}}" method="POST">
    @csrf
    <input type="text" id="judul" placeholder="Masukkan Judul Buku" name="judul">
    <input type="text" id="penulis" placeholder="Masukkan Penulis" name="penulis" min="0" required>
    <input type="text" id="tahun_terbit"  placeholder="Masukkan Tahun Terbit" name="tahun_terbit" min="0" required>
    <input type="text" id="stok"  placeholder="Masukkan Stok Buku" name="stok" min="0" required>
    <input type="submit" >
</form>