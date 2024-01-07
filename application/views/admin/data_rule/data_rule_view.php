        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data rule nDashboard
                <small>1.0</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <ul class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/admin/data_rule/insert') ?>"><i class="fa fa-plus"></i>Tambah Data Paket rule</a></li>
            </ul>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data rule</h3>
                        </div>

                        <div class="box-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Rule</th>
                                        <th>Pilihan</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data_rule as $data) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data->id_rolep ?></td>
                                            <td><?php echo $data->nama_rolep ?></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/admin/data_rule/edit/'. $data->id_rolep); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                                            
                                                <a href="<?php echo base_url('index.php/admin/data_rule/delete/'. $data->id_rolep); ?>">
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