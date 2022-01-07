$(document).ready(function () {
    let baseUrl = origin;

    $("body").on("click",".detail-food",function (){
        $('.modal').show();
        $.ajax({
            url: baseUrl,
            type: 'GET',
            success:function (res) {
                console.log(res)
            }
        })
    })


    $("body").on("click",".close",function (){
        $('.modal').hide();
    })


    $("body").on("keyup",".input-search",function () {
        let searchName = $(".input-search").val();
        $.ajax({
            url : baseUrl + '/api/search',
            type: 'GET',
            data :{
                result: searchName
            },
            success: function ( res) {
                if(res.data.length > 0) {
                let str = '';
                for (let i = 0; i < res.data.length; i++) {
                    str+= `<tr>`;
                    str+= `<td>`;
                    str+=  res.data[i].name;
                    str+= `</td>`;
                    str+= `<td>`;
                    str+=  res.data[i].address;
                    str+= `</td>`;
                    str+= `<td>`;
                    str+=  res.data[i].category;
                    str+= `</td>`;
                    str+= `<td>`;
                    str+=  res.data[i].price;
                    str+= `</td>`;
                    str+= `<td><a type="button" class="btn btn-danger" href="http://127.0.0.1:8000/foods/detail/${res.data[i].id}">`;
                    str+=  "Detail"
                    str+= `</a></td>`;
                    str+= `</tr>`;
                }
                $('.body-food').html(str);
                }else{
                    let str = 'Không tìm thấy kết quả!';
                    $('.body-food').html(str)
                }
            }
        })

    })
})
