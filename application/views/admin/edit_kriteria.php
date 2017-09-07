<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Edit Kriteria</h2>

                <?php echo $this->session->flashdata('info'); ?>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                <!--form yang diambil-->
                <div class="form-horizontal form-label-left">


                    <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >-->

                    <?php if (!empty($kriteria)) { ?>
                        <?php foreach ($kriteria as $record): ?>

                            <?php echo form_open('admin/edit_kriteriadb'); ?>
                            <?php echo validation_errors(); ?>
                        <?php endforeach; ?>
                    <?php } ?>



                    <?php
                    if (!empty($single_kriteria)) {

                    foreach ($single_kriteria as $record):
                    ?>

                    <input required type="hidden" name="id" id="id" value="<?php echo $record->id_kriteria; ?>"/>
                    <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Kriteria <span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input required type="text" name="kriteria" value="<?php echo $record->nama_kriteria; ?>"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tipe Kriteria<span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select required id="heard" class="form-control" name="tipe_kriteria" value="">
                                <option value="Benefit" <?php if ($record->tipe_kriteria == "Benefit") {
                                    echo 'selected="selected"';
                                } ?>>Benefit
                                </option>
                                <option value="Cost" <?php if ($record->tipe_kriteria == "Cost") {
                                    echo 'selected="selected"';
                                } ?>>Cost
                                </option>

                            </select>


                        </div>
                    </div>
                    <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bobot <span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input required type="text" name="bobot" value="<?php echo $record->bobot; ?>"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" align="center">
                            <button type="submit" class="btn btn-success" value="submit">Edit</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>


                <?php } ?>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>