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
.responsive{
    width: 100%;
}
.foto-profile {

    margin-top: -6rem;
    width: 10rem;
    height: 10rem;
}
</style>



<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?=$this->session->flashdata('message');?>
        </div>
    </div>

    <!-- <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<-?=base_url('assets2/img/profile/') . $user['image'];?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><-?=$user['name'];?></h5>
                    <p class="card-text"><-?=$user['email'];?></p>
                    <p class="card-text"><small class="text-muted">Member Sejak
                            <-?=date('d F Y', $user['date_created']);?></small></p>
                </div>
            </div>
        </div>
    </div> -->


    <div class="row">
        <div class="col-12">
            <div class="baner">
                <img src="<?= base_url('assets2/img/banner.jpg');?>" alt="" class="responsive">
            </div>
        </div>
    </div>

    <div class="row gutters-sm">

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="<?=base_url('assets2/img/profile/') . $user['image'];?>" alt="Admin"
                            class="rounded-circle foto-profile">
                        <div class="mt-3">
                            <h4><?=$user['name'];?></h4>
                            <p class="text-secondary mb-1"><?=$user['bidang_keahlian'];?></p>
                            <p class="text-muted font-size-sm"><?=$user['jns_keanggotaan'];?></p>
                            <a href="<?= base_url('user/edit');?>"class="btn btn-primary">Update Profile</a>
                            <!-- <a href="<-?= base_url('user/kta');?>"class="btn btn-primary" id="print">Print</a> -->
                            <!-- <button class="btn btn-primary" >print</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <ul class="list-group list-group-flush">
                    
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fab fa-lg fa-instagram text-danger"></i> Instagram</h6>
                        <span class="text-secondary"><?=$user['akun_instagram'];?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="fab fa-lg fa-linkedin text-primary"></i> Linkedin</h6>
                        <span class="text-secondary"><?=$user['akun_linkedin'];?></span>
                    </li>
                </ul>
            </div>

            
            <div class="card mt-3">
                <div class="card-body">
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
                            <h6 class="mb-0">Tempat/Tgl Lahir</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?=$user['tmpt_lahir'] . ' - ' . $user['tgl_lahir'];?>
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
                      
                            <h6 class="text-primary p-3 border-bottom-primary">Pendidikan</h6>
                            <ul class="list-group list-group-flush">
                    
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"> Jenjang Pendidikan</h6>
                                    <span class="text-secondary"><?=$user['pendidikan'];?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"> Nama Instansi</h6>
                                    <span class="text-secondary"><?=$user['nama_sekolah'];?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"> Jurusan</h6>
                                    <span class="text-secondary"><?=$user['jurusan'];?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"> Dari</h6>
                                    <span class="text-secondary"><?=$user['thn_masuk'] . ' - ' . $user['thn_tamat'];?></span>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <div class="card h-100">
                      
                            <h6 class="text-primary p-3 border-bottom-primary">Pekerjaan</h6>
                            <ul class="list-group list-group-flush">
                    
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"> Perusahaan</h6>
                                    <span class="text-secondary"><?=$user['instansi_pekerjaan'];?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"> Posisi</h6>
                                    <span class="text-secondary"><?=$user['pekerjaan'];?></span>
                                </li>
                            </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

