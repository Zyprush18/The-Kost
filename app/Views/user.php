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

            <div class="card-tools">
                <button class="btn btn-tool" data-toggle="modal" data-target="#add-data"><i class="fas fa-plus"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col" width="150px">Nama User</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Level</th>
                        <th scope="col" width="100px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i =1; 
                    foreach($user as $u):?>
                    <tr>
                       
                        <th scope="row" class="text-center"><?= $i++; ?></th>
                        <td class="text-center"><?= $u['nama_user']; ?></td>
                        <td><?= $u['email']; ?></td>
                        <td class="text-center"><?= $u['password']; ?></td>
                        <td class="text-center">
                            <?php 
                        if ($u['level'] == 1) {?>
                            <span class="badge bg-success">Admin</span>
                            <?php  } else {?>
                            <span class="badge bg-primary">Member</span>
                            <?php } ?>

                        </td>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#update-data<?= $u['id_user']; ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#hapus-data<?= $u['id_user']; ?>"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                        <?php endforeach;?>

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>





<!-- Modal tambah data -->
<div class="modal fade" id="add-data" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title">Tambah Data</h5>
          <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <?php echo form_open('user/tambah')?>
      <div class="modal-body">
      <div class="form-group">
                    <label for="">Nama User</label>
                    <input type="text" class="form-control" name="nama_user" placeholder='Nama User' required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder='Email' required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" placeholder='Password' required>
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <select name="level" class="form-select">
                      <option value="" selected disabled>--Pilih Level--</option>
                        <option value="1">Admin</option>
                        <option value="2" selected>Member</option>
                    </select>
                </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>


<!-- Modal update data -->
<?php foreach($user as $u):?>
<div class="modal fade" id="update-data<?= $u["id_user"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title">Ubah Data</h5>
          <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <?php echo form_open('user/ubah/'.$u['id_user'])?>
      <div class="modal-body">
      <div class="form-group">
                    <label for="">Nama User</label>
                    <input type="text" class="form-control" name="nama_user" value='<?= $u['nama_user']; ?>' required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value='<?= $u['email']; ?>' required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" value='<?= $u['password']; ?>' required>
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <select name="level" class="form-select">
                      <option value="1" <?= $u['level'] == 1 ? 'selected' : '' ?> >Admin</option>
                        <option value="2" <?= $u['level'] == 2 ? 'selected' : '' ?> >Member</option>
                    </select>
                </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-warning">Ubah</button>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>
<?php endforeach;?>

<!-- Modal hapus data -->
<?php foreach($user as $u):?>
<div class="modal fade" id="hapus-data<?= $u["id_user"]; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title">Hapus Data</h5>
          <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      
        <p>Apakah Anda Yakin Ingin Menghapus <b><?= $u['nama_user']; ?></b></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <a href="<?= base_url('user/hapus/'.$u['id_user']); ?>" class="btn btn-danger">Hapus</a>
      </div>
     
    </div>
  </div>
</div>
<?php endforeach;?>

