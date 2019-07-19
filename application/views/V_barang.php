    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Admin</div>
          <div class="card-body">
            <div class="table-responsive">
            <a href="<?php echo base_url(). 'barang/formAdd'; ?>"<button name="">Tambah Barang</button></a>
            <br>
            <br>
            <?php echo $judul;?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Detail Barang</th>
                    <th>Aksi</th>
                    <th>Created_Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no= 1;
                         foreach ($data_barang as $tampilBarang):
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $tampilBarang->kode ?></td>
                      <td><?= $tampilBarang->nama ?></td>
                      <td><?= $tampilBarang->detail?></td>
                      <td>
                      <a href="<?php echo base_url(). 'barang/formEdit/'.$tampilBarang->id; ?>"><button name="">Edit</button></a>
                      <a onclick="return confirm('Anda yakin akan menghapus data?')" href=<?php echo base_url(). 'barang/hapusBarang/'.$tampilBarang->id; ?>><button name="hapus">Hapus</button></a>
                      </td>
                      <td><?= $tampilBarang->created_date?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>