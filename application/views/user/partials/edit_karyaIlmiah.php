<div class="card">
    <div class="card-body shadow">


            <div class="col-12">

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Penulis </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="penulis_karya_ilmiah" id="penulis_karya_ilmiah" value="<?=$user['penulis_karya_ilmiah'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Judul Karya Ilmiah </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="karya_ilmiah" id="karya_ilmiah" value="<?=$user['karya_ilmiah'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Nama/Jenis Publikasi </label>
                    <div class="col-md-8">
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
                    <label class="col-md-4 col-form-label" for="">Penerbit </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="penerbit_karya_ilmiah" id="penerbit_karya_ilmiah" value="<?=$user['penerbit_karya_ilmiah'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Kota </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="kota" id="kota" value="<?=$user['kota'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="">Tahun </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="tahun_karya_ilmiah" id="tahun_karya_ilmiah" value="<?=$user['tahun_karya_ilmiah'];?>">
                    </div>
                </div>


            
            </div>

    </div>
</div>