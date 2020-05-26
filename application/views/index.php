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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <h5 class="card-header">Pertanyan</h5>
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url('pertanyaan/processAdd');?>">
                                    <div class="form-group">
                                        <label><?php echo $pertanyaan->pertanyaan;?></label><br>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="radio-inline" class="custom-control-input">
                                            <span class="custom-control-label">
                                                <?php echo $pertanyaan->pilihan_jawaban_1;?>
                                            </span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="radio-inline" class="custom-control-input">
                                            <span class="custom-control-label">
                                                <?php echo $pertanyaan->pilihan_jawaban_2;?>
                                            </span>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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