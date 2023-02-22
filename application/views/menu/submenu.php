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
              <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addSubmenu"> Tambah Data</a>
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Menu </th>
                      <th>url</th>
                      <th>Icon</th>
                      <th>Active</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; ?>
                    <?php foreach ($subMenu as $row) : ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $row['title']; ?></td>
                        <td><?= $row['menu']; ?></td>
                        <td><?= $row['url']; ?></td>
                        <td><?= $row['icon']; ?></td>
                        <td><?= $row['is_active']; ?></td>


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
<div class="modal fade" id="addSubmenu" tabindex="-1" aria-labelledby="addSubmenuLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSubmenuLabel">Tambah Beasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= base_url('menu/submenu');?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu Title">
                    </div>

                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Pilih Menu</option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu URL">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu Icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                        <label class="form-check-label" for="is_active">
                            Aktif?
                        </label>
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
<?php $no=1; foreach($subMenu as $sm): $no++; ?>

    <div class="modal fade" id="modalEdit<?=$sm['id'];?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Lowongam Pekerjaan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" readonly value="<?= $sm['id'] ;?>" name="id" id="id" class="form-control" >

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?= $sm['title'];?>">
                        </div>
                        <div class="form-group">
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="">Pilih Menu</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input type="text" class="form-control" id="url" name="url" value="<?= $sm['url'];?>">
                        </div>
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm['icon'];?>">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="Reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Delete-->
<?php $no=1; foreach($subMenu as $sm): $no++; ?>

    <div class="modal fade" id="modalDelete<?=$sm['id'];?>" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
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
                            <p class="font-weight-bold text-dark">[ <?=$sm['title'];?> ]</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <a href="<?= base_url('menu/delete/'.$sm['id']); ?>" class="btn btn-danger">Delete</a>
                    </div>

                </form>


            </div>
        </div>
    </div>
<?php endforeach; ?>    


</div>
<!-- /.container-fluid -->

</div>