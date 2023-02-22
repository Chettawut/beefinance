<script type="text/javascript">
$(function() {




})

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

        let percen = formatMoney(parseFloat(($("#spanclosedcus").text() * 100) / $("#spancountcus").text()),
            2)
        // alert(percen)

    }

});

$.ajax({
    type: "POST",
    url: "ajax/getpercenclosed.php",
    success: function(result) {

        let percen = formatMoney(result.countcus, 2)
        // alert(percen)

        $("#spanpercenclosed").append(percen + '<sup style="font-size: 20px">%</sup>')
    }

});

$.ajax({
    type: "POST",
    url: "ajax/getall_customer.php",
    success: function(result) {

        $("#spancountcus").text(result.countcus)
    }

});

$("#frmEditCustomer").submit(function(e) {
    e.preventDefault();
    $(':disabled').each(function(e) {
        $(this).removeAttr('disabled');
    })
    $.ajax({
        type: "POST",
        url: "customer/ajax/edit_customer.php",
        data: $("#frmEditCustomer").serialize(),
        success: function(result) {

            if (result.status == 1) // Success
            {
                alert(result.message);
                window.location.reload();
                // console.log(result.message);
            }
        }
    });

});

$('#modal_edit').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var recipient = button.data('whatever');
    var modal = $(this);

    $.ajax({
        type: "POST",
        url: "customer/ajax/getsup_customer.php",
        data: "idcode=" + recipient,
        success: function(result) {
            modal.find('.modal-body #cuscode').val(result.cuscode);
            modal.find('.modal-body #cusname').val(result.cusname);
            modal.find('.modal-body #lastname').val(result.lastname);
            modal.find('.modal-body #titlename').val(result.titlename);
            modal.find('.modal-body #cusdate').val(result.cusdate);
            modal.find('.modal-body #code').val(result.code);
            modal.find('.modal-body #codeno').val(result.codeno);
            modal.find('.modal-body #plateno').val(result.plateno);
            modal.find('.modal-body #credittype').val(result.credittype);
            modal.find('.modal-body #oldfinance').val(result.oldfinance);
            modal.find('.modal-body #closeprice').val(result.closeprice);
            modal.find('.modal-body #closevender').val(result.closevender);
            modal.find('.modal-body #diff').val(result.diff);
            modal.find('.modal-body #branch').val(result.branch);
            modal.find('.modal-body #province').val(result.province);
            modal.find('.modal-body #followdate').val(result.followdate);
            modal.find('.modal-body #bookdate').val(result.bookdate);
            modal.find('.modal-body #trackno').val(result.trackno);


        }
    });
});

$.ajax({
    type: "POST",
    url: "ajax/get_customer.php",
    //    data: $("#frmMain").serialize(),
    success: function(result) {

        for (count = 0; count < result.cuscode.length; count++) {

            let status, color
            if (result.trackno[count] != '') {
                status = 'เสร็จสิ้น'
                color = '<span class="badge bg-danger">' + status + '</span>'
            } else if (result.bookdate[count] != '') {
                status = 'รับเล่มแล้ว'
                color = '<span class="badge bg-warning">' + status + '</span>'
            } else if (result.followdate[count] != '') {
                status = 'ยื่นเอกสาร<br><br>ชุดโอนแล้ว'
                color = '<span class="badge bg-primary">' + status + '</span>'
            } else {
                status = 'ปิดบัญชี<br><br>เสร็จสิ้น'
                color = '<span class="badge bg-success">' + status + '</span>'
            }
            // badge bg-danger
            $('#tableCustomer').append(
                '<tr data-toggle="modal" data-target="#modal_edit" id="' + result
                .cuscode[
                    count] + '" data-whatever="' + result.cuscode[
                    count] + '"><td>' + result
                .titlename[count] + ' ' + result.cusname[count] + ' ' + result.lastname[
                    count] + '</td><td  style="text-align:center">' + color + '</td><td>' +
                result.plateno[count] + '</td><td>' + convertDateTH(result.cusdate[count]) +
                '</td><td>' + result.code[count] + '</td><td>' + result.codeno[count] +
                '</td><td>' + result.branch[
                    count] + '</td><td>' + result.oldfinance[
                    count] + '</td></tr>');
        }

        var table = $('#tableCustomer').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            order: [
                [1, 'asc']
            ],
            "info": false,
            "autoWidth": false,
            "responsive": true,
        });

        $(".dataTables_filter input[type='search']").attr({
            size: 30,
            maxlength: 30
        });


    }

});
</script>