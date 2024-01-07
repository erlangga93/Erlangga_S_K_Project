<section class="content-header">
    <h1>Insert Data Member</h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('index.php/admin/data_member/insert'); ?>" method="post">
            <div class="box-body">
            
                <div class="form-group">
                    <label>Nama Member</label>
                    <input class="form-control" type="text" name="nama_member" placeholder="masukkan nama member.....">
                    <p class="text-red"><?php echo form_error('nama_member');?></p>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" name="password_member" placeholder="masukkan password.....">
                    <p class="text-red"><?php echo form_error('password_member');?></p>
                </div>
                <div class="form-group">
                    <label>Kontakt member</label>
                    <input class="form-control" type="text" name="no_kontakt_member" placeholder="Masukkan No Kontakt.....">
                    <p class="text-red"><?php echo form_error('no_kontakt_member');?></p>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input class="form-control pull-right" type="text" placeholder="yyyy-mm-dd" name="ttl_member" id="tanggal">
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" name="email_member" placeholder="Masukkan Email.....">
                    <p class="text-red"><?php echo form_error('email_member');?></p>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="jenis_kelamin_m" value="l"> Laki-Laki
                    <input class="custom-control-input" type="radio" name="jenis_kelamin_m" value="p"> Perempuan
                    <p class="text-red"><?php echo form_error('jenis_kelamin_m');?></p>
                </div>
                <div class="form-group">
                    <label>Nomor KTP / NIK</label>
                    <input class="form-control" type="text" name="ktp_member" placeholder="Masukkan No KTP.....">
                    <p class="text-red"><?php echo form_error('ktp_member');?></p>
                </div>
                <div class="form-group">
                    <label>Pass Foto</label>
                    <input class="form-control" type="file" name="pass_photo_m">
                    <p class="text-red"><?php echo form_error('pass_photo_m');?></p>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('index.php/admin/data_member') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>