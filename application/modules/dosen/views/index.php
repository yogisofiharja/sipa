<h1>Halaman Dosen</h1>

<a href="<?php echo site_url('dosen/showFormAddDosen');?>">Tambah Dosen</a>

<ul>
<?php foreach ($list_dosen as $dosen) : ?>
	<li>
		<div id="item_dosen">
			<h3><?= $dosen->nama ?></h3>
			<a href="<?php echo site_url('dosen/showFormUpdateDosen/'.$dosen->id_dosen);?>">Edit</a> | 
			<a href="<?php echo site_url('dosen/deleteDosen/'.$dosen->id_dosen);?>">Delete</a> <br><br>
			nip : <?= $dosen->nip ?> <br>
			alamat : <?= $dosen->alamat ?> <br>
		</div>
	</li>
<?php endforeach;?>
</ul>
