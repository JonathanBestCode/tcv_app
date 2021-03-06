<?php

use Illuminate\Support\Facades\Session;

$cus_avt = Session::get('cus_avatar');
$cus_name = Session::get('cus_name');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//truyencv.xyz">
    <link rel="canonical" href="{{\URL::current()}}" />

    <!-- SEO META -->
   <meta name="google-site-verification" content="7c1d2pEdYIE4cP0Op6ZgfWgMJVgU8QJE6-XYLUuDqY4" />
    <meta http-equiv="content-language" content="vi" />
    <meta name="revisit-after" content="1 days" />
    <meta name="ROBOTS" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="BingBOT" content="index,follow" />
    <meta name="yahooBOT" content="index,follow" />
    <meta name="slurp" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} </title>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{\URL::current()}}">
    <meta property="og:title" content="{{$title}}">
    <meta property="og:description" content="{{Str::limit($meta_desc, 170)}}">
    <meta property="og:site_name" content="Truyencv" />
    <meta property="og:image" content="{{$og_image}}" />

    <meta name="description" content="{{Str::limit($meta_desc, 170)}}" />
    <meta name="keywords" content="{{$meta_keywords}}" />
    <meta property="article:tag" content="{{$meta_tag}}" />
    <!-- END -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href="{{asset('public/assets/css/swiper.min.css')}}">
    <script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/themify-icons/themify-icons.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/base.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/responsive.css')}}">

    <link rel="icon" href="{{asset('public/uploads/logo/logo.wepb')}}" type="image/gif" sizes="100x100">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('public/assets/css/home_css.css')}}">

</head>

