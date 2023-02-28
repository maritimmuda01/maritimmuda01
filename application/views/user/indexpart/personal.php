<div class="row gutters-sm">
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="shadow">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?= base_url('assets2/img/profile/'.$user['image']) ?>"
                        alt="user" class="rounded-circle shadow mt-3" style="width:10rem; height:10rem;">
                    <div class="mt-3">
                        <h5><?=$user['name'];?></h5>
                        <p class="text-muted font-size-sm"><?=$user['jns_keanggotaan'];?></p>
                        <p class="text-muted font-size-sm">064454547</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body shadow">
                <a href="" class="" data-toggle="modal" data-target="#ModalKta">
                <img src="<?= base_url('assets2/img/logo_maritim2.png');?>" class="img-fluid" alt="maritim">
                    <span>
                        <p class="btn btn-block btn-primary">Kartu Tanda Anggota</p> 
                    </span> 
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body shadow">
            
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?=$user['email'];?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?=$user['name'];?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tempat Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?=$user['tmpt_lahir'];?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?=$user['tgl_lahir'];?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Jenis Kelamin</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?=$user['jns_kelamin'];?>
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
                                <p class="mb-0"><?= $user['bio_singkat']; ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>