<section class="content-header">
    <h1>
        Edit Data Admin
    </h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('index.php/admin/data_admin/edit/'.$data_admin[0]->id_admin); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" value="<?php echo $data_admin[0]->username ?>">
                    <p class="text-red"><?php echo form_error('username');?></p>
                </div>
                <div class="form-group">
                    <label>NIK Admin</label>
                    <input class="form-control" type="text" name="nik_admin" value="<?php echo $data_admin[0]->nik_admin ?>">
                    <p class="text-red"><?php echo form_error('nik_admin');?></p>
                </div>
                <div class="form-group">
                    <label>Nama Admin</label>
                    <input class="form-control" type="text" name="nama_admin" value="<?php echo $data_admin[0]->nama_admin ?>">
                    <p class="text-red"><?php echo form_error('nama_admin');?></p>
                </div>
                <div class="form-group">
                    <label>Alamat Admin</label>
                    <input class="form-control" type="text" name="alamat_admin" value="<?php echo $data_admin[0]->alamat_admin ?>">
                    <p class="text-red"><?php echo form_error('alamat_admin');?></p>
                </div>
                <div class="form-group">
                    <label>Kontakt Admin</label>
                    <input class="form-control" type="text" name="kontakt_admin" value="<?php echo $data_admin[0]->kontakt_admin ?>">
                    <p class="text-red"><?php echo form_error('kontakt_admin');?></p>
                </div>
                <div class="form-group">
                    <label>Masukkan Role</label>
                    <div>
                        <?php echo form_dropdown('id_rolep', $id_rolep)?>
                    </div>
                    <p class="text-red"><?php echo form_error('id_rolep');?></p>
                </div>
                <div class="form-group">
                    <label>Password Admin</label>
                    <input class="form-control" type="text" name="password_admin" value="<?php echo $data_admin[0]->password_admin ?>">
                    <p class="text-red"><?php echo form_error('password_admin');?></p>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('index.php/admin/data_admin') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>