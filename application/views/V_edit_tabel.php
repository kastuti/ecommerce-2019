<form action="<?php echo base_url().'tabel/editTabel'; ?>" role="form" id="form" class="form-horizontal" method="POST">
	<style type="text/css">
    .container{
	border:20px solid rgba(0,0,0,.5);
	width: 400px;
	height: 200px;
	background: #00FFFF;
	position: fixed;
	top: 50%;
	left: 50%;
	margin-top: -140px;
	margin-left: -240px;
	text-align: center;
	padding:40px;
	display: table;
}
</style>
<div class="container">
	<table>
		<thead>
			<th>Isian</th>
			<th>     </th>
			<th>Edit Data Admin</th>
		</thead>
		<tbody><?php foreach ($edit_tabel as $tampilEditTabel) {
	?>
			<input name="id" type="hidden" value="<?= $tampilEditTabel->id; ?>">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input name="username" placeholder="Isikan Username" class="form-control" type="text" required="" value="<?= $tampilEditTabel->username;?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" placeholder="Isikan Password" class="form-control" type="text" required="" value="<?= $tampilEditTabel->password; ?>"></td>
			</tr>
				<?php } ?>
				<tr>
					<td></td>
					<td><button class="btn btn-success" type="submit">Save</button></td>
					<td><a href="<?php echo base_url().'tabel/index'; ?>" type="button" class="btn btn-default">Cancel(X)</a></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>