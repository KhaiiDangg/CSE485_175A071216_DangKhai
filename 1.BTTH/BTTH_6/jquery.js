$(document).ready(function(){
    $("#sel_depart").change(function(){
    var deptid = $(this).val();
    $.ajax({
    url: 'getUsers.php',
    type: 'post',
    data: {depart:deptid},
    dataType: 'json',
    success:function(response){
    var len = response.length;
    $("#sel_user").empty();
    for( var i = 0; i<len; i++){
    var id = response[i]['id'];
    var name = response[i]['name'];
    $("#sel_user").append("<option value='"+id+"'>"+name+" </option>");
    }
    }
    });
    });
    });