$(document).ready(
    function(){
        $("#tinhhuyen").change(
            function(){
                var idtinh = $(this).find(':selected').data("data");
                $.ajax({
                    //gửi dữ liệu đi
                    url : 'xlytinhhuyen.php',
                    type:'POST',
                    data:{ id : idtinh},
                    //nhận dữ liệu về 
                    success:function(nhanve){
                        $("#huyen").empty();
                        $("#huyen").append(nhanve);
                    }
                });
            }
        );

        $("#loaihinh").change(
            function(){
                var idloaihinh = $(this).find(':selected').data("data");
                $.ajax({
                    url : 'xlyloaihinhnghanh.php',
                    type: 'POST',
                    data:{ id: idloaihinh} ,
                    success:function(nhanve) {
                        $("#nghanh").empty();
                        $("#nghanh").append(nhanve);
                    }
                });
            }
        );

        $("#tinhlop10").change(
            function(){
                var idtinhlop = $(this).find(':selected').data("data");
                $.ajax({
                    url : 'xlytinhlop10.php',
                    type: 'POST',
                    data:{ id: idtinhlop} ,
                    success:function(nhanve) {
                        $("#tinhtruong10").empty();
                        $("#tinhtruong10").append(nhanve);
                    }
                });
            }
        );
        $("#tinhlop11").change(
            function(){
                var idtinhlop = $(this).find(':selected').data("data");
                $.ajax({
                    url : 'xlytinhlop11.php',
                    type: 'POST',
                    data:{ id: idtinhlop} ,
                    success:function(nhanve) {
                        $("#tinhtruong11").empty();
                        $("#tinhtruong11").append(nhanve);
                    }
                });
            }
        );
        $("#tinhlop12").change(
            function(){
                var idtinhlop = $(this).find(':selected').data("data");
                $.ajax({
                    url : 'xlytinhlop12.php',
                    type: 'POST',
                    data:{ id: idtinhlop} ,
                    success:function(nhanve) {
                        $("#tinhtruong12").empty();
                        $("#tinhtruong12").append(nhanve);
                    }
                });
            }
        );
    
    }
   
        








);