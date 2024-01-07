<section class="content-header">
    <h1>
        Edit Data Member
    </h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('index.php/admin/data_member/edit/'.$data_member[0]->id_member); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>Nama Member</label>
                    <input class="form-control" type="text" name="nama_member" value="<?php echo $data_member[0]->nama_member ?>">
                    <p class="text-red"><?php echo form_error('nama_member');?></p>
                </div>
                <div class="form-group">
                    <label>Password Member</label>
                    <input class="form-control" type="text" name="password_member" value="<?php echo $data_member[0]->password_member ?>">
                    <p class="text-red"><?php echo form_error('password_member');?></p>
                </div>
                <div class="form-group">
                    <label>No Kontakt Member</label>
                    <input class="form-control" type="text" name="no_kontakt_member" value="<?php echo $data_member[0]->no_kontakt_member ?>">
                    <p class="text-red"><?php echo form_error('no_kontakt_member');?></p>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input class="form-control pull-right" type="text" placeholder="yyyy-mm-dd" name="ttl_member" id="tanggal" value="<?php echo $data_member[0]->ttl_member ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="text" name="email_member" value="<?php echo $data_member[0]->email_member ?>">
                    <p class="text-red"><?php echo form_error('email_member');?></p>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="jenis_kelamin_m" value="l" value="<?php echo $data_member[0]->jenis_kelamin_m ?>"> Laki-Laki
                    <input class="custom-control-input" type="radio" name="jenis_kelamin_m" value="p" value="<?php echo $data_member[0]->jenis_kelamin_m ?>"> Perempuan
                    <p class="text-red"><?php echo form_error('jenis_kelamin_m');?></p>
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