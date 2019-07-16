<h2>Data Mahasiswa</h2>
	<a href="<?php echo base_url(). 'mahasiswa/formAdd'; ?>"<button name="">Tambah Data</button></a>
	<br/>
		<table id="example" class="table table-striped table-bordered" border="1">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Kelas</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($data_mahasiswa as $tampilMahasiswa):
			?>
				<tr>
					<td><?= $tampilMahasiswa->nim ?></td>
					<td><?= $tampilMahasiswa->nama ?></td>
					<td><?= $tampilMahasiswa->jenis_kelamin?></td>
					<td><?= $tampilMahasiswa->kelas ?></td>
					<td>
						<a href="<?php echo base_url(). 'mahasiswa/formEdit/'.$tampilMahasiswa->id_mahasiswa; ?>"><button name="">Edit</button></a>
						<a onclick="return confirm('Anda yakin akan menghapus data?')" href=<?php echo base_url(). 'mahasiswa/hapusMahasiswa/'.$tampilMahasiswa->id_mahasiswa; ?>><button name="hapus">Hapus</button></a>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>
				</table>


