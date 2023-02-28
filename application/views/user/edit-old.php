<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <?= form_open_multipart('user/edit');?>

        <div class="row">

            <div class="col-lg-4 mb-3">
                <div class="card bg-gradient-light">
                    <div class="form-group row m-2">
                        <div class="col-sm-12 mb-3">
                            <div class="d-flex justify-content-center">
                                <img src="<?= base_url('assets2/img/profile/') . $user['image']; ?>" class="rounded-circle shadow" style="width:10rem; height:10rem;">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Pilih Gambar</label>
                                <span class="d-flex justify-content-center">
                                    <p class="badge badge-danger mt-3">Jenis file .jpg dan .png (Maks. 3 MB) </p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
               
               <div class="row">


                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-gradient-primary" data-toggle="collapse" href="#dataPersonal" role="button">
                                <h5 class="text-white">Personal</h5>
                            </div>
                            <div class="card-body shadow collapse show" id="dataPersonal">

                                    <!-- personal -->
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>"
                                                readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row" >
                                        <label for="tmpt_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="<?= $user['tmpt_lahir']; ?>">
                                            <?= form_error('tmpt_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row" >
                                        <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>">
                                            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jns_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <select type="text" class="form-control" id="jns_kelamin" name="jns_kelamin"> 
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="bio_singkat" class="col-sm-4 col-form-label">Bio Singkat</label>
                                        <div class="col-sm-8">
                                            <!-- <input type="text" class="form-control" id="bio_singkat" name="bio_singkat" value="<?= $user['bio_singkat']; ?>"> -->
                                            <textarea type="text" class="form-control" id="bio_singkat" name="bio_singkat" placeholder="Maks. 1200 Karakter"><?= $user['bio_singkat']; ?></textarea>
                                            <?= form_error('bio_singkat', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="provinsi" class="col-sm-4 col-form-label">Organisasi Daerah Maritim Muda Yang Dipilih</label>
                                        <div class="col-sm-8">
                                            <select type="text" class="form-control" id="provinsi" name="provinsi"> 
                                            <!-- <option value="">Pilih Menu</option> -->
                                                <?php foreach ($provinsi as $row) : ?>
                                                    <option value="<?= $row['nama_provinsi']; ?>"><?= $row['nama_provinsi'] . ' - ' . $row['kode_provinsi'] ; ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-gradient-primary" data-toggle="collapse" href="#dataKontak" role="button">
                                <h5 class="text-white">Kontak</h5>
                            </div>
                            <div class="card-body shadow collapse show" id="dataKontak">

                            
                                    <div class="form-group row">
                                        <label for="no_hp" class="col-sm-4 col-form-label">No HP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="+628123xxxxxxx" value="<?= $user['no_hp']; ?>">
                                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="akun_instagram" class="col-sm-4 col-form-label">Akun Instagram</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="akun_instagram" name="akun_instagram" placeholder="@kaisarakhir" value="<?= $user['akun_instagram']; ?>">
                                            <?= form_error('akun_instagram', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="akun_linkedin" class="col-sm-4 col-form-label">Akun Linkedin</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="akun_linkedin" name="akun_linkedin" placeholder="https://www.linkedin.com/in/kaisar-akhir-941103122/" value="<?= $user['akun_linkedin']; ?>">
                                            <?= form_error('akun_linkedin', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-4 col-form-label">Alamat KTP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Jalan Casablanca No. 88, RT 016 RW 005, Kec. Tebet, Kota Jakarta Selatan" value="<?= $user['alamat']; ?>">
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat_domisili" class="col-sm-4 col-form-label">Alamat Domisili</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="alamat_domisili" name="alamat_domisili" placeholder="Jalan Casablanca No. 88, RT 016 RW 005, Kec. Tebet, Kota Jakarta " value="<?= $user['alamat_domisili']; ?>">
                                            <?= form_error('alamat_domisili', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-gradient-primary" data-toggle="collapse" href="#dataPendidikan" role="button">
                                <h5 class="text-white">Pendidikan Terakhir</h5>
                            </div>
                            <div class="card-body shadow collapse show" id="dataPendidikan">

                            
                                    <div class="form-group row">
                                        <label for="pendidikan" class="col-sm-4 col-form-label">Jenjang Pendidikan</label>
                                        <div class="col-sm-8">
                                            <select type="text" class="form-control" id="pendidikan" name="pendidikan">
                                            <!-- <option value="">Pilih Menu</option> -->
                                            <?php foreach ($pendidikan as $p) : ?>
                                                <option value="<?= $p['nama_pendidikan']; ?>"><?= $p['nama_pendidikan']; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_sekolah" class="col-sm-4 col-form-label">Nama Sekolah / Perguruan Tinggi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?= $user['nama_sekolah']; ?>">
                                            <?= form_error('nama_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jurusan" class="col-sm-4 col-form-label">Jurusan/Program Studi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $user['jurusan'];?>">
                                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="thn_masuk" class="col-sm-4 col-form-label">Tahun Masuk Pendidikan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="thn_masuk" name="thn_masuk" value="<?= $user['thn_masuk']; ?>">
                                            <?= form_error('thn_masuk', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="thn_tamat" class="col-sm-4 col-form-label">Tahun Lulus Pendidikan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="thn_tamat" name="thn_tamat"
                                                value="<?= $user['thn_tamat']; ?>">
                                            <?= form_error('thn_tamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Masih Aktif" name="sedang_studi" id="sedang_studi">
                                                <label class="form-check-label" for="sedang_studi">
                                                    Sedang Studi
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-gradient-primary" data-toggle="collapse" href="#dataKeanggotaan" role="button">
                                <h5 class="text-white">Keanggotaan</h5>
                            </div>
                            <div class="card-body shadow collapse show" id="dataKeanggotaan">
                                    <div class="form-group row">
                                        <label for="jns_keanggotaan" class="col-sm-4 col-form-label">Jenis Keanggotaan</label>
                                        <div class="col-sm-8">
                                            <select type="text" class="form-control" id="jns_keanggotaan" name="jns_keanggotaan">
                                                <!-- <option>PILIH</option> -->
                                                <option>Anggota Biasa (16 - 30 Tahun)</option>
                                                <option>Sahabat Maritim Muda (Di Atas 30 Tahun)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="bidang_keahlian" class="col-sm-4 col-form-label">Bidang Keahlian/Peminatan-1</label>
                                        <div class="col-sm-8">
                                            <select type="text" class="form-control" id="bidang_keahlian" name="bidang_keahlian">
                                            <!-- <option value="">Pilih Menu</option> -->
                                                <?php foreach ($keahlian as $row) : ?>
                                                    <option value="<?= $row['nama_keahlian']; ?>"><?= $row['nama_keahlian']; ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bidang_keahlian2" class="col-sm-4 col-form-label">Bidang Keahlian/Peminatan-2</label>
                                        <div class="col-sm-8">
                                            <select type="text" class="form-control" id="bidang_keahlian2" name="bidang_keahlian2">
                                            <!-- <option value="">Pilih Menu</option> -->
                                                <?php foreach ($keahlian as $row) : ?>
                                                    <option value="<?= $row['nama_keahlian']; ?>"><?= $row['nama_keahlian']; ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-gradient-primary" data-toggle="collapse" href="#dataPekerjaan" role="button">
                                <h5 class="text-white">Pekerjaan</h5>
                            </div>
                            <div class="card-body shadow collapse show" id="dataPekerjaan">

                                    <div class="form-group row">
                                        <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-8">
                                            <!-- <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<-?= $user['pekerjaan']; ?>"> -->

                                            <select type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                                                <?php foreach ($pekerjaan as $row) : ?>
                                                    <option value="<?= $row['nama_pekerjaan']; ?>"><?= $row['nama_pekerjaan']; ?></option>
                                                <?php endforeach;?>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="instansi_pekerjaan" class="col-sm-4 col-form-label">Instansi Pekerjaan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="instansi_pekerjaan" name="instansi_pekerjaan" value="<?= $user['instansi_pekerjaan']; ?>">
                                            <?= form_error('instansi_pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-gradient-primary" data-toggle="collapse" href="#dataOrganisasi" role="button">
                                <h5 class="text-white">Organisasi Kemasyarakatan (Perkumpulan/Yayasan) dan Komunitas yang Diikuti</h5>
                            </div>
                            <div class="card-body shadow collapse show" id="dataOrganisasi">

                                    <div class="form-group row">
                                        <label for="organisasi" class="col-sm-4 col-form-label">Nama Organisasi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="organisasi" name="organisasi" value="<?= $user['organisasi']; ?>">
                                            <?= form_error('organisasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jabatan_organisasi" class="col-sm-4 col-form-label">Jabatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jabatan_organisasi" name="jabatan_organisasi" value="<?= $user['jabatan_organisasi'];?>">
                                            <?= form_error('jabatan_organisasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="periode" class="col-sm-4 col-form-label">Periode</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="periode" name="periode" value="<?= $user['periode'];?>">
                                            <?= form_error('periode', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-gradient-primary" data-toggle="collapse" href="#dataPrestasi" role="button">
                                <h5 class="text-white">Prestasi</h5>
                            </div>
                            <div class="card-body shadow collapse show" id="dataPrestasi">
                                    <div class="form-group row">
                                        <label for="prestasi" class="col-sm-4 col-form-label">Capaian Juara/Penghargaan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="prestasi" name="prestasi" value="<?= $user['prestasi']; ?>">
                                            <?= form_error('prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="kegiatan_prestasi" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kegiatan_prestasi" name="kegiatan_prestasi" value="<?= $user['kegiatan_prestasi']; ?>">
                                            <?= form_error('kegiatan_prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="penyelenggara_prestasi" class="col-sm-4 col-form-label">Penyelenggara/Pemberi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penyelenggara_prestasi" name="penyelenggara_prestasi" value="<?= $user['penyelenggara_prestasi'];?>">
                                            <?= form_error('penyelenggara_prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tingkat_prestasi" class="col-sm-4 col-form-label">Tingkat</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tingkat_prestasi" name="tingkat_prestasi" value="<?= $user['tingkat_prestasi']; ?>">
                                            <?= form_error('tingkat_prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_prestasi" class="col-sm-4 col-form-label">Tahun</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tahun_prestasi" name="tahun_prestasi" value="<?= $user['tahun_prestasi'];?>">
                                            <?= form_error('tahun_prestasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-gradient-primary" data-toggle="collapse" href="#dataKaryaIlmiah" role="button">
                                <h5 class="text-white">Karya Ilmiah</h5>
                            </div>
                            <div class="card-body shadow collapse show" id="dataKaryaIlmiah">
                            
                                    <div class="form-group row">
                                        <label for="penulis_karya_ilmiah" class="col-sm-4 col-form-label">Penulis</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penulis_karya_ilmiah" name="penulis_karya_ilmiah" value="<?= $user['penulis_karya_ilmiah']; ?>">
                                            <?= form_error('penulis_karya_ilmiah', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="karya_ilmiah" class="col-sm-4 col-form-label">Judul Karya Ilmiah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="karya_ilmiah" name="karya_ilmiah" value="<?= $user['karya_ilmiah']; ?>">
                                            <?= form_error('karya_ilmiah', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_karya_ilmiah" class="col-sm-4 col-form-label">Nama/Jenis Publikasi</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="jenis_karya_ilmiah" id="jenis_karya_ilmiah">
                                                <option>Buku</option>
                                                <option>Arikel Jurnal</option>
                                                <option>Artikel Majalah</option>
                                                <option>Abstrak</option>
                                                <option>Artikel Prosiding</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="penerbit_karya_ilmiah" class="col-sm-4 col-form-label">Penerbit</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penerbit_karya_ilmiah" name="penerbit_karya_ilmiah" value="<?= $user['penerbit_karya_ilmiah']; ?>">
                                            <?= form_error('penerbit_karya_ilmiah', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kota" class="col-sm-4 col-form-label">Kota</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="kota" name="kota" value="<?= $user['kota']; ?>">
                                            <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_karya_ilmiah" class="col-sm-4 col-form-label">Tahun</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tahun_karya_ilmiah" name="tahun_karya_ilmiah" value="<?= $user['tahun_karya_ilmiah']; ?>" >
                                            <?= form_error('tahun_karya_ilmiah', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-gradient-primary" data-toggle="collapse" href="#dataPengabdian" role="button">
                                <h5 class="text-white">Pengabdian Kepada Masyarakat</h5>
                            </div>
                            <div class="card-body shadow collapse show" id="dataPengabdian">
                                    <div class="form-group row">
                                        <label for="pengabdian" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="pengabdian" name="pengabdian" value="<?= $user['pengabdian']; ?>">
                                            <?= form_error('pengabdian', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="posisi_pengabdian" class="col-sm-4 col-form-label">Posisi/Peran</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="posisi_pengabdian" name="posisi_pengabdian" value="<?= $user['posisi_pengabdian']; ?>">
                                            <?= form_error('posisi_pengabdian', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="penyelenggara_pengabdian" class="col-sm-4 col-form-label">Lembaga Penyelenggara</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penyelenggara_pengabdian" name="penyelenggara_pengabdian" value="<?= $user['penyelenggara_pengabdian']; ?>">
                                            <?= form_error('penyelenggara_pengabdian', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_pengabdian" class="col-sm-4 col-form-label">Tahun</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tahun_pengabdian" name="tahun_pengabdian" value="<?= $user['tahun_pengabdian']; ?>">
                                            <?= form_error('tahun_pengabdian', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-gradient-primary" data-toggle="collapse" href="#dataPenelitian" role="button">
                                <h5 class="text-white">Penelitian</h5>
                            </div>
                            <div class="card-body shadow collapse show" id="dataPenelitian">
                                    <div class="form-group row">
                                        <label for="penelitian" class="col-sm-4 col-form-label">Judul Penelitian</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="penelitian" name="penelitian" value="<?= $user['penelitian']; ?>">
                                            <?= form_error('penelitian', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="posisi_penelitian" class="col-sm-4 col-form-label">Posisi/Peran</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="posisi_penelitian" name="posisi_penelitian" value="<?= $user['posisi_penelitian'];?>">
                                            <?= form_error('posisi_penelitian', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sumber_dana" class="col-sm-4 col-form-label">Sumber Dana</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="sumber_dana" name="sumber_dana" value="<?= $user['sumber_dana'];?>">
                                            <?= form_error('sumber_dana', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="instansi_penelitian" class="col-sm-4 col-form-label">Instansi Penelitian</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="instansi_penelitian" name="instansi_penelitian" value="<?= $user['instansi_penelitian'];?>">
                                            <?= form_error('instansi_penelitian', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_penelitian" class="col-sm-4 col-form-label">Tahun</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tahun_penelitian" name="tahun_penelitian" value="<?= $user['tahun_penelitian'];?>">
                                            <?= form_error('tahun_penelitian', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                        
                            </div>
                        </div>
                    </div>



                </div>                           

            </div>



        </div>
        
        <div class="form-group row justify-content-end mt-3">
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-edit"></i> Update Data</button>
            </div>
        </div>

    </form>

</div>
<!-- /.container-fluid -->

</div>