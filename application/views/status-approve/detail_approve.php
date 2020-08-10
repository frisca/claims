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
                            <h2 class="pageheader-title">Status Process</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Status Approve</li>
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
                                <h3 class="float-left" style="margin-top: 10px;">Daftar Status Approve Detail</h3>
                            </div>
                            <form>
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
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Persyaratan</th>
                                                <th>Files</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($status as $key => $value) {
                                                    $tamp = explode(' ', $value->persyaratan);
                                                    if($tamp[0] == "MENGISI"){
                                                        $label = str_replace('MENGISI ', '', trim($value->persyaratan)); 
                                            ?>
                                                        <tr>
                                                            <td><?php echo $label;?></td>
                                                            <td>
                                                                <a href="<?php echo base_url('upload/' . $value->files_formulir);?>" target="_blank">
                                                                    <?php echo $value->files_formulir;?>
                                                                </a>
                                                            </td>
                                                        </tr>
                                            <?php
                                                    }else{
                                            ?>
                                                        <tr>
                                                            <td><?php echo $value->persyaratan;?></td>
                                                            <td>
                                                                <a href="<?php echo base_url('upload/' . $value->files_formulir);?>" target="_blank">
                                                                    <?php echo $value->files_formulir;?>
                                                                </a>
                                                            </td>
                                                        </tr>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php echo base_url('status/approve');?>">
                                        <button type="button" class="btn btn-space btn-secondary">Kembali</button>
                                    </a>
                                </div>
                            </div>
                        </form>
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