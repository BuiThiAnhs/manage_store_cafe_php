$(document).ready(function (){
    $("#current_password").keyup(function (){
        var currrent_password = $("#current_password").val();
        // alert(currrent_password);
        $.ajax(
            {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url:'/admin/account/check_update_account',
                data:{currrent_password: currrent_password},
                success:function (resp){
                    if (resp ==="false")
                    {
                        $("#verifyCurrentPassword").html("Mật khẩu sai");
                    }
                    else if(resp ==="true")
                    {
                        $("#verifyCurrentPassword").html("Mật khẩu đúng");

                    }
                },
                error:function (){
                    alert("Error");
                }
            }
        )
    });

    $(document).on("click",".updateCmsPageStatus", function () {
        var status = $(this).children("i").attr("status");
        alert(status);
        var page_id =$(this).attr("page_id");
        alert(page_id);
        $.ajax(
            {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/admin/update_csm_status',
                data: {status:status, page_id: page_id},
                success:function (resp) {
                    if (resp['status']==0){
                        $("#page-"+page_id).html("<i class='ti ti-toggle-right'  status ='Active' style='color: #0b5ed7'>")
                    }
                    else if (resp['status']==1) {
                        $("#page-"+page_id).html("<i class='ti ti-toggle-left' status ='Inactive' style='color: grey'>")
                    }
                },
                error:function (){
                    alert("Error");
                }
            }
        )
    })
});
