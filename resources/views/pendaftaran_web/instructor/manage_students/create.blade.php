@extends('pendaftaran_web.app')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="card-title">Register Student</div>
  </div>
  <div class="card-body">
    <div>
    @if ($errors->any())
        @foreach ($errors->all() as $i)
            <ul style="background-color: rgb(243, 187, 187); color:blue">
              <li>{{ $i }}</li>
            </ul>
        @endforeach
    @endif
    @if (session()->has('status'))
        <span style="background-color: rgb(180, 235, 180); color:black">{{ session('status') }}</span>
    @endif
  </div>
    <div class="row d-flex justify-content-center">
      <div class="col-8">
        <form action="{{ route('store.student.instructor') }}" method="post">
          @csrf
          <label for="id_majore" class="form-label">Pilih jurusan</label>
          <select class="form-select" name="id_majore" id="id_majore" required>
            <option value="">--Pilih Jurusan--</option>
            @foreach ($majores as $i)
            @if (Auth::user()->id_majore == $i->id)
              <option value="{{ $i->id }}">{{ $i->majores_name }}</option>
            @endif
            @endforeach
          </select>
          <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}" required>

          <label for="nik" class="form-label">NIK</label>
          <input type="text" class="form-control" name="nik" id="nik" value="{{ old('nik') }}" required>

          <label for="kartu_keluarga" class="form-label">Kartu Keluarga (Nomor)</label>
          <input type="text" class="form-control" name="kartu_keluarga" id="kartu_keluarga" value="{{ old('kartu_keluarga') }}" required>

          <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
          <select name="jenis_kelamin" class="form-select" id="jenis_kelamin" required>
              <option value="">--Jenis Kelamin--</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
          </select>

          <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" value="{{ old('tempat_lahir') }}" name="tempat_lahir" id="tempat_lahir" required>

          <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>

          <label for="pendidikan_terakhir" class="form-label">Pendidikan Terakhir</label>
          <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}" required>

          <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
          <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" value="{{ old('nama_sekolah') }}" required>

          <label for="kejuruan" class="form-label">Kejuruan</label>
          <input type="text" class="form-control" name="kejuruan" id="kejuruan" value="{{ old('kejuruan') }}" required>

          <label for="nomor_hp" class="form-label">Nomor HP</label>
          <input type="tel" class="form-control" name="nomor_hp" id="nomor_hp" value="{{ old('nomor_hp') }}" required>

          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>

          <label for="aktivitas_saat_ini" class="form-label">Aktivitas Saat Ini</label>
          <input type="text" class="form-control" name="aktivitas_saat_ini" id="aktivitas_saat_ini" value="{{ old('aktivitas_saat_ini') }}" required>

          <label for="status" class="form-label">Status</label>
          <select class="form-select" name="status" id="status" required>
              <option value="">--Pilih Status--</option>
              <option value="daftar">Daftar</option>
              <option value="lolos">Lolos</option>
              <option value="tidak lolos">Tidak Lolos</option>
          </select>

          <button type="submit" class="btn btn-primary mt-2">Kirim</button>
          <a href="{{ url('manage/student/instructor') }}" class="btn btn-secondary mt-2">Back</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
