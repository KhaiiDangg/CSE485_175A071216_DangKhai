$(document).ready(function(){
    $("#search").click(function(){
        var idnhanvien= $("#nv").val();
      
        $.ajax({
            url:'xulitimkiem.php',
            type:'POST',
            data: {id:idnhanvien},
            dataType: 'json',
            success:function(response){
                var len = response.length;
                $("#ten").empty();
                $("#dc").empty();
                $("#gt").empty();
                $("#desi").empty();
                $("#tuoi").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var tennhanvien = response[i]['tennhanvien'];
                    var diachi = response[i]['diachi'];
                    var gt = response[i]['gioitinh'];
                    var desi = response[i]['designation'];
                    var tuoi = response[i]['tuoi'];
                    $("#ten").append(tennhanvien);
                    $("#dc").append(diachi);
                    $("#gt").append(gt);
                    $("#desi").append(desi);
                    $("#tuoi").append(tuoi);
                }
            }

        })
    })


})