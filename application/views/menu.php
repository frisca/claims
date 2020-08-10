<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <?php
                        if($this->session->userdata('role') == 1){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('home/index');?>">
                            <i class="fas fa-home"></i>Dashboard
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin/index');?>">
                            <i class="fa fa-fw fa-user-circle"></i>Admin
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-user-circle"></i>Pengguna</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('admin/index');?>">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('customer/index');?>">Customer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('customer_service/index');?>">Customer Service</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('pertanyaan/index');?>">
                            <i class="fa fa-question-circle"></i>Pertanyaan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('jenis_formulir/index');?>">
                            <i class="fa fa-list-alt"></i>Jenis Klim
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('persyaratan/index');?>">
                            <i class="fa fa-clipboard"></i>Persyaratan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-file"></i>Status</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('status/process');?>">Proses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('status/approve');?>">Approve</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('status/reject');?>">Reject</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php 
                        }else if($this->session->userdata('role') == 3){
                    ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('status/process');?>">
                            <i class="fa fa-file"></i>Status Formulir
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('home/index');?>">
                            <i class="fas fa-home"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-file"></i>Status</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('status/process');?>">Proses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('status/approve');?>">Approve</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('status/reject');?>">Reject</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php
                        }else{
                    ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('home/index');?>">
                            <i class="fas fa-home"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('formulir/persyaratan');?>">
                            <i class="fa fa-clipboard"></i>Formulir
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-file"></i>Status</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('status/approve');?>">Approve</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('status/reject');?>">Reject</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</div>