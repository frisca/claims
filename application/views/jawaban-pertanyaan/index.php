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
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="float-left" style="margin-top: 10px;">Daftar Jawaban Pertanyaan</h3>
                                <a href="<?php echo base_url('jawaban_pertanyaan/add/' . $pertanyaan->id_pertanyaan);?>">
                                    <button class="btn float-right btn-primary">Tambah</button>
                                </a>
                            </div>
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
                                <table class="table table-striped table-bordered first" id="example">
                                    <thead>
                                        <tr>
                                            <th>Pertanyaan</th>
                                            <th>Jawaban</th>
                                            <th>Hasil</th>
                                            <th width="20%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($jawaban_pertanyaan as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $pertanyaan->pertanyaan;?></td>
                                            <td><?php echo $value->jawaban;?></td>
                                            <td><?php echo $value->pertanyaan;?></td>
                                            <td>
                                                <a href="<?php echo base_url('jawaban_pertanyaan/detail/' . $pertanyaan->id_pertanyaan . '/' . $value->id_jawaban);?>">
                                                    <button class="btn btn-info">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url('jawaban_pertanyaan/edit/' . $pertanyaan->id_pertanyaan . '/' . $value->id_jawaban);?>">
                                                    <button class="btn btn-success">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url('jawaban_pertanyaan/delete/' . $pertanyaan->id_pertanyaan . '/' . $value->id_jawaban);?>">
                                                    <button class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
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