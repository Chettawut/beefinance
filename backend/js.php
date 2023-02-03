<script type="text/javascript">
$(function() {

    

    $.ajax({
        type: "POST",
        url: "ajax/get_customer_bymonth.php",
        success: function(result) {

            $("#spancus_thismonth").text(result.countcus)
        }

    });

    $.ajax({
        type: "POST",
        url: "ajax/getclosed_customer.php",
        success: function(result) {

            $("#spanclosedcus").text(result.countcus)

            let percen = formatMoney(parseFloat(($("#spanclosedcus").text()*100)/$("#spancountcus").text()),2)
            // alert(percen)
            
        }

    });

    $.ajax({
        type: "POST",
        url: "ajax/getpercenclosed.php",
        success: function(result) {

            let percen = formatMoney(result.countcus,2)
            // alert(percen)
            
            $("#spanpercenclosed").append(percen+'<sup style="font-size: 20px">%</sup>')
        }

    });

    $.ajax({
        type: "POST",
        url: "ajax/getall_customer.php",
        success: function(result) {

            $("#spancountcus").text(result.countcus)
        }

    });

    
    
    
    

})
</script>