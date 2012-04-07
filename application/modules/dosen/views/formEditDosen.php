<h1>Halaman Edit Dosen ID : <?= $dosen->id_dosen ?></h1>



<form id="formAddDosen" name="formAddDosen" action="<?php echo site_url('dosen/updateDosen');?>" method="POST">
	NIP: <input id="nip" name="nip" type="text" value="<?= $dosen->nip ?>"/> <br />
	Nama : <input id="nama" name="nama" type="text" value="<?= $dosen->nama ?>"/> <br />
	Tanggal Lahir : <input id="tanggal_lahir" name="tanggal_lahir" type="text" value="<?= $dosen->tanggal_lahir ?>"/> <br />
	Tempat Lahir : <input id="tempat_lahir" name="tempat_lahir" type="text" value="<?= $dosen->tempat_lahir ?>"/> <br />
	Alamat : <textarea id="alamat" name="alamat" rows="10" cols="50"><?= $dosen->alamat ?></textarea> <br />
	Telepon : <input id="telepon" name="telepon" type="text" value="<?= $dosen->no_telp ?>"/> <br />
	Email : <input id="email" name="email" type="text" value="<?= $dosen->email ?>"/> <br />
	Golongan : <input id="golongan" name="golongan" type="text" value="<?= $dosen->golongan ?>"/> <br />
	<br><br>
	<input type="hidden" id="id_dosen" name="id_dosen" value="<?= $dosen->id_dosen?>" /> <br>
	<input type="submit" value="Simpan Data Dosen" />
</form>
