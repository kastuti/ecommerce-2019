<form action="<?php echo base_url().'barang/editBarang'; ?>" role="form" id="form" class="form-horizontal" method="POST">
	<table>
		<thead>
			<th>Isi</th>
			<th>    </th>
			<th>Tambah Barang</th>
		</thead>
		<tbody><?php foreach ($edit_barang as $tampilEditBarang) {
	?>
			<input name="id" type="hidden" value="<?= $tampilEditBarang->id; ?>">
			<tr>
				<tr>
				<td>Kode</td>
				<td>:</td>
				<td><input name="kode" placeholder="Isikan Kode Barang" class="form-cotrol" type="text" required=""> value="<?=$tampilEditBarang->kode?>"></td>
			</tr>
				<td>Nama</td>
				<td>:</td>
				<td><input name="nama" placeholder="Isikan Nama Barang" class="form-control" type="text" required=""> value="<?= $tampilEditBarang->nama;?>"></td>
			</tr>
			<tr>
				<td>Detail</td>
				<td>:</td>
				<td><input name="detail" placeholder="Isikan Detail Barang" class="form-control" type="text" required=""> value="<?= $tampilEditBarang->detail; ?>"></td>
			</tr>
				<?php } ?>
				<tr>
					<td></td>
					<td><button class="btn btn-success" type="submit">Save</button></td>
					<td><a href="<?php echo base_url().'barang/index'; ?>" type="button" class="btn btn-default">Cancel(X)</a></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</form>
