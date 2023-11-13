//todo: Cập nhật trạng thái của cms
$(document).on("click",".updateCmsPageStatus", function () {
    var status = $(this).attr("status");
    var page_id =$(this).attr("page_id");
    $.ajax(
        {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update_csm_status',
            data: {status:status, page_id: page_id},
            success:function(resp) {
                if (resp['status']==0){
                    $("#page-"+page_id).html("<a status ='Active'  <i class='ti ti-toggle-left' style='color: gray'>>")
                }
                else if (resp['status']==1) {
                    $("#page-"+page_id).html("<a status ='Inactive'<i class='ti ti-toggle-right' status ='Inactive' style='color: #0b5ed7'>>")
                }
            },
            error:function (){
                alert("Error");
            }
        }
    )
})
//todo: Xác nhận xóa
$(document).on("click",".confirmDeletes", function (){
    // var name = $(this).attr('name');
    // if (confirm("Bạn chắc chắn muốn xóa "<name>"?")){
    //     return true;
    // }
    // return false;


    var record = $(this).attr('record');
    var recordid= $(this).attr('recordid');
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        title: "Bạn có chắc chắn không?",
        text: "Xác nhận",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Có",
        cancelButtonText: "Không",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire({
                title: "Xóa thành công!",
                text: "Bạn đã xóa CMS.",
                icon: "success"
            });
            window.location.href="/admin/delete_"+record+"/"+recordid;
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                title: "Hủy xóa",
                text: "Bạn chưa xóa CMS :)",
                icon: "error"
            });
        }
    });
})
