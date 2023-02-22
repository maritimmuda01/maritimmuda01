<div class="card">
    <div class="card-body shadow">

    
        <div class="col-12">

            <div class="form-group row">
                <label class="col-md-4 col-form-label" for="">Pekerjaan</label>
                <div class="col-md-8">
                    <select type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                        <option><?= $user['pekerjaan'];?></option>
                        <?php foreach ($pekerjaan as $row) : ?>
                            <option value="<?= $row['nama_pekerjaan']; ?>"><?= $row['nama_pekerjaan']; ?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label" for="">Instansi Pekerjaan</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="instansi_pekerjaan" id="instansi_pekerjaan" value="<?= $user['instansi_pekerjaan'];?>">
                </div>
            </div>
    
        </div>


    </div>
</div>