    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery-3.3.1.min.js');?>"></script>
    <!-- bootstap bundle js -->
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.js');?>"></script>
    <!-- slimscroll js -->
    <script src="<?php echo base_url('assets/vendor/slimscroll/jquery.slimscroll.js');?>"></script>
    <!-- main js -->
    <script src="<?php echo base_url('assets/libs/js/main-js.js');?>"></script>
    <!-- chart chartist js -->
    <script src="<?php echo base_url('assets/vendor/charts/chartist-bundle/chartist.min.js');?>"></script>
    <!-- sparkline js -->
    <script src="<?php echo base_url('assets/vendor/charts/sparkline/jquery.sparkline.js');?>"></script>
    <!-- morris js -->
    <script src="<?php echo base_url('assets/vendor/charts/morris-bundle/raphael.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/charts/morris-bundle/morris.js');?>"></script>
    <!-- chart c3 js -->
    <script src="<?php echo base_url('assets/vendor/charts/c3charts/c3.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/charts/c3charts/d3-5.4.0.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/charts/c3charts/C3chartjs.js');?>"></script>
    <script src="<?php echo base_url('assets/libs/js/dashboard-ecommerce.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/js/dataTables.bootstrap4.min.js');?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
            $('#save_persyaratan').click(function(){
                $status = $('#status option:selected').val();
                $jenis_formulir = $('#jenis_formulir option:selected').val();

                if($jenis_formulir == 0){
                    alert("Jenis Formulir harus dipilih");
                    return false;
                }

                if($status == 0){
                    alert("Statu harus dipilih");
                    return false;
                }
            })
        } );
    </script>
</body>
 
</html>