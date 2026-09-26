<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <td>Judul Buku</td>
        <td>Penulis</td>
        <td>Tahun Terbit</td>
        <td>Stok</td>
        <td>Action</td>
    </tr>
    @foreach ($buku as $b)
    <tr>
        <td>{{ $b ['judul'] }}</td>
        <td>{{ $b ['penulis'] }}</td>
        <td>{{ $b ['tahun_terbit'] }}</td>
        <td>{{ $b ['stok'] }}</td>
   
    <td>
        <a href="{{ route('buku.edit' , $b->id) }}">Update</a>
        <a href="{{ route('buku.delete' , $b->id) }}">delete</a>
    </td>
     </tr>
    @endforeach
</table>
<a href="{{route('buku.tambah')}}">Add Buku</a>

</body>
</html>