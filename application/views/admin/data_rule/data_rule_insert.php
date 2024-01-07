<section class="content-header">
    <h1>Masukan Data Rule</h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('index.php/admin/data_rule/insert'); ?>" method="post">
            <div class="box-body">
            
                <div class="form-group">
                    <label>Masukkan Username Role</label>
                    <input class="form-control" type="text" name="nama_rule">
                    <p class="text-red"><?php echo form_error('nama_rolep');?></p>
                </div>
                
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('index.php/admin/data_rule/') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>