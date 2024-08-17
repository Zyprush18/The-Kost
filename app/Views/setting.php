<div class="col-md-12">
<?php if (session()->getFlashdata('pesan')) :?> 
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <?= session()->getFlashdata('pesan');?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               <?php endif;?> 
<?php if (session()->getFlashdata('ubah')) :?> 
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <i class="fa fa-check" aria-hidden="true"></i>
                    <?= session()->getFlashdata('edit');?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               <?php endif;?> 
<?php if (session()->getFlashdata('delete')) :?> 
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <i class="fa fa-check" aria-hidden="true"></i>
                    <?= session()->getFlashdata('delete');?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
               <?php endif;?> 

            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title"><?= $subjudul;?></h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body">


             <?= form_open(base_url('Setting/UpdateSetting'));?>
                <div class="form-group">
                        <label for="">Nama Toko</label>
                        <input type="text" class="form-control" name="nama_toko"  placeholder='Nama Toko' value="<?= $setting['nama_toko'];?>">
                </div>
                <div class="form-group">
                    
                        <label for="">Slogan</label>
                        <input type="text" class="form-control" name="slogan"  placeholder='Slogan'  value="<?= $setting['slogan'];?>">
                </div>
                <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat"  placeholder='Alamat'  value="<?= $setting['alamat'];?>">
                </div>
                <div class="form-group">
                        <label for="">No. Telepon</label>
                        <input type="text" class="form-control" name="no_telepon"  placeholder='No.Telepon'  value="<?= $setting['no_telepon'];?>">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                      <textarea name="deskripsi"  rows="3" class="form-control" ><?= $setting['deskripsi'];?></textarea>
                </div>
                <div class="form-group">
                 <button class="btn btn-flat btn-primary">Simpan</button>
                </div>
                

             <?= form_close();?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>