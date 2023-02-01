<script type="text/javascript">
$(function() {


    $.ajax({
        type: "POST",
        url: "ajax/get_customer.php",
        //    data: $("#frmMain").serialize(),
        success: function(result) {

            for (count = 0; count < result.cuscode.length; count++) {

                let status
                if (result.trackno[count] != '')
                    status = 'เสร็จสิ้น'
                else if (result.followdate[count] != '')
                    status = 'ยื่นตามเอกสารตัวจริงแล้ว'
                else 
                    status = 'ปิดบัญชีเสร็จสิ้น'

                $('#tableCustomer').append(
                    '<tr data-toggle="modal" data-target="#modal_edit" id="' + result
                    .cuscode[
                        count] + '" data-whatever="' + result.cuscode[
                        count] + '"><td>' + convertDateTH(result.cusdate[count]) + '</td><td>' + result
                    .titlename[count] + ' ' + result.cusname[count] + ' ' + result.lastname[
                        count] + '</td><td  style="text-align:center">' + status + '</td><td>' + result.code[count] + '</td><td>' + result.codeno[
                        count] + '</td></tr>');
            }

            var table = $('#tableCustomer').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                order: [[ 3, 'asc' ]],
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


})


$('#modal_edit').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var recipient = button.data('whatever');
    var modal = $(this);

    $.ajax({
        type: "POST",
        url: "ajax/getsup_customer.php",
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
            modal.find('.modal-body #trackno').val(result.trackno);


        }
    });
});

$('#modelEdit').on('hidden.bs.modal', function() {
    $("#frmEditInventory *").prop('disabled', true);
});

$("#btnRefresh").click(function() {
    window.location.reload();
});

//เพิ่มผู้ขาย
$("#frmAddCustomer").submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "ajax/add_customer.php",
        data: $("#frmAddCustomer").serialize(),
        success: function(result) {
            if (result.status == 1) // Success
            {
                alert(result.message);
                window.location.reload();
                // console.log(result.message);
            } else {
                alert('รหัสซ้ำ');
            }
        }
    });


});

$("#frmEditCustomer").submit(function(e) {
    e.preventDefault();
    $(':disabled').each(function(e) {
        $(this).removeAttr('disabled');
    })
    $.ajax({
        type: "POST",
        url: "ajax/edit_customer.php",
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
</script>