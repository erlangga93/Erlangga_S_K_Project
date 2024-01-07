        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                data Member nDashboard
                <small>1.0</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <ul class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/admin/data_member/insert') ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
            </ul>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Member</h3>
                        </div>

                        <div class="box-body">
                            <table class="table table-striped table-hover table-bordered" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Member</th>
                                        <th>Password Member</th>
                                        <th>Kontakt Member</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Email Member</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No KTP</th>
                                        <th>Pass Photo</th>
                                        <th>Pilihan</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data_member as $data) {
                                        ?>
                                        <tr>
                                            <td style="width:5%"><?=$no++?></td>
                                            <td><?php echo $data->nama_member ?></td>
                                            <td><?php echo $data->password_member ?></td>
                                            <td><?php echo $data->no_kontakt_member?></td>
                                            <td><?php echo $data->ttl_member?></td>
                                            <td><?php echo $data->email_member ?></td>
                                            <td><?php echo $data->jenis_kelamin_m ?></td>
                                            <td><?php echo $data->ktp_member ?></td>
                                            <?php echo "<td><img src='" . base_url("upload/member/" . $data->pass_photo_m) . "' width='100' height='100'></td>"; ?>
                                            <td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/admin/data_member/edit/'. $data->id_member); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                                            
                                                <a href="<?php echo base_url('index.php/admin/data_member/delete/'. $data->id_member); ?>">
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