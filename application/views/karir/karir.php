<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <?=$this->session->flashdata('message');?>
        </div>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addKarir"> Tambah Data</a>
              </h6>
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
                      <th>Action</th>
 
                    </tr>
                  </thead>
                  <tbody>

                    <?php $no = 1; ?>
                    <?php foreach ($karir as $row) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $row['posisi']; ?></td>
                        <td><?= $row['lembaga']; ?></td>
                        <td><?= $row['link']; ?></td>
                        <td><?= $row['batas_daftar']; ?></td>
                        <td>
                            <img src="<?= base_url('assets2/img/karir/'.$row['poster']) ?>" class="" width="100" alt="Poster">
                        </td>

                        <td class="d-flex justify-content-around">
                            <!-- <a href="" class="text-primary mx-1" data-toggle="modal" data-target="#modalEdit<-?= $row['id'];?>"> 
                                <i class="fas fa-2x fa-fw fa-pen-square" data-toggle="tooltip"  data-placement="top" title="Edit"></i>
                            </a> -->

                            <a href="" class="text-danger mx-1" data-toggle="modal" data-target="#modalDelete<?= $row['id'];?>"> 
                                <i class="fas fa-2x fa-fw fa-trash" data-toggle="tooltip"  data-placement="top" title="Delete"></i>
                            </a>
                        
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

<!-- Modal Tambah-->
<div class="modal fade" id="addKarir" tabindex="-1" aria-labelledby="addKarirLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addKarirLabel">Tambah Lowongan Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('karir/insertdata');?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group row">
                        <label class="col-md-4">Posisi</label>
                        <div class="col-md-8">
                        <input type="text" class="form-control" id="posisi" name="posisi">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-4">Lembaga/Perusahaan</label>
                        <div class="col-md-8">
                        <input type="text" class="form-control" id="lembaga" name="lembaga" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">Link</label>
                        <div class="col-md-8">
                        <input type="text" class="form-control" id="link" name="link" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">Batas Pendaftaran</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="batas_daftar" name="batas_daftar" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4" for="poster">Poster</label>
                        <div class="col-md-8">
                            <input type="file" class="form-control" id="poster" name="poster" >
                            <span>
                                <p class="badge badge-danger">Maksimal ukuran file: 2Mb</p>
                            </span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="Reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit-->
<?php $no=1; foreach($karir as $row): $no++; ?>

    <div class="modal fade" id="modalEdit<?=$row['id'];?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Lowongam Pekerjaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('karir/edit');?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <!-- <input type="hidden" readonly value="<?= $row['id'] ;?>" name="id" id="id" class="form-control" > -->

                        <div class="form-group row">
                            <label class="col-md-4">Posisi</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="posisi" name="posisi" value="<?= $row['posisi'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Lembaga/Perusahaan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="lembaga" name="lembaga" value="<?= $row['lembaga'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Link</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="link" name="link" value="<?= $row['link'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Batas Pendaftaran</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="batas_daftar" name="batas_daftar" value="<?= $row['batas_daftar'];?>">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="<?= base_url('assets2/img/kegiatan/'.$row['poster']) ?>" class="card-img" alt="Poster">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="file" class="form-control" id="poster" name="poster" value="<?= $row['poster'];?>">
                                        <span>
                                            <p class="badge badge-danger">Maksimal ukuran file: 2Mb</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- file lama -->
                        <!-- <input type="hidden" name="filelama" id="filelama" value="<?=$row['poster'] ;?>"> -->

                    </div>

                    <div class="modal-footer">
                        <button type="Reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="Submit" name="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Delete-->
<?php $no=1; foreach($karir as $row): $no++; ?>

    <div class="modal fade" id="modalDelete<?=$row['id'];?>" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteLabel">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div>
                            <p>Apakah Anda Ingin Menghapus Data:</p>
                            <p class="font-weight-bold text-dark">[ <?=$row['posisi'];?> ]</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <!-- <a href="<-?= base_url('karir/deletedata/'.$row['id']); ?>" class="btn btn-danger">Delete</a> -->
                        <a href="<?= base_url('karir/deletedata/')?><?=$row['id']?>/<?=$row['poster']?>" class="btn btn-danger">Delete</a>
                        <!-- <button type="Submit" class="btn btn-primary">Delete</button> -->
                    </div>

                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>    


</div>
<!-- /.container-fluid -->

</div>