<div class="col-md-12">

    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url('Pemasaran') ?>"><i class="fas fa-arrow-left text-dark mb-3"></i></a>
        </div>
    </div>
    <!-- <php foreach($detail as $d): ?> -->
    <?= form_open_multipart('Pemasaran/Update/'. $detail->id_kost); ?>

    <div class="row">
        <div class="col-md-3">
        <!-- <input type="hidden" name="id_kost" value="<= $detail->id_kost; ?>"> -->
            <div class="form-group">
                <label>Nama Kost</label>
                <input type="text" class="form-control" name="nama_kost" value="<?= $detail->nama_kost;?>" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Alamat Kost</label>
                <input type="text" class="form-control" name="alamat_kost" value="<?= $detail->alamat_kost;?>" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Jumlah Kamar</label>
                <input type="number" class="form-control" name="jumlah_kamar" value="<?= $detail->jumlah_kamar;?>"
                    required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Kamar Tersedia</label>
                <input type="number" class="form-control" name="kamar_tersedia" value="<?= $detail->kamar_tersedia;?>"
                    required>
            </div>
        </div>


    </div>

    <div class="row">

        <div class="col-md-3">
            <div class="form-group">
                <label for="">Harga Sewa</label>
                <div class="input-group mb3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="text" class="form-control" id="harga_sewa" name="harga_sewa"
                        value="<?= $detail->harga_sewa;?>" required>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="">Nomor Telepon</label>
                <div class="input-group mb3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">+62</span>
                    </div>
                    <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon"
                        value="<?= $detail->nomor_telepon;?>" placeholder='Masukkan Nomor Telepon' required>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="">Tipe Kost</label>
                <select name="tipe_kost" class="form-select">
                    <option value="laki-laki" <?= ($detail->tipe_kost == 'laki-laki') ? 'selected' : '' ?>>Laki-Laki</option>
                    <option value="perempuan" <?= ($detail->tipe_kost == 'perempuan') ? 'selected' : '' ?>>Perempuan</option>
                    <option value="campuran" <?= ($detail->tipe_kost == 'campuran') ? 'selected' : '' ?>>Campuran</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" class="form-control" name="lokasi" value="<?= $detail->lokasi;?>" required>
            </div>
        </div>
    </div>
    <div class="form-group"> 
    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="foto" id="foto" onchange="previewImg()">
                    <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="/img/<?= $detail->foto; ?>" class="img-thumbnaill img-preview" width="299px">
            </div>
        </div>

    </div>
    <div class="form-group">
        <label>Deskripsi Kost</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="7" required><?= $detail->deskripsi;?></textarea>
    </div>
    <div class="col-md-12 text-center  d-grid">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>



    <?= form_close(); ?>
    <!-- <php endforeach; ?> -->

</div>

<script>
new AutoNumeric('#harga_sewa', {
    digitGroupSeparator: ',',
    decimalCharacter: '.',
    decimalCharacterAlternative: ',',
    decimalPlaces: 0


});
</script>