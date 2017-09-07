<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Nilai</h2>

                <?php echo $this->session->flashdata('info'); ?>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <!--form yang diambil-->
                <div class="form-horizontal form-label-left">


                    <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >-->


                    <?php echo form_open('staff/tambah_nilaidb') ?>

                    <?php echo validation_errors(); ?>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Alternatif<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class='form-control' id='id_alternatif' name="id_alternatif" required>
                                <option value=''>--pilih alternatif--</option>
                                <?php
                                foreach ($alternatif as $alt) {
                                    echo '<option value="' . $alt['id_alternatif'] . '">' . $alt['nama_alternatif'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <?php
                    foreach ($kriteria as $k) {
                    ?>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nilai <?=$k["nama_kriteria"]?><span
                                        class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" name="kriteria<?=$k['id_kriteria']?>" value="<?php echo set_value('nilai') ?>"
                                       class="form-control col-md-7 col-xs-12" required>
                            </div>
                        </div>

                    <?php
                    }
                    ?>



                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>