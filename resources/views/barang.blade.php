<table border="1">
    <tr>
        <td>Nama</td>
        <td>Harga</td>
        <td>Stok</td>
        <td>action</td>
    </tr>
    @foreach ($barang as $b)
    <tr>
        <td>{{ $b ['nama'] }}</td>
        <td>{{ $b ['harga'] }}</td>
        <td>{{ $b ['stok'] }}</td>
   
    <td>
        <a href="{{ route('barang.edit' , $b->id) }}">Update</a>
        <a href="{{ route('barang.delete' , $b->id) }}">delete</a>
    </td>
     </tr>
    @endforeach
</table>
<a href="{{route('barang.tambah')}}">Add Barang</a>
