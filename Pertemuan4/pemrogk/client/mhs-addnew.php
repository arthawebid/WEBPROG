
<h3>Tambah data Mahasiswa</h3>
<div class="alert alert-primary" id="sukses" role="alert">
  Update Sukses dilakukan silahkan klik <a href="index.php?pg=mhs">ListDataMahasiswa</a>
</div>
<div class="alert alert-danger" id="gagal" role="alert">
Update Gagal dilakukan silahkan klik <a href="index.php?pg=mhs">ListDataMahasiswa</a>
</div>
<form id="addmhs">
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="txnim">
    <div id="nimHelp" class="form-text">isikan NIM mahasiswa.</div>
  </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="txnama">
    <div id="namaHelp" class="form-text">isikan Nama mahasiswa.</div>
  </div>

  <div class="mb-3">
    <label for="talag" class="form-label">Tgl Lahir</label>
    <input type="date" class="form-control" id="txtgl">
    <div id="talagHelp" class="form-text">isikan Tgl Lahir mahasiswa.</div>
  </div>
  
  <div class="mb-3">
    <label for="nama" class="form-label">Jenis Kelamin</label>
    <select class="form-control" id="txjkel">
        <option value="-"> Pilih Jenis Kelamin </option>
        <option value="L"> Laki-Laki </option>
        <option value="P"> Perempuan </option>
    </select>    
    <div id="jkelHelp" class="form-text">Pilih Jenis Kelamin mahasiswa.</div>
  </div>

  <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <select class="form-control" id="txjur">
        <option value="-"> Pilih Jurusan </option>
        <option value="MTI"> MTI </option>
        <option value="KAB"> KAB </option>
        <option value="SK"> SK </option>
    </select>    
    <div id="jkelHelp" class="form-text">Pilih Jurusan mahasiswa.</div>
  </div>
  
  <button type="button" class="btn btn-primary" onclick="storemhs()">Simpan Data</button>
</form>
<script type="text/javascript" src="mhs-storedata.js"></script>