<div class="card">
    <div class="card-body shadow">

        
            <div class="col-12">
                
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Jenjang Pendidikan</label>
                    <div class="col-md-8">
                        <select type="text" class="form-control" name="pendidikan" id="pendidikan">
                            <option><?= $user['pendidikan'];?></option>
                            <?php foreach ($pendidikan as $p) : ?>
                                <option value="<?= $p['nama_pendidikan']; ?>"><?= $p['nama_pendidikan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Nama Sekolah/Perguruan Tinggi</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" value="<?= $user['nama_sekolah'];?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Jurusan/Program Studi</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $user['jurusan'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Tahun Masuk Pendidikan</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="thn_masuk" id="thn_masuk" value="<?= $user['thn_masuk'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Tahun Lulus Pendidikan</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="thn_tamat" id="thn_tamat" value="<?= $user['thn_tamat'];?>">
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