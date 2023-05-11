@include('struktur.navbar')

<div class="container">
    <h3 class="text-center mt-3 mb-5">PESAN TEMPAT</h3>
    <div class="card p-5 mb-5">
    <form method="POST" action="data_reservasi.php" id="form1">
        <label for="name">Nama Lengkap</label>
        <div class="form-group">
            <input name="name" type="text" placeholder="Masukan Nama lengkap Anda" class="form-control">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <label for="tgl">Tanggal resevasi</label>
        <div class="form-group">

            <input type="date" class="form-control" id="tanggal" name="tanggal_event" value="DD-MM-YYYY">
        </div>
        <label for="nama">Media Sosial</label>
      <div class="form-group">

        <input type="text" class="form-control" id="nama" name="medsos" placeholder="Masukan akun medsos">
      </div>

      <label for="rumah">Alamat</label>
        <div class="form-group">
          <input type="text" class="form-control" id="address" name="address" placeholder="Masukan Alamat">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <label for="telp">No. Telephone</label>
        <div class="form-group">
          <input type="text" class="form-control" id="phone" name="phone" placeholder="xxxxxxxxxxxx">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

      <div class="form-group ">
          <label for="sts">Event</label>
          <select id="sts" class="form-control" name="event">
            <option selected>Pilih...</option>
            <option value="Kumpul keluarga besar">Arisan</option>
            <option value="Kumpul keluarga besar">Kumpul keluarga besar</option>
            <option value="Reunian">Reunian</option>
            <option value="Ulang Tahun">Ulang Tahun</option>
          </select>
        </div>

      <button type="register" class="btn btn-primary">Buat Pesanan</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </form>
  </div>
  </div>

  <p class="m-0 text-center text-white">
    &copy;
    Designed by Kelompok 06 PA 2023
    </p>
  </div>
