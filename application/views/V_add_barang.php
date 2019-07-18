<form action="<?php echo base_url().'barang/tambahBarang'; ?>" role="form" id="form" class="form-horizontal" method="POST">
	<table>
		<thead>
			<th>Isian</th>
			<th>     </th>
			<th>Isi</th>
		</thead>
		<tbody>
			<tr>
				<td>Kode</td>
				<td>:</td>
				<td><input name="kode" placeholder="Isikan Kode Barang" class="form-cotrol" type="text" requires=""></td>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input name="nama" placeholder="Isikan Nama Barang" class="form-control" type="text" required=""></td>
			<tr>
				<td>Detail</td>
				<td>:</td>
				<td><input name="detail" placeholder="Isikan Detail Barang" class="form-cotrol" type="text" requires=""></td>
			</tr>
			<tr>
				<td></td>
				<td><button class="btn btn-success" type="submit">Save</button></td>
				<td><a href="<?php echo base_url().'barang/index'; ?>" type="button" class="btn btn-default">Cancel(X)</a></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</form>