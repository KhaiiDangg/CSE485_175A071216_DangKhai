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

        $('input[name=diem10], input[name=diem11], input[name=diem12],input[name=diemxettuyen]').keyup(function()  {
            var total = 0;
            var $row = $(this).closest("table"); //this is the closest common root of the input elements
            var diem10 = parseFloat( $row.find('input[name=diem10]').val() );
            var diem11 = parseFloat( $row.find('input[name=diem11]').val() );
            var diem12 = parseFloat( $row.find('input[name=diem12]').val() );
             total = ((diem10 + diem11 + diem12)); 
              $row.find('input[name=diemxettuyen]').val( total);
               
        });
    
    
        $('input[name=diemmon1], input[name=diemmon2], input[name=diemmon3],input[name=tongdiem]').change(function()  {
            var total = 2;
            var $row = $(this).closest("table"); //this is the closest common root of the input elements
            // var mon1 = parseFloat( $row.find('input[name=diemmon1]').val() );
            // var mon2 = parseFloat( $row.find('input[name=diemmon2]').val() );
            // var mon3 = parseFloat( $row.find('input[name=diemmon3]').val() );
            var mon1 = document.getElementById("diem1").value;
            var mon2 = document.getElementById("diem2").value;
            var mon3 = document.getElementById("diem3").value;
            
         
             total = parseFloat(mon1) + parseFloat(mon2) + parseFloat(mon3); 
             console.log(total);
            //   $row.find('input[name=tongdiem]').val( total);
            $("#tong").val(total);
               
        });
        $('.post-wrapper').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            nextArrow: $('.next'),
            prevArrow: $('.prev'),
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
          });
    
    }
   
        








);