<!-- modal -->

    <div class="modal fade" id="ModalKta" tabindex="-1" aria-labelledby="ModalKtaLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalKtaLabel">Detail Kartu Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                    <div class="modal-body">  

                    <section class="page-kta mt-3" id="page-kta">
                        <div class="">

                        <div class="col-12 page1 mb-3">

                            <div class="header">
                            <div class="d-flex justify-content-between">
                                <div class="header-kiri">
                                <img src="<?=base_url('assets2/img/kta/header.png');?>" class="gambar-header" alt="">
                                </div>
                                <div class="header-tengah">
                                <img src="<?=base_url('assets2/img/kta/maritimlogo.png');?>" class="gambar-maritim" alt="">

                                </div>
                                <div class="header-kanan">
                                <div class="judul-maritim">
                                    <h4 class="judul1">Maritim Muda Nusantara</h4>
                                    <h4 class="judul2">Indonesian Maritime Youths</h4>
                                </div>
                                </div>
                            </div>
                            </div>

                            <div class="judul-kta">
                            <div class="d-flex justify-content-center">
                                <p class="title1">KARTU TANDA ANGGOTA</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="title2">Membership Card</p>
                            </div>
                            </div>

                            <div class="member">
                            <div class="d-flex justify-content-center">
                                <p class="nama-member" style="text-transform: uppercase;"><?= $user['name'];?></p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="sahabat-maritim" style="text-transform: uppercase;"><?= $user['jns_keanggotaan'];?></p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="qrcode"><i class="fas fa-qrcode fa-4x"></i></p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="nomor-member">063456789987</i></p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="provinsi">DKI Jakarta</i></p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="bidang-keahlian">Bidang Keahlian/Peminatan:</i></p>
                            </div>

                            <div class="d-flex justify-content-center">
                                <div class="judul-keahlian">
                                <p><?= $user['bidang_keahlian'];?></p>
                                </div>
                            </div>
                            </div>


                            <div class="bottom">
                            <div class="d-flex justify-content-between">
                                <div class="bottom-kiri">
                                <p class="tanggal">Jakarta. <?= date('d F Y', $user['date_created']);?></p>
                                <img src="<?=base_url('assets2/img/kta/ttd.jpg');?>" class="ttd" alt="">
                                <p class="title-nama">Kaisar Akhir</p>
                                <p class="title-ketua">Ketua Umum</p>

                                </div>
                                <div class="bottom-kanan">
                                <img src="<?=base_url('assets2/img/kta/bottom.png');?>" class="gambar-bottom" alt="">
                                </div>
                            </diV>
                            </div>

                        </div>

                        <div class="col-12 page2 mb-3">
                            <div class="header2">
                            <div class="d-flex justify-content-center">
                                <p class="title-nawa">NAWA SATYA</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <p class="subtitle-nawa">Maritim Muda Nusantara</p>
                            </div>
                            </div>

                            <div class="peta"></div>

                            <div class="point-nawa">
                            <div class="col-md-8 daftar-nawasatya">
                                <p class="list-point">1. Bertakwa kepada Tuhan Yang Maha Esa</p>
                                <p class="list-point">2. Menjaga kehormatan tanah air Indonesia</p>
                                <p class="list-point">3. Berpikir dan bekerja untuk kemajuan bangsa Indonesia</p>
                                <p class="list-point">4. Berbagi dan memberi untuk kesejahteraan rakyat Indonesia</p>
                                <p class="list-point">5. Menjunjung tinggi kedaulatan maritim Indonesia</p>
                                <p class="list-point">6. Berkarya untuk kejayaan maritim Indonesia</p>
                                <p class="list-point">7. Memanfaatkan dan mengembangkan ilmu pengetahuan dan teknologi maritim Indonesia</p>
                                <p class="list-point">8. Memperkuat budaya maritim Indonesia</p>
                                <p class="list-point">9. Mengelola dan menjaga keberlanjutan sumber daya laut Indonesia</p>
                            </div>
                            </div>

                            <div class="slogan">
                            <div class="d-flex justify-content-end">
                                <div class="header-slogan">
                                <p class="point-slogan">Kita Muda,</p>
                                <p class="point-slogan">Wujudkan Poros</p>
                                <p class="point-slogan">Maritim Dunia!</p>
                                </div>
                            </div>
                            </div>

                            <div class="media">
                            <div class="col-md-12">
                                <div class="row">
                                <div class="col-6">
                                    <p class="point-media mx-2"><i class="fab fa-instagram"></i> maritimmuda.id</p>
                                    <p class="point-media mx-2"><i class="far fa-envelope"></i> admin@maritimmuda.id</p>
                                </div>
                                <div class="col-6">
                                    <p class="point-media mx-2"><i class="fas fa-globe"></i> www.maritimmuda.id</p>
                                    <p class="point-media mx-2"><i class="fab fa-youtube"></i> Maritim Muda Nusantara</p>
                                </div>
                                </div>
                            </div>


                            </div>

                            <div class="bottom2">
                            <div class="d-flex justify-content-start">
                                <div class="header-bottom">
                                <img src="<?=base_url('assets2/img/kta/bottom2.png');?>" class="gambar-bottom" alt="">
                                </div>
                            </div>
                            </div>


                        </div>

                        </div>
                    </section>                                         

                    </div>
                    <div class="modal-footer">
                        <button type="Reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-primary" id="print">Print</button>
                    </div>
                
            </div>
        </div>
    </div>

<!-- end modal -->

    <div class="row gutters-sm">
        <div class="col-sm-4 mb-3">
            <div class="card h-100">
                
                    <h6 class="text-primary p-3 border-bottom-primary">Organisasi</h6>
                    <ul class="list-group list-group-flush">
            
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Nama Organisasi</h6>
                            <span class="text-secondary"><?=$user['organisasi'];?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Jabatan</h6>
                            <span class="text-secondary"><?=$user['jabatan_organisasi'];?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Periode</h6>
                            <span class="text-secondary"><?=$user['periode'];?></span>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <div class="card h-100">
                
                    <h6 class="text-primary p-3 border-bottom-primary">Prestasi</h6>
                    <ul class="list-group list-group-flush">
            
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Prestasi</h6>
                            <span class="text-secondary"><?=$user['prestasi'];?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Penyelenggara</h6>
                            <span class="text-secondary"><?=$user['penyelenggara_prestasi'];?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Tahun</h6>
                            <span class="text-secondary"><?=$user['tahun_prestasi'];?></span>
                        </li>
                    </ul>
            </div>
        </div>

        <div class="col-sm-4 mb-3">
            <div class="card h-100">
                
                    <h6 class="text-primary p-3 border-bottom-primary">Pengabdian</h6>
                    <ul class="list-group list-group-flush">
            
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Nama Kegiatan</h6>
                            <span class="text-secondary"><?=$user['pengabdian'];?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Posisi/Peran</h6>
                            <span class="text-secondary"><?=$user['posisi_pengabdian'];?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Penyelenggara</h6>
                            <span class="text-secondary"><?=$user['penyelenggara_pengabdian'];?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Tahun</h6>
                            <span class="text-secondary"><?=$user['tahun_pengabdian'];?></span>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <div class="card h-100">
                
                    <h6 class="text-primary p-3 border-bottom-primary">Karya Ilmiah</h6>
                    <ul class="list-group list-group-flush">
            
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Judul</h6>
                            <span class="text-secondary"><?=$user['karya_ilmiah'];?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Jenis Karya Ilmiah</h6>
                            <span class="text-secondary"><?=$user['jenis_karya_ilmiah'];?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"> Tahun</h6>
                            <span class="text-secondary"><?=$user['tahun_karya_ilmiah'];?></span>
                        </li>
                    </ul>
            </div>
        </div>

    </div>




</div>


</div>