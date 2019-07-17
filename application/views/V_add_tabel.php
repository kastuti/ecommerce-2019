<form action="<?php echo base_url().'tabel/tambahTabel'; ?>" role="form" id="form" class="form-horizontal" method="POST">
	<table>
		<thead>
			<th>Isian</th>
			<th> : </th>
			<th>Isi</th>
		</thead>
		<tbody>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input name="username" placeholder="Isikan Nama" class="form-control" type="text" required=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" placeholder="Isikan Password" class="form-cotrol" type="text" requires=""></td>
			</tr>
			<tr>
				<td></td>
				<td><button class="btn btn-success" type="submit">Save</button></td>
				<td><a href="<?php echo base_url().'tabel/index'; ?>" type="button" class="btn btn-default">Cancel(X)</a></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</form>