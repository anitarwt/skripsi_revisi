<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Rangking</h2>

                <?php echo $this->session->flashdata('info'); ?>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <!--form yang diambil-->
                <div class="form-horizontal form-label-left">

                    <?php echo form_open('admin/tambah_rangkingdb') ?>
                    <?php echo validation_errors(); ?>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Alternatif<span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class='form-control' id='id_alternatif' name="alternatif">
                                <option value='0'>--pilih alternatif--</option>
                                <?php
                                foreach ($alternatif as $alt) {
                                    echo '<option value="' . $alt['nama_alternatif'] . '" id="' . $alt['id_alternatif'] . '">' . $alt['nama_alternatif'] . '</option>';
                                    echo $alt['id_alternatif'];

                                }
                                ?>


                            </select>


                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <input type="hidden" id="idnya" name="id_kriteria" value=""
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Kriteria<span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class='form-control' id='kriteria' name="kriteria" onchange="changeValue(this)">
                                <option value='1'>--pilih kriteria--</option>
                                <?php
                                $jsArray = "var dtKriteria = new Array();\n";
                                foreach ($kriteria as $kri) {
                                    echo '<option value="' . $kri['nama_kriteria'] . '" id="' . $kri['id_kriteria'] . '">' . $kri['nama_kriteria'] . '</option>';


                                }
                                ?>

                            </select>

                        </div>
                    </div>

                    <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nilai<span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="nilai" value="<?php echo set_value('nilai') ?>"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
                            <button type="submit" class="btn btn-success" name="input">Input</button>
                        </div>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    <?php echo $jsArray; ?>
    function changeValue(id) {
        document.getElementById('idnya').value = id[id.selectedIndex].id;

    };

    function changeValue2(id) {
        document.getElementById('idku').value = id[id.selectedIndex].id;
    }
</script>





