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
                            <h2 class="pageheader-title">Pertanyaan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Pertanyaan</li>
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
                            <h5 class="card-header">Ubah Data Pertanyan</h5>
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
                                <form method="post" action="<?php echo base_url('pertanyaan/processEdit/' . $pertanyaan->id_pertanyaan);?>">
                                    <div class="form-group">
                                        <label>Urutan</label>
                                        <input type="text" name="urutan" class="form-control" id="urutan" required value="<?php echo $pertanyaan->urutan;?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Pertanyaan</label>
                                        <textarea class="form-control" rows="10" cols="10" name="pertanyaan" id="edi"><?php echo $pertanyaan->pertanyaan;?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Pilihan Jawaban 1</label>
                                        <input type="text" name="pilihan_jawaban_1" class="form-control" id="pilihan_jawaban_1" value="<?php echo $pertanyaan->pilihan_jawaban_1;?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Pilihan Jawaban 2</label>
                                        <input type="text" name="pilihan_jawaban_2" class="form-control" id="pilihan_jawaban_2" value="<?php echo $pertanyaan->pilihan_jawaban_2;?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status" id="status" required>
                                            <?php
                                                if($pertanyaan->status == 1){
                                            ?>
                                            <option value="0">Pilih Status</option>
                                            <option value="1" selected>Aktif</option>
                                            <option value="2">Tidak Aktif</option>
                                            <?php 
                                                }else{
                                            ?>
                                            <option value="0">Pilih Status</option>
                                            <option value="1">Aktif</option>
                                            <option value="2" selected>Tidak Aktif</option>
                                            <?php
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