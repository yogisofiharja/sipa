<h1>Halaman Tambah Dosen</h1>



<form id="formAddDosen" name="formAddDosen" action="<?php echo site_url('dosen/addDosen');?>" method="POST">
	NIP: <input id="nip" name="nip" type="text"/> <br />
	Nama : <input id="nama" name="nama" type="text" /> <br />
	Tanggal Lahir : <input id="tanggal_lahir" name="tanggal_lahir" type="text" /> <br />
	Tempat Lahir : <input id="tempat_lahir" name="tempat_lahir" type="text" /> <br />
	Alamat : <textarea id="alamat" name="alamat" rows="10" cols="50"></textarea> <br />
	Telepon : <input id="telepon" name="telepon" type="text"/> <br />
	Email : <input id="email" name="email" type="text"/> <br />
	Golongan : <input id="golongan" name="golongan" type="text"/> <br />
	<br><br>
	<input type="submit" value="Simpan Data Dosen" />
</form>
