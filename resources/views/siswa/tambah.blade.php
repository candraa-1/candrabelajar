<form action="{{route('siswa.kirim')}}" method="POST">
    @csrf
    <input type="text" id="nama" placeholder="isikan nama" name="nama">
    <input type="text" id="no_absen" placeholder="isikan no absen" name="no_absen" min="0" required>
    <input type="text" id="jurusan" placeholder="isikan jurusan" name="jurusan" min="0" required>
    <input type="text" id="kelas" placeholder="isikan kelas" name="kelas" min="0" required>
    <input type="text" id="alamat" placeholder="isikan alamat" name="alamat" min="0" required>
    <input type="submit" >
</form>