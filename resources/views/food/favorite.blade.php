
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title') </title>
    <!-- Favicon icon -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
    </script>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/./images/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('backend/./vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/./vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('backend/./vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/./css/style.css')}}" rel="stylesheet">



</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <img class="logo-abbr" src="{{asset('backend/./images/logo.png')}}" alt="">
            <img class="logo-compact" src="{{asset('backend/./images/logo-text.png')}}" alt="">
            <img class="brand-title" src="{{asset('backend/./images/logo-text.png')}}" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************

        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                            <div class="dropdown-menu p-0 m-0">
                                <form>
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <div class="pulse-css"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="list-unstyled">
                                    <li class="media dropdown-item">
                                        <span class="success"><i class="ti-user"></i></span>
                                        <div class="media-body">
                                            <a href="#">
                                                <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class="notify-time">3:20 am</span>
                                    </li>
                                    <li class="media dropdown-item">
                                        <span class="primary"><i class="ti-shopping-cart"></i></span>
                                        <div class="media-body">
                                            <a href="#">
                                                <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                            </a>
                                        </div>
                                        <span class="notify-time">3:20 am</span>
                                    </li>
                                    <li class="media dropdown-item">
                                        <span class="danger"><i class="ti-bookmark"></i></span>
                                        <div class="media-body">
                                            <a href="#">
                                                <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                </p>
                                            </a>
                                        </div>
                                        <span class="notify-time">3:20 am</span>
                                    </li>
                                    <li class="media dropdown-item">
                                        <span class="primary"><i class="ti-heart"></i></span>
                                        <div class="media-body">
                                            <a href="#">
                                                <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                            </a>
                                        </div>
                                        <span class="notify-time">3:20 am</span>
                                    </li>
                                    <li class="media dropdown-item">
                                        <span class="success"><i class="ti-image"></i></span>
                                        <div class="media-body">
                                            <a href="#">
                                                <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class="notify-time">3:20 am</span>
                                    </li>
                                </ul>
                                <a class="all-notification" href="#">See all notifications <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </li>
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="./app-profile.html" class="dropdown-item">
                                    <i class="icon-user"></i>
                                    <span class="ml-2">{{\Illuminate\Support\Facades\Auth::user()->name??''}}</span>
                                </a>
                                <a href="./email-inbox.html" class="dropdown-item">
                                    <i class="icon-envelope-open"></i>
                                    <span class="ml-2">Inbox </span>
                                </a>
                                <a href="{{route('admin.showFormLogin')}}" class="dropdown-item">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="quixnav">
        <div class="quixnav-scroll">
            <ul class="metismenu" id="menu">

                <li class="nav-label">User</li>

            </ul>
        </div>


    </div>
    <div>
        <h2>@yield('name-list')</h2>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <body>

        <h2 class="text-center">Danh sách món ăn đã chọn</h2>
        <div class="container">
            <table id="cart" class="table table-hover table-condensed" style= "color: #28284e">
                <thead>
                <tr>
                    <th style="width:21%">Ảnh</th>
                    <th style="width:40%">Tên món ăn</th>
                    <th style="width:17%">Giá</th>
                    <th style="width:10%">Số lượng</th>
                    <th style="width:5%">Tổng</th>
                    <th style="width:7%">Xóa</th>
                </tr>
                </thead>

                <tbody>
                <p style="display: none">{{$sum=0}}</p>

                @foreach($foods as $food)



                    <tr>
                        <td><img width="50%" height="50%" src="{{asset('storage/'.$food['image'])}}"></td>
                        <td>{{ $food['name'] }}</td>
                        <td>{{ $food['price'] }}</td>
                        <td>
                            <a href="{{ route('foods.addToFavorite',$food['id'])}}"><i class="far fa-plus-square"></i></a>
                            {{ $food['quantity'] }}  <a href="{{ route('deleteFavorite',$food['id'])}}"><i class="far fa-minus-square"></i></a>

                        </td>
                        <td>{{ $food['price']*$food['quantity']}}</td>
                        <p style="display: none">{{$sum+=$food['price']*$food['quantity']}}</p>
                        <td class="actions" data-th="">
                            <label >
                                <button class="btn btn-danger"><a href="{{ route('deleteFavorite2',$food['id'])}}"><i class="fa fa-trash-o"></i></a>
                                </button>
                            </label>
                        </td>
                    </tr>

                @endforeach

                </tbody><tfoot>

                <tr>
                    <td><a href="{{ route('home')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td>
                    <td colspan="2" class="hidden-xs"> </td>
                    <td class="hidden-xs text-center"><strong>Tổng tiền {{$sum}}</strong>
                    </td>
                    <td><a href="https://bill.payoo.vn/" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                    </td>
                </tr>



                </tfoot>
            </table>
        </div>

        </body>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('backend/./vendor/global/global.min.js')}}"></script>
<script src="{{asset('backend/./js/quixnav-init.js')}}"></script>
<script src="{{asset('backend/./js/custom.min.js')}}"></script>


<!-- Vectormap -->
<script src="{{asset('backend/./vendor/raphael/raphael.min.js')}}"></script>
<script src="{{asset('backend/./vendor/morris/morris.min.js')}}"></script>


<script src="{{asset('backend/./vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('backend/./vendor/chart.js/Chart.bundle.min.js')}}"></script>

<script src="{{asset('backend/./vendor/gaugeJS/dist/gauge.min.js')}}"></script>

<!--  flot-chart js -->
<script src="{{asset('backend/./vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('backend/./vendor/flot/jquery.flot.resize.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{asset('backend/./vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<!-- Counter Up -->
<script src="{{asset('backend/./vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/./vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('backend/./vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script src="https://kit.fontawesome.com/aba694960b.js" crossorigin="anonymous"></script>

<script src="{{asset('backend/./js/dashboard/dashboard-1.js')}}"></script>

</body>

</html>









