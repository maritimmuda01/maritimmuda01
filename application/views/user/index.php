<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
    <?= form_open_multipart('user/edit');?>

    <div class="row">
        <div class="col-lg-12">
            <?=$this->session->flashdata('message');?>
        </div>
    </div>

    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-body shadow">
                    <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal</a></li>
                        <li class="nav-item"><a class="nav-link" id="kontak-tab" data-toggle="tab" href="#kontak" role="tab" aria-controls="kontak" aria-selected="false">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" id="pendidikan-tab" data-toggle="tab" href="#pendidikan" role="tab" aria-controls="pendidikan" aria-selected="false">Pendidikan Terakhir</a></li>
                        <li class="nav-item"><a class="nav-link" id="keanggotaan-tab" data-toggle="tab" href="#keanggotaan" role="tab" aria-controls="keanggotaan" aria-selected="false">Keanggotaan</a></li>
                        <li class="nav-item"><a class="nav-link" id="pekerjaan-tab" data-toggle="tab" href="#pekerjaan" role="tab" aria-controls="pekerjaan" aria-selected="false">Pekerjaan</a></li>
                        <li class="nav-item"><a class="nav-link" id="organisasi-tab" data-toggle="tab" href="#organisasi" role="tab" aria-controls="organisasi" aria-selected="false">Riwayat Organisasi</a></li>
                        <li class="nav-item"><a class="nav-link" id="prestasi-tab" data-toggle="tab" href="#prestasi" role="tab" aria-controls="prestasi" aria-selected="false">Prestasi</a></li>
                        <li class="nav-item"><a class="nav-link" id="karyailmiah-tab" data-toggle="tab" href="#karyailmiah" role="tab" aria-controls="karyailmiah" aria-selected="false">Karya Ilmiah</a></li>
                        <li class="nav-item"><a class="nav-link" id="pengabdian-tab" data-toggle="tab" href="#pengabdian" role="tab" aria-controls="pengabdian" aria-selected="false">Pengabdian</a></li>
                        <li class="nav-item"><a class="nav-link" id="penelitian-tab" data-toggle="tab" href="#penelitian" role="tab" aria-controls="penelitian" aria-selected="false">Penelitian</a></li>
                    </ul>
                </div>
            </div>            
        </div>

        <div class="col-md-9">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                    <h3>Personal</h3>

                    <?php
                        $this->load->view('user/indexpart/personal')
                    ?>

                </div>
                <div class="tab-pane fade" id="kontak" role="tabpanel" aria-labelledby="kontak-tab">
                    <h3>Kontak</h3>
                    <?php
                        $this->load->view('user/indexpart/kontak')
                    ?>

                </div>
                <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                    <h3>Pendidikan Terakhir</h3>
                    <?php
                        $this->load->view('user/indexpart/pendidikan')
                    ?>


                </div>
                <div class="tab-pane fade" id="keanggotaan" role="tabpanel" aria-labelledby="keanggotaan-tab">
                    <h3>Keanggotaan</h3>
                    <?php
                        $this->load->view('user/indexpart/keanggotaan')
                    ?>

                </div>
                <div class="tab-pane fade" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan-tab">
                    <h3>Pekerjaan</h3>
                    <?php
                        $this->load->view('user/indexpart/pekerjaan')
                    ?>
                </div>
                <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                    <h3>Riwayat Organisasi</h3>
                    <?php
                        $this->load->view('user/indexpart/organisasi')
                    ?>

                </div>
                <div class="tab-pane fade" id="prestasi" role="tabpanel" aria-labelledby="prestasi-tab">
                    <h3>Prestasi</h3>
                    <?php
                        $this->load->view('user/indexpart/prestasi')
                    ?>
                </div>
                <div class="tab-pane fade" id="karyailmiah" role="tabpanel" aria-labelledby="karyailmiah-tab">
                    <h3>Karya Ilmiah</h3>
                    <?php
                        $this->load->view('user/indexpart/karyailmiah')
                    ?>

                </div>
                <div class="tab-pane fade" id="pengabdian" role="tabpanel" aria-labelledby="pengabdian-tab">
                    <h3>Pengabdian</h3>
                    <?php
                        $this->load->view('user/indexpart/pengabdian')
                    ?>
                </div>

                <div class="tab-pane fade" id="penelitian" role="tabpanel" aria-labelledby="penelitian-tab">
                    <h3>Penelitian</h3>
                    <?php
                        $this->load->view('user/indexpart/penelitian')
                    ?>
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

</div>
</div>