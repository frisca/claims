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
                                <h3 class="float-left" style="margin-top: 10px;">Lihat Data Persyaratan</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered first">
                                    <tbody>
                                        <tr>
                                            <th>Jenis Klim</th>
                                            <td>
                                                <?php 
                                                    foreach ($jenis_formulir as $key => $value) {
                                                        if($value->id_jenis == $persyaratan->id_jenis){
                                                            echo $value->jenis_formulir;
                                                        }
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nama Persyaratan</th>
                                            <td><?php echo $persyaratan->nama_persyaratan;?></td>
                                        </tr>
                                        <!-- <tr>
                                            <th>Persyaratan</th>
                                            <td><?php echo $persyaratan->persyaratan;?></td>
                                        </tr> -->
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                <?php
                                                    if($persyaratan->status == 1){
                                                        echo 'Aktif';
                                                    }else{
                                                        echo 'Tidak Aktif';
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div>
                                    <a href="<?php echo base_url('persyaratan/index');?>">
                                        <button type="button" class="btn btn-space btn-default" style="margin-top: 15px;">Kembali</button>
                                    </a>
                                </div>
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