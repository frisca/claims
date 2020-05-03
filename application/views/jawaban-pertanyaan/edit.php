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
                        <div class="page-header">
                            <h2 class="pageheader-title">Jawaban Pertanyaan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Pertanyaan</li>
                                        <li class="breadcrumb-item active" aria-current="page">Jawaban Pertanyaan</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- validation form -->
                    <!-- ============================================================== -->
                    <div class="col-lg-12">
                        <div class="card">
                            <h5 class="card-header">Ubah Data Jawaban Pertanyan</h5>
                            <div class="card-body">
                                <?php if($this->session->flashdata('success') != ""){ ?>
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <?php echo $this->session->flashdata('success');?>
                                </div>  
                                <?php }else if($this->session->flashdata('error') != ""){ ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <?php echo $this->session->flashdata('error');?>
                                </div>  
                                <?php } ?>
                                <form method="post" action="<?php echo base_url('jawaban_pertanyaan/processEdit/' . $pertanyaan_detail->id_pertanyaan . '/' . $jawaban_pertanyaan->id_jawaban);?>">
                                    <div class="form-group">
                                        <label>Pertanyaan</label>
                                        <input type="text" name="pertanyaan" class="form-control" id="pertanyaan" value="<?php echo $pertanyaan_detail->pertanyaan;?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Jawaban</label>
                                        <input type="text" name="jawaban" class="form-control" id="jawaban" required value="<?php echo $jawaban_pertanyaan->jawaban;?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Hasil</label>
                                        <select class="form-control" name="hasil" id="hasil" required>
                                            <option value="0">Download Formulir</option>
                                            <?php 
                                                foreach($pertanyaan as $key=>$value){
                                                    if($value->id_pertanyaan == $jawaban_pertanyaan->hasil){
                                            ?>
                                                <option value="<?php echo $value->id_pertanyaan;?>" selected><?php echo $value->pertanyaan;?></option>
                                            <?php 
                                                }else{
                                            ?>
                                                <option value="<?php echo $value->id_pertanyaan;?>"><?php echo $value->pertanyaan;?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="float-left">
                                        <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                        <a href="<?php echo base_url('pertanyaan/index');?>">
                                            <button type="button" class="btn btn-space btn-secondary">Kembali</button>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end validation form -->
                    <!-- ============================================================== -->
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