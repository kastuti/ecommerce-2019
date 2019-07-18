    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Kategori Barang</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Kategori Barang</div>
          <div class="card-body">
            <div class="table-responsive">
            <a href="<?php echo base_url(). 'ktg_brg/formAdd'; ?>"<button name="">Tambah Data</button></a>
            <br>
            <br>
            <?php echo $judul;?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Detail Barang</th>
                    <th>Created date</th>
                    <th>Created by</th>
                    <th>updated date</th>
                    <th>updated by</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no= 1;
                         foreach ($data_ktg_brg as $tampilKtgbrg):
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $tampilKtgbrg->nama ?></td>
                      <td><?= $tampilKtgbrg->detail?></td>
                      <td><?= $tampilKtgbrg->created_date?></td>
                      <td> <p><?php echo $this->session->userdata('nama')?></p></td>
                      <td><?= $tampilKtgbrg->updated_date?></td>
                      <td><?= $tampilKtgbrg->updated_by?></td>
                      <td>
                      <a href="<?php echo base_url(). 'ktg_brg/formEdit/'.$tampilKtgbrg->id; ?>"><button name="">Edit</button></a>
                      <a onclick="return confirm('Anda yakin akan menghapus data?')" href=<?php echo base_url(). 'ktg_brg/hapusTabel/'.$tampilKtgbrg->id; ?>><button name="hapus">Hapus</button></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <?php
            $tanggal= mktime(date("m"),date("d"),date("Y"));
            echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
            date_default_timezone_set('Asia/Jakarta');
            $jam=date("H:i:s");
            echo "| Pukul : <b>". $jam." "."</b>";
            $a = date ("H");
            ?> 
          </div>
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