<div class="card">
    <div class="card-body shadow">

        
            <div class="col-12">

                <!-- <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Nomor Anggota</label>
                    <div class="col-md-8">
                        <input type="" class="form-control" placeholder="123456" readonly> 
                    </div>
                </div> -->
                
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Organisasi Daerah Maritim Muda yang Dipilih</label>
                    <div class="col-md-8">
                        <select type="text" class="form-control" name="provinsi" id="provinsi">
                            <option><?= $user['provinsi'];?></option>
                            <?php foreach ($provinsi as $row) : ?>
                                <option value="<?= $row['nama_provinsi']; ?>"><?= $row['nama_provinsi'] . ' - ' . $row['kode_provinsi'] ; ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Jenis Keanggotaan</label>
                    <div class="col-md-8">
                        <select type="text" class="form-control" name="jns_keanggotaan" id="jns_keanggotaan">
                            <option><?= $user['jns_keanggotaan'];?></option>
                            <option>Anggota Biasa (16 - 30 Tahun)</option>
                            <option>Sahabat Maritim Muda (Di Atas 30 Tahun)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Bidang Keahlian/Peminatan-1</label>
                    <div class="col-md-8">
                        <select type="text" class="form-control" name="bidang_keahlian" id="bidang_keahlian">
                            <option><?= $user['bidang_keahlian'];?></option>
                            <?php foreach ($keahlian as $row) : ?>
                                <option value="<?= $row['nama_keahlian']; ?>"><?= $row['nama_keahlian']; ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Bidang Keahlian/Peminatan-2</label>
                    <div class="col-md-8">
                        <select type="text" class="form-control" name="bidang_keahlian2" id="bidang_keahlian2">
                            <option><?= $user['bidang_keahlian2'];?></option>
                            <?php foreach ($keahlian as $row) : ?>
                                <option value="<?= $row['nama_keahlian']; ?>"><?= $row['nama_keahlian']; ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
            
            </div>


    </div>
</div>