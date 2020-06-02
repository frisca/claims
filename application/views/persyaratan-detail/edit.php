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
                            <h2 class="pageheader-title">Detail Persyaratan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item" aria-current="page">Persyaratan</li>
                                        <li class="breadcrumb-item active" aria-current="page">Detail Persyaratan</li>
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
                            <h5 class="card-header">Ubah Data Detail Persyaratan</h5>
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
                                <form method="post" action="<?php echo base_url('persyaratan_detail/processEdit/' . $persyaratan->id_persyaratan . '/' . $persyaratan->id_detail_persyaratan);?>">
                                    <div class="form-group">
                                        <label>Urutan</label>
                                        <input type="text" name="urutan" class="form-control" value="<?php echo $persyaratan->urutan;?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Persyaratan</label>
                                        <textarea class="form-control" name="persyaratan"><?php echo $persyaratan->persyaratan;?></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>File Formulir</label>
                                        <?php
                                            if($persyaratan->files == ""){
                                        ?>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI">
                                            <span class="custom-control-label">F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F2. SPTB">
                                            <span class="custom-control-label">F2. SPTB</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F3. SURAT KETERANGAN JANDA DUDA">
                                            <span class="custom-control-label">F3. SURAT KETERANGAN JANDA DUDA</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH">
                                            <span class="custom-control-label">F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F5. KETERANGAN AHLI WARIS KOREKSI">
                                            <span class="custom-control-label">F5. KETERANGAN AHLI WARIS KOREKSI C110</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI">
                                            <span class="custom-control-label">F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F7. SURAT KETERANGAN PENGUBURAN">
                                            <span class="custom-control-label">F7. SURAT KETERANGAN PENGUBURAN</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH">
                                            <span class="custom-control-label">F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH</span>
                                        </label>
                                        <?php
                                            }else if($persyaratan->files == "F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI"){
                                        ?>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" checked="" value="F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI">
                                            <span class="custom-control-label">F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F2. SPTB">
                                            <span class="custom-control-label">F2. SPTB</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F3. SURAT KETERANGAN JANDA DUDA">
                                            <span class="custom-control-label">F3. SURAT KETERANGAN JANDA DUDA</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH">
                                            <span class="custom-control-label">F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F5. KETERANGAN AHLI WARIS KOREKSI C110">
                                            <span class="custom-control-label">F5. KETERANGAN AHLI WARIS KOREKSI C110</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI">
                                            <span class="custom-control-label">F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F7. SURAT KETERANGAN PENGUBURAN">
                                            <span class="custom-control-label">F7. SURAT KETERANGAN PENGUBURAN</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH">
                                            <span class="custom-control-label">F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH</span>
                                        </label>
                                        <?php 
                                            }else if($persyaratan->files == "F2. SPTB"){
                                        ?>
                                       <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI">
                                            <span class="custom-control-label">F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F2. SPTB" checked="">
                                            <span class="custom-control-label">F2. SPTB</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F3. SURAT KETERANGAN JANDA DUDA">
                                            <span class="custom-control-label">F3. SURAT KETERANGAN JANDA DUDA</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH">
                                            <span class="custom-control-label">F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F5. KETERANGAN AHLI WARIS KOREKSI C110">
                                            <span class="custom-control-label">F5. KETERANGAN AHLI WARIS KOREKSI C110</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI">
                                            <span class="custom-control-label">F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F7. SURAT KETERANGAN PENGUBURAN">
                                            <span class="custom-control-label">F7. SURAT KETERANGAN PENGUBURAN</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH">
                                            <span class="custom-control-label">F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH</span>
                                        </label>
                                        <?php 
                                            }else if($persyaratan->files == "F3. SURAT KETERANGAN JANDA DUDA"){
                                        ?>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI">
                                            <span class="custom-control-label">F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F2. SPTB">
                                            <span class="custom-control-label">F2. SPTB</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F3. SURAT KETERANGAN JANDA DUDA" checked="">
                                            <span class="custom-control-label">F3. SURAT KETERANGAN JANDA DUDA</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH">
                                            <span class="custom-control-label">F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F5. KETERANGAN AHLI WARIS KOREKSI C110">
                                            <span class="custom-control-label">F5. KETERANGAN AHLI WARIS KOREKSI C110</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI">
                                            <span class="custom-control-label">F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F7. SURAT KETERANGAN PENGUBURAN">
                                            <span class="custom-control-label">F7. SURAT KETERANGAN PENGUBURAN</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH">
                                            <span class="custom-control-label">F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH</span>
                                        </label>
                                        <?php 
                                            }else if($persyaratan->files == "F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH"){
                                        ?>
                                       <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI">
                                            <span class="custom-control-label">F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F2. SPTB">
                                            <span class="custom-control-label">F2. SPTB</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F3. SURAT KETERANGAN JANDA DUDA">
                                            <span class="custom-control-label">F3. SURAT KETERANGAN JANDA DUDA</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH" checked="">
                                            <span class="custom-control-label">F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F5. KETERANGAN AHLI WARIS KOREKSI C110">
                                            <span class="custom-control-label">F5. KETERANGAN AHLI WARIS KOREKSI C110</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI">
                                            <span class="custom-control-label">F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F7. SURAT KETERANGAN PENGUBURAN">
                                            <span class="custom-control-label">F7. SURAT KETERANGAN PENGUBURAN</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH">
                                            <span class="custom-control-label">F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH</span>
                                        </label>
                                        <?php 
                                            }else if($persyaratan->files == "F5. KETERANGAN AHLI WARIS KOREKSI C110"){
                                        ?>
                                       <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI">
                                            <span class="custom-control-label">F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F2. SPTB">
                                            <span class="custom-control-label">F2. SPTB</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F3. SURAT KETERANGAN JANDA DUDA">
                                            <span class="custom-control-label">F3. SURAT KETERANGAN JANDA DUDA</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH">
                                            <span class="custom-control-label">F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F5. KETERANGAN AHLI WARIS KOREKSI C110" checked="">
                                            <span class="custom-control-label">F5. KETERANGAN AHLI WARIS KOREKSI C110</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI">
                                            <span class="custom-control-label">F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F7. SURAT KETERANGAN PENGUBURAN">
                                            <span class="custom-control-label">F7. SURAT KETERANGAN PENGUBURAN</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH">
                                            <span class="custom-control-label">F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH</span>
                                        </label>
                                        <?php 
                                            }else if($persyaratan->files == "F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI"){
                                        ?>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI">
                                            <span class="custom-control-label">F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F2. SPTB">
                                            <span class="custom-control-label">F2. SPTB</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F3. SURAT KETERANGAN JANDA DUDA">
                                            <span class="custom-control-label">F3. SURAT KETERANGAN JANDA DUDA</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH">
                                            <span class="custom-control-label">F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F5. KETERANGAN AHLI WARIS KOREKSI C110">
                                            <span class="custom-control-label">F5. KETERANGAN AHLI WARIS KOREKSI C110</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI" checked="">
                                            <span class="custom-control-label">F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F7. SURAT KETERANGAN PENGUBURAN">
                                            <span class="custom-control-label">F7. SURAT KETERANGAN PENGUBURAN</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH">
                                            <span class="custom-control-label">F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH</span>
                                        </label>
                                        <?php 
                                            }else if($persyaratan->files == "F7. SURAT KETERANGAN PENGUBURAN"){
                                        ?>
                                       <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI">
                                            <span class="custom-control-label">F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F2. SPTB">
                                            <span class="custom-control-label">F2. SPTB</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F3. SURAT KETERANGAN JANDA DUDA">
                                            <span class="custom-control-label">F3. SURAT KETERANGAN JANDA DUDA</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH">
                                            <span class="custom-control-label">F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F5. KETERANGAN AHLI WARIS KOREKSI C110">
                                            <span class="custom-control-label">F5. KETERANGAN AHLI WARIS KOREKSI C110</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI">
                                            <span class="custom-control-label">F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F7. SURAT KETERANGAN PENGUBURAN" checked="">
                                            <span class="custom-control-label">F7. SURAT KETERANGAN PENGUBURAN</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH">
                                            <span class="custom-control-label">F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH</span>
                                        </label>
                                        <?php 
                                            }else if($persyaratan->files == "F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH"){
                                        ?>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI">
                                            <span class="custom-control-label">F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F2. SPTB">
                                            <span class="custom-control-label">F2. SPTB</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F3. SURAT KETERANGAN JANDA DUDA">
                                            <span class="custom-control-label">F3. SURAT KETERANGAN JANDA DUDA</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH">
                                            <span class="custom-control-label">F4. SURAT KETERANGAN KUASA dari ahli waris UDW PUNAH</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F5. KETERANGAN AHLI WARIS KOREKSI C110">
                                            <span class="custom-control-label">F5. KETERANGAN AHLI WARIS KOREKSI C110</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI">
                                            <span class="custom-control-label">F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F7. SURAT KETERANGAN PENGUBURAN">
                                            <span class="custom-control-label">F7. SURAT KETERANGAN PENGUBURAN</span>
                                        </label>

                                        <label class="custom-control custom-radio">
                                            <input type="radio" name="files" class="custom-control-input" value="F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH" checked="">
                                            <span class="custom-control-label">F8. SURAT KETERANGAN BELUM BEKERJA DAN BELUM MENIKAH</span>
                                        </label>
                                        <?php
                                            }
                                        ?>
                                    </div>

                                    <div class="float-left">
                                        <button type="submit" class="btn btn-space btn-primary" id="save_persyaratan">Simpan</button>
                                        <a href="<?php echo base_url('persyaratan_detail/lists/' . $persyaratan->id_persyaratan);?>">
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