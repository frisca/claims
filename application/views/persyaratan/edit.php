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
                            <h2 class="pageheader-title">Persyaratan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Persyaratan</li>
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
                            <h5 class="card-header">Ubah Data Persyaratan</h5>
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
                                <form method="post" action="<?php echo base_url('persyaratan/processEdit/' . $persyaratan->id_persyaratan);?>">
                                    <div class="form-group">
                                        <label>Jenis Klim</label>
                                        <select class="form-control" name="id_jenis" id="jenis_formulir" required>
                                            <option value="0">Pilih Jenis Klim</option>
                                            <?php 
                                                foreach($jenis_formulir as $key=>$value){
                                                    if($value->id_jenis == $persyaratan->id_jenis){
                                            ?>
                                            <option value="<?php echo $value->id_jenis;?>" selected><?php echo $value->jenis_formulir;?></option>
                                            <?php
                                                }else{
                                            ?>
                                            <option value="<?php echo $value->id_jenis;?>"><?php echo $value->jenis_formulir;?></option>
                                            <?php 
                                                    } 
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Persyaratan</label>
                                        <input type="text" name="nama_persyaratan" class="form-control"required value="<?php echo $persyaratan->nama_persyaratan;?>">
                                    </div>

                                    <!-- <div class="form-group">
                                        <label>Persyaratan</label>
                                        <textarea cols="80" id="edi" name="persyaratan" rows="10"><?php echo $persyaratan->persyaratan;?></textarea>
                                    </div> -->

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status" id="status" required>
                                            <?php
                                                if($persyaratan->status == 1){
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
                                        <button type="submit" class="btn btn-space btn-primary" id="save_persyaratan">Simpan</button>
                                        <a href="<?php echo base_url('persyaratan/index');?>">
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