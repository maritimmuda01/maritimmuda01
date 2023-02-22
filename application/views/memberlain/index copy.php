<!-- Begin Page Content -->
<style>
body {
    /* margin-top: 20px; */
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}

.main-body {
    padding: 15px;
}

.card {
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col,
.gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}

.mb-3,
.my-3 {
    margin-bottom: 1rem !important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}

.h-100 {
    height: 100% !important;
}

.shadow-none {
    box-shadow: none !important;
}
</style>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>


    <!-- Content Row -->

    <!-- Content Row -->

    <div class="row">

        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Filter Data</h6>
                </div>
                <div class="card-body">
                    <form class="" action="" method="" id="form-filter">

                        <div class="form-group mb-0">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name">
                        </div>

                        <div class="form-group mb-0">
                            <label for="jns_keanggotaan">Jenis Keanggotaan</label>
                            <select class="form-control" id="jns_keanggotaan">
                                <option></option>
                                <option>Anggota Biasa (16 - 30 tahun)</option>
                                <option>Sahabat Maritim Muda (diatas 30 tahun)</option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <label for="provinsi">Provinsi</label>
                            <?= $form_provinsi; ?>
                        </div>

                        <div class="form-group d-flex justify-content-end mt-3">
                            <button type="button"  id="btn-reset" class="btn btn-secondary btn-sm mx-1"> Reset</button>
                            <button type="button" id="btn-filter" class="btn btn-primary btn-sm mx-1">Temukan Member Lain</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Filter</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="tablefilter" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Keanggotaan</th>
                                    <th>Provinsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>


                        </table>


                    </div>
                </div>
            </div>

            <!-- modal -->

            <!-- Modal Edit-->
            <?php $no=1; foreach($member as $row): $no++; ?>

            <div class="modal fade" id="modalProfile<?=$row['id'];?>" tabindex="-1" aria-labelledby="modalProfileLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
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
                                                    <div class="card-body">
                                                        <div class="d-flex flex-column align-items-center text-center">
                                                            <img src="<?= base_url('assets2/img/profile/'.$user['image']) ?>"
                                                                alt="Admin" class="rounded-circle" width="150">
                                                            <div class="mt-3">
                                                                <h4><?=$user['name'];?></h4>
                                                                <p class="text-secondary mb-1"><?=$user['bidang_keahlian'];?></p>
                                                                <p class="text-muted font-size-sm"><?=$user['jns_keanggotaan'];?></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mt-3">
                                                    <ul class="list-group list-group-flush">
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                            <h6 class="mb-0">Instagram</h6>
                                                            <span class="text-secondary"><?=$user['akun_instagram'];?></span>
                                                        </li>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                            <h6 class="mb-0">Linkedin</h6>
                                                            <span class="text-secondary"><?=$user['akun_linkedin'];?></span>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card mb-3">
                                                    <div class="card-body">
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
                                                                <h6 class="mb-0">Email</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                            <?=$user['email'];?>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">No Hp/Wa</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                            <?=$user['no_hp'];?>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Alamat</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                            <?=$user['alamat_domisili'];?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gutters-sm">
                                                    <div class="col-sm-6 mb-3">
                                                        <div class="card h-100">
                                                            <div class="card-body">
                                                                <h6 class="d-flex align-items-center mb-3">Pendidikan</h6>
                                                                <ul class="list-group list-group-flush">
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                        <h6 class="mb-0">Instagram</h6>
                                                                        <span class="text-secondary"><?=$user['akun_instagram'];?></span>
                                                                    </li>
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                        <h6 class="mb-0">Linkedin</h6>
                                                                        <span class="text-secondary"><?=$user['akun_linkedin'];?></span>
                                                                    </li>

                                                                </ul>
  

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <div class="card h-100">
                                                            <div class="card-body">
                                                                <h6 class="d-flex align-items-center mb-3">Organisasi</h6>
                                                                <ul class="list-group list-group-flush">
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                        <h6 class="mb-0">Instagram</h6>
                                                                        <span class="text-secondary"><?=$user['akun_instagram'];?></span>
                                                                    </li>
                                                                    <li
                                                                        class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                                                        <h6 class="mb-0">Linkedin</h6>
                                                                        <span class="text-secondary"><?=$user['akun_linkedin'];?></span>
                                                                    </li>

                                                                </ul>
  

                                                            </div>
                                                        </div>
                                                    </div>

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


</div>