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
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addBeasiswa"> Tambah Data</a>
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Beasiswa</th>
                      <th>Link </th>
                      <th>Batas Pendafataran</th>
                      <th>Poster</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; ?>
                    <?php foreach ($beasiswa as $row) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $row['nama_beasiswa']; ?></td>
                        <td><?= $row['link']; ?></td>
                        <td><?= $row['batas_daftar']; ?></td>
                        <td>
                            <img src="<?= base_url('assets2/img/beasiswa/'.$row['poster']) ?>" class="card-img" style="width:100px; height:100px" alt="Poster">
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
    <div class="modal fade" id="addBeasiswa" tabindex="-1" aria-labelledby="addBeasiswaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBeasiswaLabel">Tambah Beasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('beasiswa/insertdata');?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group row">
                            <label class="col-md-4">Nama Beasiswa</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" id="nama_beasiswa" name="nama_beasiswa">
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


    <!-- Modal Delete-->
    <?php $no=1; foreach($beasiswa as $row): $no++; ?>

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
                                <p class="font-weight-bold text-dark">[ <?=$row['nama_beasiswa'];?> ]</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="" class="btn btn-secondary" data-dismiss="modal">Close</a>
                            <!-- <a href="<-?= base_url('karir/deletedata/'.$row['id']); ?>" class="btn btn-danger">Delete</a> -->
                            <a href="<?= base_url('beasiswa/deletedata/')?><?=$row['id']?>/<?=$row['poster']?>" class="btn btn-danger">Delete</a>
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