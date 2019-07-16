<h2>Data Pegawai</h2>
	<a href="<?php echo base_url(). 'pegawai/formAdd'; ?>"<button name="">Tambah Data</button></a>
	<br/>
		<table id="example" class="table table-striped table-bordered" border="1">
			<thead>
				<tr>
					<th>NIK</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>umur</th>
					<th>alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($data_pegawai as $tampilPegawai):
			?>
				<tr>
					<td><?= $tampilPegawai->nik ?></td>
					<td><?= $tampilPegawai->nama ?></td>
					<td><?= $tampilPegawai->jenis_kelamin?></td>
					<td><?= $tampilPegawai->umur ?></td>
					<td><?= $tampilPegawai->alamat ?></td>
					<td>
						<a href="<?php echo base_url(). 'pegawai/formEdit/'.$tampilPegawai->id_pegawai; ?>"><button name="">Edit</button></a>
						<a onclick="return confirm('Anda yakin akan menghapus data?')" href=<?php echo base_url(). 'pegawai/hapusPegawai/'.$tampilPegawai->id_pegawai; ?>><button name="hapus">Hapus</button></a>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>
				</table>


