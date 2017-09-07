<div class="x_panel">
    <div class="x_title">
        <h2>Tabel Kriteria</small></h2>

        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">

        <?php if ($this->session->flashdata('info')): ?>

            <div class="alert alert-success alert-dismissible fade in">
                <?php echo $this->session->flashdata('info'); ?> </div>

        <?php endif; ?>
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Kriteria</th>
                <th>Tipe Kriteria</th>
                <th>Bobot</th>
                <th>Aksi</th>
            </tr>


            <?php
            $no = 1;
            foreach ($kriteria as $kri) {
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $kri->nama_kriteria ?></td>
                    <td><?php echo $kri->tipe_kriteria ?></td>
                    <td><?php echo $kri->bobot ?></td>

                    <td>
                        <div>

                            <a href="<?php echo base_url() . 'staff/edit_kriteria/' . $kri->id_kriteria; ?> ">
                                <button class="btn btn-info" name="input"><i class="glyphicon glyphicon-pencil"></i></button>
                            </a>

            
                            <a href="<?php echo base_url() . 'staff/hapus_kriteria/' . $kri->id_kriteria; ?> ">
                                <button class="btn btn-danger btn-sm" name="input" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></button>
                            </a></div>
                    </td>

                </tr>

                <?php
            }

            ?>
            </thead>
            <tbody>
            </tr>
            </tbody>
        </table>


    </div>
                