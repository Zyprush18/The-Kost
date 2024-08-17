<div class="col-md-12">
    

<?php if (session()->getFlashdata('tambah')) :?> 
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="icon fas fa-check"></i> 
                    <?= session()->getFlashdata('tambah');?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               <?php endif;?> 
<?php if (session()->getFlashdata('ubah')) :?> 
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <i class="icon fas fa-check"></i> 
                    <?= session()->getFlashdata('ubah');?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               <?php endif;?> 
<?php if (session()->getFlashdata('hapus')) :?> 
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <i class="icon fas fa-check"></i> 
                    <?= session()->getFlashdata('hapus');?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               <?php endif;?> 


    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"><?= $subjudul;?></h3>

            <!-- <div class="card-tools">
                <button class="btn btn-tool" data-toggle="modal" data-target="#add-data"><i class="fas fa-plus"></i>
                </button>
            </div> -->
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col" width="150px">Nama Kost</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kamar Tersedia</th>
                        <th scope="col">Harga Sewa</th>
                        <th scope="col" width="100px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i =1; 
                    foreach($kost as $k):?>
                    <tr>
                   
                        <th class="text-center" scope="row"><?= $i++; ?></th>
                        <td class="text-center"><?= $k['nama_kost']; ?></td>
                        <td class="text-center"><?= $k['alamat_kost']; ?></td>
                        <td class="text-center"><?= $k['kamar_tersedia']; ?> Kamar</td>
                        <td class="text-center">Rp. <?= number_format( $k['harga_sewa'], 0);?>/Bln</td>
                        <td class="text-center">
                            <button class="btn btn-success btn-sm btn-flat" data-toggle="modal" data-target="#detail-data<?= $k['id_kost']; ?>"><i class="fa-regular fa-eye"></i></button>
                            <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#hapus-data<?= $k['id_kost']; ?>"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                        <?php endforeach;?>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>



<!-- Modal detail data -->
<?php foreach ($kost as $k):?>
<div class="modal fade" id="detail-data<?= $k['id_kost']; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title">Detail Data <?= $k['nama_kost']; ?></h5>
          <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">

        <div class="container ms-5 mt-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Nama Kost :</h5>
                        <p class="ms-2"><?= $k['nama_kost']; ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Alamat Kost :</h5>
                        <p class="ms-2"><?= $k['alamat_kost']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                 
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Jumlah Kamar :</h5>
                        <p  class="ms-2"><?= $k['jumlah_kamar']; ?> Kamar</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Kamar Tersedia :</h5>
                        <p  class="ms-2"><?= $k['kamar_tersedia']; ?> Kamar</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Harga Sewa :</h5>
                        <p  class="ms-2">Rp. <?= number_format( $k['harga_sewa'], 0);?>/Bln</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Nomor Telepon :</h5>
                        <p  class="ms-2">+62<?= $k['nomor_telepon'];?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Tipe Kost :</h5>
                        <p  class="ms-2"><?= $k['tipe_kost'];?></p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <h5>Lokasi :</h5>
                        <p class="ms-2"><?= $k['lokasi'];?></p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <h5>Foto :</h5>
                <img class="ms-3 mt-2 gambar-detail"  src="/img/<?= $k['foto'];?>" alt="Kost 1">
            </div>

            <div class="form-group">
                <h5>Deskripsi :</h5>
                <p class="ms-2 deskripsi-detail">
                   <?= $k['deskripsi'];?>
                </p>
            </div>

        </div>

      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
      </div>
    </div>
  </div>
</div>
<?php endforeach;?>

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
        <a href="<?= base_url('kost/hapus/'.$k['id_kost']); ?>" class="btn btn-danger">Hapus</a>
      </div>
     
    </div>
  </div>
</div>
<?php endforeach;?>