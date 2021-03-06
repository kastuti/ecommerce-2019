<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Admin</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Admin</div>
          <div class="card-body">
            <div class="table-responsive">
            <a href="<?php echo base_url(). 'tabel/formAdd'; ?>"<button name="">Tambah Data</button></a>
            <br>
            <br>
            <?php echo $judul;?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no= 1;
                         foreach ($data_tabel as $tampilTabel):
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $tampilTabel->username ?></td>
                      <td><?= $tampilTabel->password?></td>
                      <td>
                      <a href="<?php echo base_url(). 'tabel/formEdit/'.$tampilTabel->id; ?>"><button name="">Edit</button></a>
                      <a onclick="return confirm('Anda yakin akan menghapus data?')" href=<?php echo base_url(). 'tabel/hapusTabel/'.$tampilTabel->id; ?>><button name="hapus">Hapus</button></a>
                      </td>
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