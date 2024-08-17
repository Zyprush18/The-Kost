<div class="col-md-12 text-center d-grid ">
    <a href="Pemasaran/Datatambah" class="btn btn-success "><i class="fas fa-plus"></i> Tambah Kost</a>
</div>



<div class="col-md-12 mt-4">

    <div class="row">
        <?php foreach($kost as $k): ?>
        <div class="col-md-12">
            <div class="card text-dark  shadow-sm">
                <div class="row">
                    <div class="col-md-3">
                        <img src="/img/<?= $k['foto']; ?>" alt="" class="gambar_kost">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body d-flex">
                            <div class="apa">

                                <a href="<?= base_url('Pemasaran/detail/');?><?=  $k['slug'];?>" class="nama-kost"><?= $k['nama_kost']; ?></a>
                                <!-- <p>ini saya</p> -->
                                <!-- <span>mememmemememem</span> -->
                                <button class="btn btn-outline-danger d"  data-toggle="modal" data-target="#hapus-data<?= $k['id_kost']; ?>"><i class="fas fa-trash"></i> Hapus</button>
                            </div>
                            
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>



<!-- Modal hapus data -->
<?php foreach($kost as $k):?>
<div class="modal fade" id="hapus-data<?= $k["id_kost"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title">Hapus Data</h5>
          <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      
        <p>Apakah Anda Yakin Ingin Menghapus <b><?= $k['nama_kost']; ?></b></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <a href="<?= base_url('Pemasaran/hapus/'.$k['id_kost']); ?>" class="btn btn-danger">Hapus</a>
      </div>
     
    </div>
  </div>
</div>
<?php endforeach;?>