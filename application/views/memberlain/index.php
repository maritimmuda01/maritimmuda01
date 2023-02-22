<!-- Begin Page Content -->

<style>

.card-img, .card-img-bottom, .card-img-top {
    flex-shrink: 0;
    width: 100%;
    max-height: 200px;
    max-width: 200px;
}

.image-member{
    width:200px;
    height:200px;
}
</style>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <div class="row">
        <div class="col-10">
            <div class="card card-body shadow">
                <form class="form-inline" action="<?= base_url('memberlain');?>" method="post">
                
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="keyword" class=""></label>
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Cari" autocomplete="off" autofocus>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary mb-2" >
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-10 col-lg-7">
            <div class=" mb-4">
                <div class=" py-3 d-flex justify-content-between">
                    <h6 class="text-primary">Daftar Anggota</h6>
                    <h6 class="text-primary">Hasil Pencarian : <?= $total_rows;?></h6>

                </div>
                <div class="">
                    <div class="table-responsive">
                        <table class="table" id="" width="100%" cellspacing="0">
                            <thead>
                                <!-- <tr>
                                    <th></th>
                                </tr> -->
                            </thead>
                            <tbody>

                                <?php if (empty($member)) : ?>
                                    <tr>
                                        <td>
                                        <div class="alert alert-danger" role="alert">
                                            Data Tidak Ditemukan
                                        </td>
                                    </tr>
                                <?php endif;?>

                                
                                <?php foreach ($member as $row) : ?>
                                <tr>
                                    
                                    <td class="card mb-3">
                                        <div class="" style="max-height: 200px; height:100%; width: 100%;" >
                                            <div class="row no-gutters">
                                                <div class="col-md-4 d-flex justify-content-center">
                                                    <img src="<?= base_url('assets2/img/profile/'.$row['image']) ?>" class="card-img rounded-circle" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?=$row['name'];?></h5>
                                                        <p class="card-text mb-0"><?=$row['provinsi'];?></p>
                                                        <p class="card-text mb-0"><?=$row['jns_keanggotaan'];?></p>
                                                        <p class="card-text"><small class="text-muted">Tanggal Registrasi <?=date('d F Y', $row['date_created']);?></small></p>
                                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalProfile<?= $row['id'];?>">
                                                            <i class="fas fa-md fa-search" data-toggle="tooltip" data-placement="top" title="Lihat Detail"></i> Lihat Profile
                                                        </a> 
                                                    </div>
                                                
                                                </div>
                                            </div>
                                        </div>                                    
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

        <?php $no=1; foreach($member as $row): $no++; ?>
            <div class="modal fade" id="modalProfile<?=$row['id'];?>" tabindex="-1" aria-labelledby="modalProfileLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalProfileLabel">Detail Member</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">
                            <div class="modal-body">
                            
                                <div class="row gutters-sm">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body shadow">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                    <img src="<?= base_url('assets2/img/profile/'.$row['image']) ?>"
                                                        alt="user" class="rounded-circle shadow image-member" width="150">
                                                    <div class="mt-3">
                                                        <h4><?=$row['name'];?></h4>
                                                        <!-- <p class="text-secondary mb-1"><-?=$row['bidang_keahlian'];?></p> -->
                                                        <p class="text-muted font-size-sm"><?=$row['jns_keanggotaan'];?></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <ul class="list-group list-group-flush shadow">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                    <h6 class="mb-0">Instagram</h6>
                                                    <span class="text-secondary"><?=$row['akun_instagram'];?></span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                    <h6 class="mb-0">Linkedin</h6>
                                                    <span class="text-secondary"><?=$row['akun_linkedin'];?></span>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card mb-3">
                                            <div class="card-body shadow">
                                            
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Nama Lengkap</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?=$row['name'];?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Email</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?=$row['email'];?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">No HP/WA</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?=$row['no_hp'];?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Organisasi Maritim Muda yang Dipilih</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?=$row['provinsi'];?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Alamat Domisili</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?=$row['alamat_domisili'];?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Keahlian/Peminatan-1</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?=$row['bidang_keahlian'];?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Keahlian/Peminatan-2</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?=$row['bidang_keahlian2'];?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gutters-sm">
                                            <div class="col-sm-12 mb-3">
                                                <div class="card h-100">
                                                    <div class="card-body shadow">
                                                        <h6 class="d-flex align-items-center mb-3">Bio Singkat</h6>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                <p class="mb-0"><?= $row['bio_singkat']; ?></p>
                                                            </li>

                                                        </ul>


                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="col-sm-6 mb-3">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                        <h6 class="d-flex align-items-center mb-3">Organisasi</h6>
                                                        <ul class="list-group list-group-flush">
                                                            <li
                                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                <h6 class="mb-0">Instagram</h6>
                                                                <span class="text-secondary"><?=$row['akun_instagram'];?></span>
                                                            </li>
                                                            <li
                                                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                <h6 class="mb-0">Linkedin</h6>
                                                                <span class="text-secondary"><?=$row['akun_linkedin'];?></span>
                                                            </li>

                                                        </ul>


                                                    </div>
                                                </div>
                                            </div> -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <a href="" class="btn btn-secondary" data-dismiss="modal">Close</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- end modal -->
    </div>



</div>

</div>