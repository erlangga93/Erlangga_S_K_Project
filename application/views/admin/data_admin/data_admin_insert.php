<section class="content-header">
    <h1>Insert Data Diri</h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('index.php/admin/data_admin/insert'); ?>" method="post">
            <div class="box-body">
            
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" placeholder="masukkan username.....">
                    <p class="text-red"><?php echo form_error('username');?></p>
                </div>
                <div class="form-group">
                    <label>NIK Admin</label>
                    <input class="form-control" type="text" name="nik_admin" placeholder="masukkan NIK.....">
                    <p class="text-red"><?php echo form_error('nik_admin');?></p>
                </div>
                <div class="form-group">
                    <label>Nama Admin</label>
                    <input class="form-control" type="text" name="nama_admin" placeholder="masukkan nama admin.....">
                    <p class="text-red"><?php echo form_error('nama_admin');?></p>
                </div>
                <div class="form-group">
                    <label>Alamat Admin</label>
                    <textarea class="form-control" rows="3" type="text" name="alamat_admin" placeholder="masukkan alamat....."></textarea>
                    <p class="text-red"><?php echo form_error('alamat_admin');?></p>
                </div>
                <div class="form-group">
                    <label>Kontakt Admin</label>
                    <input class="form-control" type="text" name="kontakt_admin" placeholder="masukkan nomor kontakt.....">
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
                    <input class="form-control" type="text" name="password_admin" placeholder="masukkan password.....">
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