<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <div class="row">
        <div class="col-12">
            <form class="form-inline" action="<?= base_url('peoples');?>" method="post">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="keyword" class=""></label>
                    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Name Lengkap" autocomplete="off" autofocus>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="provinsi"></label>
                    <select class="form-control" name="provinsi" id="provinsi">
                    <option>Pilih</option>
                    <option>Anggota Biasa (16 - 30 Tahun)</option>
                    <option>Sahabat Maritim Muda (Diatas 30 Tahun)</option>
                    </select>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mb-2"></input>
            </form>

        </div>
    </div>

    <div class="row">

        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between">
                    <h6 class="text-primary">List Member</h6>
                    <h6 class="text-primary">Result : <?= $total_rows;?></h6>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>action</th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php if (empty($peoples)) : ?>
                                    <tr>
                                        <td>
                                        <div class="alert alert-danger" role="alert">
                                            Data Tidak Ditemukan
                                        </td>
                                    </tr>
                                <?php endif;?>

                                
                                <?php foreach ($peoples as $people) : ?>
                                <tr>
                                    <th scope="row"><?= ++$start; ?></th>
                                    <td><?= $people['name']; ?></td>
                                    <td><?= $people['address']; ?></td>
                                    <td><?= $people['email']; ?></td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-circle btn-sm" data-toggle="modal"
                                            data-target="#modalDelete<?= $people['id'];?>">
                                            <i class="fas fa-md fa-edit" data-toggle="tooltip" data-placement="top"
                                                title="Delete"></i>
                                        </a>
                                    </td>

                                </tr>
                               
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                        <?= $this->pagination->create_links();?>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Delete-->
        <?php $no=1; foreach($peoples as $row): $no++; ?>
        <div class="modal fade" id="modalDelete<?=$row['id'];?>" tabindex="-1" aria-labelledby="modalDeleteLabel"
            aria-hidden="true">
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
                                <p>Apakah Anda Ingin Menghapus Data Dengan Nama:</p>
                                <p class="font-weight-bold text-dark">[ <?=$row['name'];?> ]</p>
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

    </div>



</div>


</div>