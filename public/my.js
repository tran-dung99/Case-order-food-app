$(document).ready(function(){
    let baseUrl = origin;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("body").on("click",".delete-user",function () {
        let id = $(this).attr("data-id");
        $.ajax({
            url: baseUrl+"/api/users/delete/"+id,
            type: "GET",
            success:function (res) {
                $('#delete-'+id).remove();
            }
        })
    })


})
