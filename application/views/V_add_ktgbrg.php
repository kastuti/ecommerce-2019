<form action="<?php echo base_url().'ktg_brg/tambahTabel'; ?>" role="form" id="form" class="form-horizontal" method="POST">
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
			<th>  </th>
			<th>Tambah Data Kategori Barang</th>
		</thead>
		<tbody>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input name="nama" placeholder="Isikan Nama Barang" class="form-control" type="text" required=""></td>
			</tr>
			<tr>
				<td>Detail Barang</td>
				<td>:</td>
				<td><input name="detail" placeholder="Isikan Kategori Barang" class="form-cotrol" type="text" requires=""></td>
			</tr>
			<tr>
				<td></td>
				<td><button class="btn btn-success" type="submit">Save</button></td>
				<td><a href="<?php echo base_url().'ktg_brg/index'; ?>" type="button" class="btn btn-default">Cancel(X)</a></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</div>
	
</form>