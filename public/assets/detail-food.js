$(document).ready(function () {
    let baseUrl = origin;


    $("body").on("click",".detail-food",function () {
        let id = $(this).attr("data-id");
        $(".modal").show()
        $.ajax({
            url: baseUrl + "/api/home/detail/"+id,
            type: "GET",
            success: function (res) {
                console.log(res)

               let str = '';
                 str +=`<div class="card">`
                            str+= `<img src="${baseUrl}/storage/${res.data.image}">`
                            str += `<div class="card-body">
                                <h5 class="card-title">${res.data.name}</h5>
                                Địa chỉ:
                                <p class="card-text">${res.data.address}</p>
                                <p class="card-text">${res.data.seen_time}</p>

                            </div>
                        </div>`
                $(".modal-body").html(str)
            }
        })
    })

    $("body").on("click",".close",function () {
        $(".modal").hide();
    })
    $("body").on("click","#close",function () {
        $(".modal").hide();
    })
})
