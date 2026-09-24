<form action="{{route('siswa.update' , $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" id="nama" value = "{{ old('nama' , $siswa->nama) }}" placeholder="isikan nama" name="nama">
    <input type="text" id="no_absen" value = "{{ old('no_absen', $siswa->no_absen) }}" placeholder="isikan no absen" name="no_absen" min="0" required>
    <input type="text" id="jurusan" value = "{{ old('jurusan' , $siswa->jurusan) }}" placeholder="isikan jurusan" name="jurusan" min="0" required>
    <input type="text" id="kelas" value = "{{ old('jurusan' , $siswa->kelas) }}" placeholder="isikan kelas" name="kelas" min="0" required>
    <input type="text" id="alamat" value = "{{ old('jurusan' , $siswa->alamat) }}" placeholder="isikan alamat" name="alamat" min="0" required>
    <input type="submit" >
</form>