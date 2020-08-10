<?php $this->load->view('script_header');?>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php $this->load->view('header');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php $this->load->view('menu');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <?php
                    if($this->session->userdata('role') == 2){
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <h5 class="card-header">Pertanyaan</h5>
                            <form method="post" action="<?php echo base_url('formulir/index');?>">
                            <div class="card-body">
                                    <input type="hidden" name="id_jenis" value="" id="id_jenis">
                                    <div class="question">
                                        <?php 
                                            if(!empty($questions)){
                                                foreach ($questions as $key => $pertanyaan) {
                                                    if($pertanyaan->urutan == 1){
                                        ?>
                                        <div class="form-group urutan_<?php echo $pertanyaan->urutan;?>" style="display: block;">
                                            <label><?php echo $pertanyaan->pertanyaan;?></label><br>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="<?php echo $pertanyaan->urutan;?>" class="custom-control-input yes_<?php echo $pertanyaan->urutan;?>" value="<?php echo $pertanyaan->pilihan_jawaban_1;?>" pertanyaanid="<?php echo $pertanyaan->id_pertanyaan;?>">
                                                <span class="custom-control-label">
                                                    <?php echo $pertanyaan->pilihan_jawaban_1;?>
                                                </span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="<?php echo $pertanyaan->urutan;?>" class="custom-control-input no_<?php echo $pertanyaan->urutan;?>"
                                                value="<?php echo $pertanyaan->pilihan_jawaban_2;?>" pertanyaanid="<?php echo $pertanyaan->id_pertanyaan;?>">
                                                <span class="custom-control-label">
                                                    <?php echo $pertanyaan->pilihan_jawaban_2;?>
                                                </span>
                                            </label>
                                        </div>
                                        <?php
                                                    }else{
                                        ?>
                                        <div class="form-group urutan_<?php echo $pertanyaan->urutan;?>" style="display: none;">
                                            <label><?php echo $pertanyaan->pertanyaan;?></label><br>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="<?php echo $pertanyaan->urutan;?>" class="custom-control-input yes_<?php echo $pertanyaan->urutan;?>" value="<?php echo $pertanyaan->pilihan_jawaban_1;?>" pertanyaanid="<?php echo $pertanyaan->id_pertanyaan;?>">
                                                <span class="custom-control-label">
                                                    <?php echo $pertanyaan->pilihan_jawaban_1;?>
                                                </span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="<?php echo $pertanyaan->urutan;?>" class="custom-control-input no_<?php echo $pertanyaan->urutan;?>"
                                                value="<?php echo $pertanyaan->pilihan_jawaban_2;?>" pertanyaanid="<?php echo $pertanyaan->id_pertanyaan;?>">
                                                <span class="custom-control-label">
                                                    <?php echo $pertanyaan->pilihan_jawaban_2;?>
                                                </span>
                                            </label>
                                        </div>
                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                            <div class="card-footer" style="display: none;" id="submit">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
<?php $this->load->view('script_footer');?>