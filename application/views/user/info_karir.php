<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Lowongan Pekerjaan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Posisi </th>
                      <th>Lembaga/Perusahaan</th>
                      <th>Link</th>
                      <th>Batas Pendaftaran</th>
                      <th>Poster</th>
 
                    </tr>
                  </thead>
                  <tbody>

                  <?php $no = 1; ?>
                    <?php foreach ($karir as $row) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $row['posisi']; ?></td>
                        <td><?= $row['lembaga']; ?></td>
                        <td><?= $row['link']; ?> </td>
                        <td><?= $row['batas_daftar']; ?></td>
                        <td>
                          <img src="<?= base_url('assets2/img/karir/'.$row['poster']); ?>" width="100">
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

    </div>


</div>
<!-- /.container-fluid -->

</div>