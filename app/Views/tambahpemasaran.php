<div class="col-md-12">

    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url('Pemasaran') ?>"><i class="fas fa-arrow-left text-dark mb-3"></i></a>
        </div>
    </div>
    <?= form_open_multipart('Pemasaran/Simpan'); ?>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label>Nama Kost</label>
                <input type="text" class="form-control" name="nama_kost" placeholder="Masukkan Nama Kost" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Alamat Kost</label>
                <input type="text" class="form-control" name="alamat_kost" placeholder="Masukkan Alamat" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Jumlah Kamar</label>
                <input type="number" class="form-control" name="jumlah_kamar" placeholder="Masukkan Jumlah Kamar"
                    required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Kamar Tersedia</label>
                <input type="number" class="form-control" name="kamar_tersedia" placeholder="Jumlah Kamar Yang Tersedia"
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
                        value="<?= old('harga_sewa')?>" placeholder='Masukkan Harga Sewa' required>
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
                        value="<?= old('nomor_telepon')?>" placeholder='Masukkan Nomor Telepon' required>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="">Tipe Kost</label>
                <select name="tipe_kost" class="form-select">
                    <option value="" selected disabled>-- Pilih Tipe Kost --</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                    <option value="campuran">Campuran</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" class="form-control" name="lokasi" placeholder="Masukkan Lokasi" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <!-- <label>Foto</label>
        <input type="file" class="form-control input-foto" name="foto" onchange="previewImg()"> -->
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
                <img src="/img/default.jpeg" class="img-thumbnaill img-preview" width="299px">
            </div>
        </div>

    </div>


    <!-- <div class="col-sm-2">
        <img src="/img/default.jpeg" class="img-thumbnaill img-preview">
    </div> -->
    <div class="form-group">
        <label>Deskripsi Kost</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="7"
            placeholder="Masukkan Deskripsi Kost" required></textarea>
    </div>
    <div class="col-md-12 text-center  d-grid">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>



    <?= form_close(); ?>


</div>

<script>
new AutoNumeric('#harga_sewa', {
    digitGroupSeparator: ',',
    decimalCharacter: '.',
    decimalCharacterAlternative: ',',
    decimalPlaces: 0


});


function previewImg() {
        const foto = document.querySelector('#foto');
        const input_foto = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');


        input_foto.textContent = foto.files[0].name;

        const fileFoto = new FileReader();
        fileFoto.readAsDataURL(foto.files[0]);

        fileFoto.onload = function (e) {
          imgPreview.src = e.target.result;
        }


      }
</script>