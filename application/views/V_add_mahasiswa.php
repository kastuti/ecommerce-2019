<form action="<?php echo base_url().'mahasiswa/tambahMahasiswa'; ?>" role="form" id="form" class="form-horizontal" method="POST">
	<table>
		<thead>
			<th>Isian</th>
			<th> : </th>
			<th>Isi</th>
		</thead>
		<tbody>
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input name="nim" placeholder="Isikan NIM" class="form-control" type="text" required=""></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input name="nama" placeholder="Isikan Nama" class="form-control" type="text" required=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><select name="jenis_kelamin" class="form-control" required="">
					<option value="">--PIlih Jenis Kelamin--</option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input name="kelas" placeholder="Isikan Kelas" class="form-cotrol" type="text" requires=""></td>
			</tr>
			<tr>
				<td></td>
				<td><button class="btn btn-success" type="submit">Save</button></td>
				<td><a href="<?php echo base_url().'mahasiswa/index'; ?>" type="button" class="btn btn-default">Cancel(X)</a></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</form>