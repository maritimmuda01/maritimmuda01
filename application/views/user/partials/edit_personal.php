    <div class="card">
        <div class="card-body shadow">


                <div class="col-12">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets2/img/profile/') . $user['image']; ?>" class="shadow" alt="" style="width: 100px; height:100px; border-radius: 20px; margin-bottom:2rem;">
                        </div>
                        <div class="col-md-8">
                            <label for="">Foto Profil</label><br/>
                            
                            <input type="file" class="form-control" name="image" id="image">
                            <span><p class="badge badge-danger">Maks. ukuran file 3Mb</p></span>
                            <span><small>Foto profil akan dipasang pada KTA</small></span>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="">Email</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="email" id="email" value="<?= $user['email'];?>" readonly>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="">Nama Lengkap</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="name" id="name" value="<?= $user['name'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="">Tempat Lahir</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" value="<?= $user['tmpt_lahir'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="">Tanggal Lahir</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $user['tgl_lahir'];?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="">Jenis Kelamin</label>
                        <div class="col-md-8">
                            <select type="text" class="form-control" name="jns_kelamin" id="jns_kelamin">
                                <option><?= $user['jns_kelamin'];?></option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="">Bio Singkat</label>
                        <div class="col-md-8">
                            <textarea type="text" class="form-control" id="bio_singkat" name="bio_singkat" placeholder="Maks. 1200 Karakter"><?= $user['bio_singkat']; ?></textarea>
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label class="col-md-4 col-form-label" for="">Organisasi Daerah Maritim Muda yang Dipilih</label>
                        <div class="col-md-8">
                            <select type="text" class="form-control" name="provinsi" id="provinsi">
                                <option><-?= $user['provinsi'];?></option>
                                <-?php foreach ($provinsi as $row) : ?>
                                    <option value="<-?= $row['nama_provinsi']; ?>"><-?= $row['nama_provinsi'] . ' - ' . $row['kode_provinsi'] ; ?></option>
                                <-?php endforeach;?>
                            </select>
                        </div>
                    </div> -->

                </div>


            

        </div>
    </div>