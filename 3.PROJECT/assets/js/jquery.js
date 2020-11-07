$(document).ready(function() {
    $('input[name=diemmon1], input[name=diemmon2], input[name=diemmon3],input[name=tongdiem]').change(function(e)  {
         var total = 0;
         var $row = $(this).closest("table"); //this is the closest common root of the input elements
         var mon1 = parseFloat( $row.find('input[name=diemmon1]').val() );
         var mon2 = parseFloat( $row.find('input[name=diemmon2]').val() );
         var mon3 = parseFloat( $row.find('input[name=diemmon3]').val() );
        // var pcamount= $row.find('input[name=pcamount]').val();
        // total_mnozi= procombase * profcomper;
          total = ((mon1 + mon2 + mon3)); 
           $row.find('input[name=tongdiem]').val( total);
            
     });
 });