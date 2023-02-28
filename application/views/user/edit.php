<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>


    <div class="row">
        <div class="col-lg-12">
            <?=$this->session->flashdata('message');?>
        </div>
    </div>

    <form  method="post" action="<?= base_url('User/edit');?>" enctype="multipart/form-data">

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
                            <li class="nav-item"><a class="nav-link" id="pengabdian-tab" data-toggle="tab" href="#pengabdian" role="tab" aria-controls="pengabdian" aria-selected="false">Pengabdian kepada Masyarakat</a></li>
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
                            $this->load->view('user/partials/edit_personal')
                        ?>

                    </div>
                    <div class="tab-pane fade" id="kontak" role="tabpanel" aria-labelledby="kontak-tab">
                        <h3>Kontak</h3>
                        <?php 
                            $this->load->view('user/partials/edit_kontak')
                        ?>

                    </div>
                    <div class="tab-pane fade" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                        <h3>Pendidikan Terakhir</h3>
                        <?php 
                            $this->load->view('user/partials/edit_pendidikan')
                        ?>

                    </div>
                    <div class="tab-pane fade" id="keanggotaan" role="tabpanel" aria-labelledby="keanggotaan-tab">
                        <h3>Keanggotaan</h3>
                        <?php 
                            $this->load->view('user/partials/edit_keanggotaan')
                        ?>

                    </div>
                    <div class="tab-pane fade" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan-tab">
                        <h3>Pekerjaan</h3>
                            <?php 
                                $this->load->view('user/partials/edit_pekerjaan')
                            ?>
                    </div>
                    <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                        <h3>Riwayat Organisasi/Komunitas </h3>

                        <?php 
                            $this->load->view('user/partials/edit_organisasi')
                        ?>

                    </div>
                    <div class="tab-pane fade" id="prestasi" role="tabpanel" aria-labelledby="prestasi-tab">
                        <h3>Prestasi</h3>

                        <?php 
                            $this->load->view('user/partials/edit_prestasi')
                        ?>
                    </div>
                    <div class="tab-pane fade" id="karyailmiah" role="tabpanel" aria-labelledby="karyailmiah-tab">
                        <h3>Karya Ilmiah</h3>
                        <?php 
                            $this->load->view('user/partials/edit_karyaIlmiah')
                        ?>
                    </div>
                    <div class="tab-pane fade" id="pengabdian" role="tabpanel" aria-labelledby="pengabdian-tab">
                        <h3>Pengabdian Kepada Masyarakat</h3>
                        <?php 
                            $this->load->view('user/partials/edit_pengabdian')
                        ?>                   
                    </div>

                    <div class="tab-pane fade" id="penelitian" role="tabpanel" aria-labelledby="penelitian-tab">
                        <h3>Penelitian</h3>
                        <?php 
                            $this->load->view('user/partials/edit_penelitian')
                        ?>
                    </div>

                </div>
            </div>

            <div class="col-12 mb-3 mt-3">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary"><i class="far fa-check-circle"></i> Save</button>
                </div>
            </div>
            
        </div>

    </form>    


</div>
</div>