<body>
    <div class="app">
        <header class="header" id="header">
            <div class="grid wide">
                <div class="header-container row pr-15 pl-15">
                    <div class="header-menu-bar  col l-0 m-4 c-2">
                        <a class="header-menu-bar__icon btn-modal-active" style="position: relative;z-index: 9999;">
                            <i id="menu_btn" onclick="menu_btn()" class="ti-menu"></i>
                        </a>
                    </div>
                    <div class="header-logo col l-2 m-4 c-8 ">
                        <div class="header-logo-wrap">
                            <a href="{{URL::to('/')}}" class="header-logo-link">
                                <img src="{{asset('public/uploads/logo/logo-1.wepb')}}" title="Truy???n Convert" alt="Truy???n Convert" class="header-logo-link-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu  col l-7 m-0 c-0">
                        <ul class="header-menu__list mb-0 ">
                            <li class="header-menu__list-items">
                                <a class="header-menu__list-items-link">
                                    <i class="ti-menu"></i> <span class="">Th??? lo???i</span></a>
                                <ul class="row header-submenu__list ">
                                    @foreach($theloai as $key => $val)
                                    <li class="col l-6 header-submenu__list-items ">
                                        <a href="{{url('the-loai/'.$val->slug)}}" class="header-submenu__list-items-link">{{$val->tentheloai}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="header-menu__list-items">
                                <a class="header-menu__list-items-link">
                                    <i class="ti-stats-up"></i> <span class="header_items">B???ng x???p h???ng</span></a>
                                <ul class="row header-submenu__list rank_tbl">
                                    <li class="col l-12 header-submenu__list-items ">
                                        <a href="{{URL::to('/xep-hang/doc-nhieu')}}" class="header-submenu__list-items-link">?????c nhi???u</a>
                                    </li>
                                    <li class="col l-12 header-submenu__list-items ">
                                        <a href="{{URL::to('/xep-hang/de-cu')}}" class="header-submenu__list-items-link">????? c???</a>
                                    </li>
                                    <li class="col l-12 header-submenu__list-items ">
                                        <a href="{{URL::to('/xep-hang/thao-luan')}}" class="header-submenu__list-items-link">Th???o lu???n</a>
                                    </li>
                                    <li class="col l-12 header-submenu__list-items ">
                                        <a href="{{URL::to('/xep-hang/danh-gia')}}" class="header-submenu__list-items-link">????nh gi??</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="header-menu__list-items">
                                <a href="{{route('book.create')}}" class="header-menu__list-items-link">
                                    <i class="ti-arrow-circle-up"></i> <span class="header_items">????ng truy???n</span></a>
                            </li>
                            <li class="header-menu__list-items">
                                <div class="header-search_group">
                                    <form method="GET" action="{{url('/tim-kiem')}}">
                                        @csrf
                                        <input autocomplete="off" type="text" class="position-relative" name="tukhoa" id="" placeholder="T??m ki???m...">
                                        <button type="submit" class="position-absolute"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </li>

                        </ul>
                    </div>
                    @if($cus_name)
                    <div class="header-menu col l-3 m-0 c-0">
                        <ul class="header-menu__list mb-0 ">
                            <li class="header-menu__list-items">
                                <a class="header-menu__list-items-link d-flex" style="align-items: center;">
                                     <?php
                                      $avata = "this.src='https://static.cdnno.com/user/default/100.jpg'";
                                      ?>
                                    <img onerror="{{$avata}}" class="br-50 mr-2" width="25" height="25" src="{{asset('public/uploads/cus_avt/'.$cus_avt)}}" alt="Truy???n Convert - {{$cus_name}}">
                                    <span class=""> {{$cus_name}}</span>
                                    <i class="ti-angle-down ml-2 " style="font-size: 10px;"></i>
                                </a>
                                <ul class="row header-submenu__list rank_tbl">
                                    <li class="col l-12 header-submenu__list-items ">
                                        <a href="{{URL::to('/account/profile')}}" class="header-submenu__list-items-link">H??? s??</a>
                                    </li>
                                    <li class="col l-12 header-submenu__list-items ">
                                        <a href="{{URL::to('/account/library')}}" class="header-submenu__list-items-link">T??? truy???n</a>
                                    </li>
                                    <li class="col l-12 header-submenu__list-items ">
                                        <a href="{{URL::to('/account/setting')}}" class="header-submenu__list-items-link">C??i ?????t</a>
                                    </li>
                                    <li class="col l-12 header-submenu__list-items ">
                                        <a href="{{URL::to('/account/rewarded')}}" class="header-submenu__list-items-link">Nh???n th?????ng</a>
                                    </li>
                                    <li class="col l-12 header-submenu__list-items ">
                                        <a href="{{URL::to('/account/logout')}}" class="header-submenu__list-items-link">Tho??t</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @else
                    <div class="header-menu col l-3 m-0 c-0">
                        <ul class="header-menu__list mb-0 ">
                            <li class="header-menu__list-items">
                                <a href="{{URL::to('/account/login')}}" class="header-menu__list-items-link ">
                                    ????ng nh???p
                                </a>
                            </li>
                            <li class="header-menu__list-items">
                                <a href="{{URL::to('/account/register')}}" class="header-menu__list-items-link">
                                    ????ng k??
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endif
                    <div class="header-group-btn  col l-0 m-4 c-2">
                        <ul class="header-group-btn__list mb-0">
                            <li id="cl1" onclick="search_btn();" class="header-group-btn__list-items" style="height: 36px; position: relative; z-index: 9999;">
                                <div class="header-group-btn__list-items-link header-group-btn__list-items-search btn-modal-active">
                                    <i id="search_icon_x" class="header-group-btn__list-items-link-icon ti-search"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="header_search" class="header-search col l-0 m-12 c-12">
                        <div class="header-search_group_x">
                            <form method="GET" action="{{url('/tim-kiem')}}">
                                @csrf
                                <input autocomplete="off" type="text" class="position-relative" name="tukhoa" id="" placeholder="T??m ki???m...">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')

        <footer class="footer text-center" style="background: url({{asset('public/uploads/logo/footer-bg.wepb')}}) no-repeat; background-size: 100% 100%;">
            <div class="grid wide footer-body">
                <div class="footer-logo">
                    <a href="" class="logo-link">
                        <img src="{{asset('public/uploads/logo/logo.wepb')}}" alt="Truy???n Convert">
                    </a>
                </div>
                <div class="footer-desc">
                    Truy???n Convert l?? n???n t???ng m??? tr???c tuy???n, mi???n ph?? ?????c truy???n ch??? ???????c convert ho???c d???ch k??? l?????ng.
                    L?? s??n ch??i m??? v?? free cho c???ng ?????ng fan ki???m hi???p, ti??n hi???p, ng??n t??nh...
                </div>
            </div>
        </footer>
        <div class="modal-content modal-menu-mobile" id="menu-mobile">
            <div class="modal-menu-mobile__header ">
                <div class="modal-menu-mobile__header-title ">Menu</div>
                <div class="modal-menu-mobile__header-close modal-close "><i class="ti-close " onclick="close_menu_btn()"></i></div>
            </div>
            <div class="modal-menu-mobile__content ">
                <div class="modal-menu-mobile__content-wrap ">
                    <ul class="modal-menu-mobile__list ">
                        @if($cus_name)
                        <li class="modal-menu-mobile__list-items ">
                            <a onclick="ti_plus3()" class="modal-menu-mobile__list-items-link btn-modal-active d-flex align-items-center" data-modal="auth " style="justify-content: space-between;">
                                <div class="d-flex" style="align-items: center;">
                                    <img src="{{asset('public/uploads/cus_avt/'.$cus_avt)}}" width="30" class="br-50" alt="Truy???n Convert - {{$cus_name}}">
                                    <div class="fw-500 fz-20 ml-2"> {{$cus_name}}</div>
                                </div>
                                <i id="ti_plus3" class="ti-angle-down modal-menu-mobile__list-items-icon-plus "></i>
                            </a>
                            <ul id="profile" class="modal-menu-mobile__submenu-list ">
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/account/profile')}}" class="modal-menu-mobile__submenu-list-items-link ">H??? s??</a>
                                </li>
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/account/setting')}}" class="modal-menu-mobile__submenu-list-items-link ">C??i ?????t</a>
                                </li>
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/account/rewarded')}}" class="modal-menu-mobile__submenu-list-items-link ">Nh???n th?????ng</a>
                                </li>
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/account/logout')}}" class="modal-menu-mobile__submenu-list-items-link ">Tho??t</a>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="modal-menu-mobile__list-items ">
                            <a onclick="ti_plus3()" class="modal-menu-mobile__list-items-link btn-modal-active d-flex" data-modal="auth " style="justify-content: space-between;">
                                <div><i class="ti-user "></i>C?? nh??n</div>
                                <i id="ti_plus3" class="ti-angle-down modal-menu-mobile__list-items-icon-plus " style="font-size: 16px;"></i>
                            </a>
                            <ul id="profile" class="modal-menu-mobile__submenu-list ">
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/account/login')}}" class="modal-menu-mobile__submenu-list-items-link ">????ng Nh???p</a>
                                </li>
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/account/register')}}" class="modal-menu-mobile__submenu-list-items-link ">????ng K??</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li class="modal-menu-mobile__list-items  ">
                            <a href="{{URL::to('/account/library')}}" class="modal-menu-mobile__list-items-link "><i class="ti-bookmark"></i>T??? truy???n</a>
                        </li>
                        <li class="modal-menu-mobile__list-items  ">
                            <a href="{{URL::to('/account/book/create')}}" class="modal-menu-mobile__list-items-link "><i class="ti-location-arrow"></i>????ng truy???n</a>
                        </li>
                        <li class="modal-menu-mobile__list-items ">
                            <a onclick="ti_plus1()" class="modal-menu-mobile__list-items-link d-flex" style="justify-content: space-between;">
                                <div>
                                    <i class="ti-target"></i>Th??? lo???i
                                </div>
                                <i id="ti_plus" class="ti-angle-down modal-menu-mobile__list-items-icon-plus " style="font-size: 16px;"></i>
                            </a>

                            <ul id="category_1" class="modal-menu-mobile__submenu-list ">
                                @foreach($theloai as $key => $val)
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{url('the-loai/'.$val->slug)}}" class="modal-menu-mobile__submenu-list-items-link ">{{$val->tentheloai}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="modal-menu-mobile__list-items ">
                            <a onclick="ti_plus2()" class="modal-menu-mobile__list-items-link d-flex" style="justify-content: space-between;">
                                <div>
                                    <i class="ti-pulse"></i>B???ng x???p h???ng
                                </div>
                                <i id="ti_plus2" class="ti-angle-down modal-menu-mobile__list-items-icon-plus " style="font-size: 16px;"></i>
                            </a>
                            <ul id="tbl_rank" class="modal-menu-mobile__submenu-list ">
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/xep-hang/doc-nhieu')}}" class="modal-menu-mobile__submenu-list-items-link ">?????c nhi???u</a>
                                </li>
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/xep-hang/de-cu')}}" class="modal-menu-mobile__submenu-list-items-link ">????? c???</a>
                                </li>
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/xep-hang/thao-luan')}}" class="modal-menu-mobile__submenu-list-items-link ">Th???o lu???n</a>
                                </li>
                                <li class="modal-menu-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/xep-hang/danh-gia')}}" class="modal-menu-mobile__submenu-list-items-link ">????nh gi??</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="modal-content modal-panel-mobile" id="panel-mobile">
            <div class="modal-panel-mobile__header ">
                <div class="modal-panel-mobile__header-title ">B??? L???c</div>
                <div class="modal-panel-mobile__header-close modal-close "><i class="ti-close " onclick="close_panel_btn()"></i></div>
            </div>
            <div class="modal-panel-mobile__content ">
                <div class="modal-panel-mobile__content-wrap ">
                    <ul class="modal-panel-mobile__list ">
                        <li class="modal-panel-mobile__list-items ">
                            <a onclick="ti_panel_1()" class="modal-panel-mobile__list-items-link d-flex" style="justify-content: space-between;">
                                <div>
                                    <i class="ti-target"></i>Th??? lo???i
                                </div>
                                <i id="ti_panel_1" class="ti-angle-down modal-panel-mobile__list-items-icon-plus " style="font-size: 16px;"></i>
                            </a>
                            <ul id="ti_panel_1_1" class="modal-panel-mobile__submenu-list ">
                                @foreach($theloai as $key => $val)
                                <li class="modal-panel-mobile__submenu-list-items ">
                                    <a href="{{url('the-loai/'.$val->slug)}}" class="modal-panel-mobile__submenu-list-items-link ">{{$val->tentheloai}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="modal-panel-mobile__list-items ">
                            <a onclick="ti_panel_2()" class="modal-panel-mobile__list-items-link d-flex" style="justify-content: space-between;">
                                <div>
                                    <i class="ti-comments-smiley"></i>T??nh Tr???ng
                                </div>
                                <i id="ti_panel_2" class="ti-angle-down modal-panel-mobile__list-items-icon-plus " style="font-size: 16px;"></i>
                            </a>
                            <ul id="ti_panel_2_1" class="modal-panel-mobile__submenu-list ">
                                <li class="modal-panel-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/trang-thai/0')}}" class="modal-panel-mobile__submenu-list-items-link ">??ang Ra</a>
                                </li>
                                <li class="modal-panel-mobile__submenu-list-items ">
                                    <a href="{{URL::to('/trang-thai/1')}}" class="modal-panel-mobile__submenu-list-items-link ">Ho??n Th??nh</a>
                                </li>
                            </ul>
                        </li>
                        <li class="modal-panel-mobile__list-items ">
                            <a onclick="ti_panel_4()" class="modal-panel-mobile__list-items-link d-flex" style="justify-content: space-between;">
                                <div>
                                    <i class="ti-face-sad"></i>T??nh C??ch Nh??n V???t
                                </div>
                                <i id="ti_panel_4" class="ti-angle-down modal-panel-mobile__list-items-icon-plus " style="font-size: 16px;"></i>
                            </a>
                            <ul id="ti_panel_4_1" class="modal-panel-mobile__submenu-list ">
                                @foreach($tinhcach as $key => $val)
                                <li class="modal-panel-mobile__submenu-list-items ">
                                    <a href="{{url('tinh-cach-nhan-vat/'.$val->slug)}}" class="modal-panel-mobile__submenu-list-items-link ">{{$val->tentinhcach}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="modal-panel-mobile__list-items ">
                            <a onclick="ti_panel_5()" class="modal-panel-mobile__list-items-link d-flex" style="justify-content: space-between;">
                                <div>
                                    <i class="ti-map"></i>B???i C???nh Th??? Gi???i
                                </div>
                                <i id="ti_panel_5" class="ti-angle-down modal-panel-mobile__list-items-icon-plus " style="font-size: 16px;"></i>
                            </a>
                            <ul id="ti_panel_5_1" class="modal-panel-mobile__submenu-list ">
                                @foreach($thegioi as $key => $val)
                                <li class="modal-panel-mobile__submenu-list-items ">
                                    <a href="{{url('boi-canh-the-gioi/'.$val->slug)}}" class="modal-panel-mobile__submenu-list-items-link ">{{$val->tenthegioi}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="modal-panel-mobile__list-items ">
                            <a onclick="ti_panel_6()" class="modal-panel-mobile__list-items-link d-flex" style="justify-content: space-between;">
                                <div>
                                    <i class="ti-cloud"></i>L??u Ph??i
                                </div>
                                <i id="ti_panel_6" class="ti-angle-down modal-panel-mobile__list-items-icon-plus " style="font-size: 16px;"></i>
                            </a>
                            <ul id="ti_panel_6_1" class="modal-panel-mobile__submenu-list ">
                                @foreach($luuphai as $key => $val)
                                <li class="modal-panel-mobile__submenu-list-items ">
                                    <a href="{{url('luu-phai/'.$val->slug)}}" class="modal-panel-mobile__submenu-list-items-link ">{{$val->tenluuphai}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="modal-panel-mobile__list-items ">
                            <a onclick="ti_panel_7()" class="modal-panel-mobile__list-items-link d-flex" style="justify-content: space-between;">
                                <div>
                                    <i class="ti-eye"></i>Th??? Gi??c
                                </div>
                                <i id="ti_panel_7" class="ti-angle-down modal-panel-mobile__list-items-icon-plus " style="font-size: 16px;"></i>
                            </a>
                            <ul id="ti_panel_7_1" class="modal-panel-mobile__submenu-list ">
                                <li class="modal-panel-mobile__submenu-list-items ">
                                    <a href="{{url('thi-giac/0')}}" class="modal-panel-mobile__submenu-list-items-link ">Truy???n Nam</a>
                                </li>
                                <li class="modal-panel-mobile__submenu-list-items ">
                                    <a href="{{url('thi-giac/1')}}" class="modal-panel-mobile__submenu-list-items-link ">Truy???n N??? </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--  modal-cart--active -->

    </div>
    <script src="{{asset('public/assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('public/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('public/assets/js/slider.js')}}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 5000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }
        });
    </script>
    <script src="{{asset('public/assets/js/detail.js')}}"></script>
    <script src="{{asset('public/assets/js/mainx.js')}}"></script>

    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos >= currentScrollPos) {
                document.getElementById("header").style.top = "0px";
            } else {
                document.getElementById("header").style.top = "-91px";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
</body>

</html>