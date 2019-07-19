 <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Customer</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Customer</div>
          <div class="card-body">
            <div class="table-responsive">
            <a href="<?php echo base_url(). 'customer/formAdd'; ?>"<button name="">Tambah Data</button></a>
            <br>
            <br>
            <?php echo $judul;?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Created Date</th>
                    <th>Created By</th>
                    <th>Updated Date</th>
                    <th>Updated By</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no= 1;
                         foreach ($data_customer as $tampilCustomer):
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $tampilCustomer->nama ?></td>
                      <td><?= $tampilCustomer->created_date ?></td>
                      <td><?= $tampilCustomer->created_by ?></td>
                      <td><?= $tampilCustomer->updated_date ?></td>
                      <td><?= $tampilCustomer->updated_by ?></td>
                      <td>
                      <a href="<?php echo base_url(). 'customer/formEdit/'.$tampilCustomer->id; ?>"><button name="">Edit</button></a>
                      <a onclick="return confirm('Anda yakin akan menghapus data?')" href=<?php echo base_url(). 'customer/hapusCustomer/'.$tampilCustomer->id; ?>><button name="hapus">Hapus</button></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated
          <?php
            $tanggal= mktime(date("m"),date("d"),date("Y"));
            echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
            date_default_timezone_set('Asia/Jakarta');
            $jam=date("H:i:s");
            echo "| Pukul : <b>". $jam." "."</b>";
            $a = date ("H");
            ?> </div>
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