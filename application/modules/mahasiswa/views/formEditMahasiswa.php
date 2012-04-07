<h1>Halaman Edit mahasiswa ID : <?= $mahasiswa->id_mahasiswa ?></h1>



<form id="formAddMahasiswa" name="formAddMahasiswa" action="<?php echo site_url('mahasiswa/updateMahasiswa');?>" method="POST">
	NIM: <input id="nim" name="nim" type="text" value="<?= $mahasiswa->nim ?>"/> <br />
	Nama : <input id="nama" name="nama" type="text" value="<?= $mahasiswa->nama ?>"/> <br />
	Tanggal Lahir : <input id="tanggal_lahir" name="tanggal_lahir" type="text" value="<?= $mahasiswa->tanggal_lahir ?>"/> <br />
	Tempat Lahir : <input id="tempat_lahir" name="tempat_lahir" type="text" value="<?= $mahasiswa->tempat_lahir ?>"/> <br />
	Alamat : <textarea id="alamat" name="alamat" rows="10" cols="50"><?= $mahasiswa->alamat ?></textarea> <br />
	Telepon : <input id="telepon" name="telepon" type="text" value="<?= $mahasiswa->no_telp ?>"/> <br />
	Email : <input id="email" name="email" type="text" value="<?= $mahasiswa->email ?>"/> <br />
	<br><br>
	<input type="hidden" id="id_mahasiswa" name="id_mahasiswa" value="<?= $mahasiswa->id_mahasiswa?>" /> <br>
	<input type="submit" value="Simpan Data mahasiswa" />
</form>
