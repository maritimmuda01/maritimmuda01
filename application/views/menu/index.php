<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <div class="row">
        <div class="col-xl-6 col-lg-7">

            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ;?>
            <?= $this->session->flashdata('message') ;?>

            <div class="card shadow mb-4">
                <div class="card-header py-auto">
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal"> Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $m['menu']; ?></td>
                                    <td>
                                        
                                        <a href="" class="text-danger mx-1" data-toggle="modal" data-target="#modalDelete<?= $m['id'];?>"> 
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

</div>
<!-- /.container-fluid -->

</div>

<!-- Modal Tambah -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Tambah Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('menu');?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="menu">Nama Menu</label>
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
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

<!-- Modal Edit -->
<?php $no=1; foreach($menu as $m): $no++; ?>

    <div class="modal fade" id="modalDelete<?=$m['id'];?>" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
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
                            <p class="font-weight-bold text-dark">[ <?=$m['menu'];?> ]</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <a href="<?= base_url('menu/deletemenu/'.$m['id']); ?>" class="btn btn-danger">Delete</a>
                    </div>

                </form>


            </div>
        </div>
    </div>
<?php endforeach; ?>    