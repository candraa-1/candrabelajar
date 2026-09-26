    @error('stok')
        <h1>ERROR WOIII</h1>
        <h1>{{$message}}</h1>
    @enderror      
    @error('harga')
        <h1>ERROR PAK</h1>
        <h1>{{$message}}</h1>
    @enderror   

<form action="{{route('barang.kirim')}}" method="POST">
    @csrf
    <input type="text" id="nama" placeholder="isikan nama" name="nama">
    <input type="text" id="harga" placeholder="isikan harga" name="harga" min="0" required>
    <input type="text" id="stok" placeholder="isikan stok" name="stok" min="0" required>
    <input type="submit" >
</form>