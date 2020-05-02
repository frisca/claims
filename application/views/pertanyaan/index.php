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
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="float-left" style="margin-top: 10px;">Daftar Pertanyaan</h3>
                                <a href="<?php echo base_url('pertanyaan/add');?>">
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
                                            <th>Urutan</th>
                                            <th>Pertanyaan</th>
                                            <th>Pilihan Jawaban 1</th>
                                            <th>Pilihan Jawaban 2</th>
                                            <th>Status</th>
                                            <th width="20%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($pertanyaan as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value->urutan;?></td>
                                            <td><?php echo $value->pertanyaan;?></td>
                                            <td><?php echo $value->pilihan_jawaban_1;?></td>
                                            <td><?php echo $value->pilihan_jawaban_2;?></td>
                                            <td>
                                                <?php
                                                    if($value->status == 1){
                                                        echo 'Aktif';
                                                    }else{
                                                        echo 'Tidak Aktif';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('pertanyaan/detail/' . $value->id_pertanyaan);?>">
                                                    <button class="btn btn-info">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url('pertanyaan/edit/' . $value->id_pertanyaan);?>">
                                                    <button class="btn btn-success">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url('pertanyaan/delete/' . $value->id_pertanyaan);?>">
                                                    <button class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </a>
                                                <a href="<?php echo base_url('jawaban_pertanyaan/index/' . $value->id_pertanyaan);?>">
                                                    <button class="btn btn-warning">
                                                        <i class="fa fa-align-justify"></i>
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