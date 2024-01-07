        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                data diri nDashboard
                <small>1.0</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <ul class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/admin/data_admin/insert') ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
            </ul>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Diri Admin</h3>
                        </div>

                        <div class="box-body">
                            <table class="table table-striped table-hover table-bordered" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>NIK Admin</th>
                                        <th>Nama Admin</th>
                                        <th>Alamat Admin</th>
                                        <th>Kontakt Admin</th>
                                        <th>Role Admin</th>
                                        <th>Password Admin</th>
                                        <th>Pilihan</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data_admin as $data) {
                                        ?>
                                        <tr>
                                            <td style="width:5%"><?=$no++?></td>
                                            <td><?php echo $data->username ?></td>
                                            <td><?php echo $data->nik_admin?></td>
                                            <td><?php echo $data->nama_admin ?></td>
                                            <td><?php echo $data->alamat_admin ?></td>
                                            <td><?php echo $data->kontakt_admin ?></td>
                                            <td><?php echo $data->a ?></td>
                                            <td><?php echo $data->password_admin ?></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/admin/data_admin/edit/'. $data->id_admin); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                                            
                                                <a href="<?php echo base_url('index.php/admin/data_admin/delete/'. $data->id_admin); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Delete</button></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <?php echo $this->session->flashdata('pesan'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>