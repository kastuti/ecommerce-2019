<form action="<?php echo base_url().'pegawai/editPegawai'; ?>" role="form" id="form" class="form-horizontal" method="POST">
	<table>
		<thead>
			<th>Isian</th>
			<th>:</th>
			<th>Isi</th>
		</thead>
		<tbody><?php foreach ($edit_pegawai as $tampilEditPegawai) {
	?>
			<input name="id" type="hidden" value="<?= $tampilEditPegawai->id_pegawai; ?>">
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input name="nik" placeholder="Isikan nik" class="form-control" type="text" required="" value="<?= $tampilEditPegawai->nik;?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input name="nama" placeholder="Isikan Nama" class="form-control" type="text" required="" value="<?= $tampilEditPegawai->nama; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><select name="jenis_kelamin" class="form-control" required="">
					<option value="">--Pilih Jenis Kelamin--</option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
					</select></td>
				</tr>
				<tr>
					<td>Umur</td>
					<td>:</td>
					<td><input name="umur" placeholder="Isikan Umurui" class="form-control" type="text" required="" value="<?= $tampilEditPegawai->umur; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input name="alamat" placeholder="Isikan Alamat" class="form-control" type="text" required="" value="<?= $tampilEditPegawai->alamat; ?>"></td>
				</tr>
				<?php } ?>
				<tr>
					<td></td>
					<td><button class="btn btn-success" type="submit">Save</button></td>
					<td><a href="<?php echo base_url().'pegawai/index'; ?>" type="button" class="btn btn-default">Cancel(X)</a></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</form>
