<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?=$this->session->flashdata('message');?>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Anggota Maritiim Muda
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                               <?= $hitung_user;?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kegiatan/Acara</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $hitung_kegiatan;?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Lowongan Pekerjaan</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    <?= $hitung_karir;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-building fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Beasiswa
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $hitung_beasiswa;?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-2x text-warning"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Member Maritim Muda Nusantara</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tempat/Tgl Lahir</th>
                                    <th>Alamat</th>
                                    <th>Provinsi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1; ?>
                                <?php foreach ($member as $row) : ?>
                                <tr>
                                    <td>
                                        <a href="" class="text-danger mx-1" data-toggle="modal" data-target="#modalDelete<?= $row['id'];?>"> 
                                            <i class="fas fa-2x fa-fw fa-trash" data-toggle="tooltip"  data-placement="top" title="Delete"></i>
                                        </a>                                        
                                        <a href="" class="text-primary mx-1" data-toggle="modal" data-target="#modalkta<?= $row['id'];?>"> 
                                            <i class="fas fa-2x fa-fw fa-pen-square" data-toggle="tooltip"  data-placement="top" title="Nomor Anggota"></i>
                                        </a>                                        
                                    </td>
                                    <td ><?= $no; ?></td>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['tmpt_lahir']; ?> . <?= $row['tgl_lahir']; ?> </td>
                                    <td><?= $row['alamat']; ?></td>
                                    <td><?= $row['provinsi']; ?></td>


                                </tr>
                                <?php $no++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Delete-->
        <?php $no=1; foreach($member as $row): $no++; ?>
            <div class="modal fade" id="modalDelete<?=$row['id'];?>" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalDeleteLabel">Delete Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">
                            <div class="modal-body">
                                <div>
                                    <p>Apakah Anda Ingin Menghapus Data:</p>
                                    <p class="font-weight-bold text-dark">[ <?= $row['name'];?> ]</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                <a href="<?= base_url('admin/delete/' .$row['id']); ?>" class="btn btn-danger">Delete</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Modal No KTA-->
        <?php $no=1; foreach($member as $row): $no++; ?>
            <div class="modal fade" id="modalkta<?=$row['id'];?>" tabindex="-1" aria-labelledby="modalktaLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalktaLabel">Tambah Nomor Anggota</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">
                            <div class="modal-body">

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="name" id="name" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="email" id="email" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Nomor Anggota</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="no_anggota" id="no_anggota">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">File Nomor Anggota</label>
                                        <div class="col-md-8">
                                            <input type="file" class="form-control" name="file_kta" id="file_kta">
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <a href="" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                <a href="" class="btn btn-primary">Save</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>    

    </div>

</div>

</div>