<h1>Halaman Tambah mahasiswa</h1>



<form id="formAddMahasiswa" name="formAddMahasiswa" action="<?php echo site_url('mahasiswa/addMahasiswa');?>" method="POST">
	NIM: <input id="nim" name="nim" type="text"/> <br />
	Nama : <input id="nama" name="nama" type="text" /> <br />
	Tanggal Lahir : <input id="tanggal_lahir" name="tanggal_lahir" type="text" /> <br />
	Tempat Lahir : <input id="tempat_lahir" name="tempat_lahir" type="text" /> <br />
	Alamat : <textarea id="alamat" name="alamat" rows="10" cols="50"></textarea> <br />
	Telepon : <input id="telepon" name="telepon" type="text"/> <br />
	Email : <input id="email" name="email" type="text"/> <br />
	<br><br>
	<input type="submit" value="Simpan Data mahasiswa" />
</form>
