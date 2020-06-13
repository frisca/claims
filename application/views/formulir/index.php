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
                            <h2 class="pageheader-title">Formulir</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Formulir</li>
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
                            <h5 class="card-header">Formulir</h5>
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
                                <form method="post" action="<?php echo base_url('formulir/processAdd');?>">
                                    <input type="hidden" name="formulir" class="form-control" id="formulir" value="<?php echo $formulir;?>">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <input type="text" name="nip" class="form-control" id="nip" required value="<?php echo $pengguna->username;?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama" required value="<?php echo $pengguna->nama;?>" disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempt_lahir" class="form-control" id="tempt_lahir" required value="<?php echo $det_pengguna->tempt_lahir;?>">
                                    </div>

                                     <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="text" name="tgl_lahir" class="form-control" id="tgl_lahir" required value="<?php echo date('d-m-Y', strtotime($det_pengguna->tgl_lahir));?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat"><?php echo $det_pengguna->alamat;?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input type="text" name="provinsi" class="form-control" id="provinsi" value="<?php echo $det_pengguna->provinsi;?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Kabupaten</label>
                                        <input type="text" name="kabupaten" class="form-control" id="kabupaten" value="<?php echo $det_pengguna->kabupaten;?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" id="kecamatan" value="<?php echo $det_pengguna->kecamatan;?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Kelurahan</label>
                                        <input type="text" name="kelurahan" class="form-control" id="kelurahan" value="<?php echo $det_pengguna->kelurahan;?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="text" name="kode_pos" class="form-control" value="<?php echo $det_pengguna->kode_pos;?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input type="text" name="no_tlp" class="form-control" id="no_tlp" value="<?php echo $det_pengguna->no_tlp;?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>No KTP</label>
                                        <input type="text" name="no_ktp" class="form-control" id="no_ktp" value="<?php echo $det_pengguna->no_ktp;?>" required>
                                    </div>

                                    <div class="float-left">
                                        <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                        <a href="<?php echo base_url('home/index');?>">
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