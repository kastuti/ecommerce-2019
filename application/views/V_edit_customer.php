<form action="<?php echo base_url().'customer/editCustomer'; ?>" role="form" id="form" class="form-horizontal" method="POST">
	<table>
		<thead>
			<th>Isian</th>
			<th>     </th>
			<th>Isi</th>
		</thead>
		<tbody><?php foreach ($edit_customer as $tampilEditCustomer) {
	?>
			<input name="id" type="hidden" value="<?= $tampilEditCustomer->id; ?>">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input name="nama" placeholder="Isikan nama" class="form-control" type="text" required="" value="<?= $tampilEditCustomer->nama;?>"></td>
			</tr>
				<?php } ?>
				<tr>
					<td></td>
					<td><button class="btn btn-success" type="submit">Save</button></td>
					<td><a href="<?php echo base_url().'customer/index'; ?>" type="button" class="btn btn-default">Cancel(X)</a></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</form>
