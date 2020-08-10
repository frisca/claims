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
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="float-left"><?php echo $syarat->nama_persyaratan;?></h4>
                            </div>
                            <div class="card-body">
                            <div>
                                Silahkan upload berkas / dokumen yang telah dipersiapkan.
                            </div>
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
                                <?php
                                    foreach($persyaratan as $key=>$value){
                                        if($value->urutan == 1){
                                ?>
                                <div>
                                    <p>
                                        <?php echo $value->urutan;?> . <?php echo $value->persyaratan;?>. 
                                        (<a href="<?php echo base_url('formulir/downloadFormulir/' . $formulir->id_formulir);?>"> Download Formulir</a> )      
                                    </p>
                                </div>
                                <?php
                                        }else{
                                ?>
                                <div>
                                    <p>
                                        <?php echo $value->urutan;?> . <?php echo $value->persyaratan;?>.
                                        <?php
                                            if($value->files != ""){
                                        ?>
                                        (<a href="<?php echo base_url('formulir/' . $value->files . '.pdf');?>"> Download Formulir</a> )
                                        <?php
                                            }
                                        ?>      
                                    </p>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                                <div>
                                </div>
                            </div>
                            <!-- <div class="card-footer">
                                <a href="<?php echo base_url('home/index');?>">
                                    <button type="button" class="btn btn-space btn-default">Kembali</button>
                                </a>
                            </div> -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="float-left">UPLOAD BERKAS / DOKUMEN</h4>
                            </div>
                            <form method="post" action="<?php echo base_url('status/uploadRejectBerkas/' . $formulir->id_formulir);?>" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        Silahkan upload berkas / dokumen yang telah Anda persiapkan sesuai dengan persyaratan diatas.
                                    </div>
                                    <?php
                                        $key = 1;
                                        foreach($status as $values)
                                        {
                                            $tamp = explode(' ', $values->persyaratan);
                                            if($tamp[0] == "MENGISI"){
                                                $label = str_replace('MENGISI ', '', trim($values->persyaratan)); 
                                    ?>
                                        <div class="form-group">
                                            <label><?php echo $key . '. ' . $label . '*';?></label>
                                            <input type="file" class="form-control" name="userfile[]" multiple required/>
                                            <input type="hidden" class="form-control" name="det_persyaratan[]" multiple
                                            value="<?php echo $values->id_detail_persyaratan;?>"/>
                                            <input type="hidden" class="form-control" name="id_formulir_dt[]" multiple
                                            value="<?php echo $values->id_formulir_dt;?>"/>
                                        </div>
                                    <?php
                                            }else{
                                    ?>
                                        <div class="form-group">
                                            <label><?php echo $key . '. ' . $values->persyaratan . '*';?></label>
                                            <input type="file" class="form-control" name="userfile[]" multiple required/>
                                            <input type="hidden" class="form-control" name="det_persyaratan[]" multiple
                                            value="<?php echo $values->id_detail_persyaratan;?>"/>
                                            <input type="hidden" class="form-control" name="id_formulir_dt[]" multiple
                                            value="<?php echo $values->id_formulir_dt;?>"/>
                                        </div>
                                    <?php
                                            }
                                            $key++;
                                        }
                                    ?>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                    <a href="<?php echo base_url('status/reject');?>">
                                        <button type="button" class="btn btn-space btn-secondary">Kembali</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <!-- <button class="btn float-right btn-primary">Tambah</button> -->
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
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