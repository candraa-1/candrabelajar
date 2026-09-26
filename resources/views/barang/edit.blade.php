@error('stok')
    <h1>ERRORRR</h1>    
    <h1>{{$message}}</h1>
@enderror
@error('harga')
    <h1>ERRORRR LAGII</h1>    
    <h1>{{$message}}</h1>
@enderror



<form action="{{route('barang.update' , $barang->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" id="nama" value = "{{ old('nama' , $barang->nama) }}" placeholder="isikan nama" name="nama">
    <input type="text" id="harga" value = "{{ old('harga', $barang->harga) }}" placeholder="isikan harga" name="harga" min="0" required>
    <input type="text" id="stok" value = "{{ old('stok' , $barang->stok) }}" placeholder="isikan stok" name="stok" min="0" required>
    <input type="submit" >
</form>