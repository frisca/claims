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
            $('.hasils').click(function(){
                var hasil = $('.hasils option:selected').val();
                if(hasil == "99"){
                    $('.jenis_formulir').css('display', 'block');
                }else{
                    $('.jenis_formulir').css('display', 'none');
                }
            });
            $('.yes_1').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log(data.id_jenis);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }

                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_2').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_3').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_4').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_5').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_6').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('id jenis: ', data.id_jenis);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_7').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_8').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_9').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_10').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_11').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_12').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.yes_13').click(function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "TIDAK"},
                        dataType: 'json',
                        success: function(response){
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            

            $('.no_1').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_2').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_3').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_4').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_5').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_6').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_7').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_8').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_9').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_10').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_11').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_12').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });
            $('.no_13').on('change',function(){
                var pertanyaanid = $(this).attr('pertanyaanid');
                var jawaban = $(this).val();
                console.log('jawaban: ', jawaban);
                $.post( "<?php echo base_url('home/getJawaban');?>", { pertanyaanid: pertanyaanid, jawaban : jawaban}, function(data){
                    console.log('data: ', data);
                    if(data.id_jenis != null){
                        $("#id_jenis").val(data.id_jenis);
                        $('#submit').css('display', 'block');
                    }else{
                        $("#id_jenis").val('');
                        $('#submit').css('display', 'none');
                    }
                    $('.urutan_' + data.urutan).css('display', 'block');
                    $.ajax({
                        url:'<?=base_url()?>home/getJawaban',
                        method: 'post',
                        data: {pertanyaanid: pertanyaanid, jawaban: "YA"},
                        dataType: 'json',
                        success: function(response){
                            console.log('response: ', response);
                            $('.urutan_' + response.urutan).css('display', 'none');
                        }
                    });
                }, 'json');
            });

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
            });
            CKEDITOR.replace('edi');
        } );
    </script>
</body>
 
</html>