<?php

use Illuminate\Support\Facades\Session;

$ss_admin_name = Session::get('admin_name');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Truyen Convert</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('public/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('public/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('public/plugins/toastr/toastr.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public/dist/css/adminlte.min.css')}}">

    <link rel="icon" href="{{asset('public/uploads/logo/logo.wepb')}}" type="image/gif" sizes="100x100">

    <!-- cropper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="{{asset('public/assets/css/admin_css.css')}}">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed  sidebar-collapse">
    <div class="bg-min active ">
        <img src="{{asset('public/assets/images/rotage_img.jpg')}}" alt="">
    </div>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item" id="menu_btn">
                    <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link position-relative" href="{{route('mail')}}">
                        <i class="far fa-envelope"></i>
                        @if(count($mail_notify)>0)
                        <span class="admin_notify_icon"></span>
                        @endif
                    </a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{URL::to('admin/logout')}}" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> ????ng xu???t</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        @if (session('msg'))
        <div class=" alert-form">
            <div id="toast-container" class="toast-top-right">
                <div class="alert toast toast-success" aria-live="polite">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
                    <div class="toast-message"> {{ session('msg') }}</div>
                </div>
            </div>
        </div>
        @endif
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('home')}}" class="brand-link">
                <img src="{{asset('public/uploads/logo/logo.wepb')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Truy???n Convert</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item ">
                            <a href="{{route('home')}}" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Kh??ch h??ng</li>
                        <li class="nav-item ">
                            <a href="{{route('list_account')}}" class="nav-link ">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Danh s??ch kh??ch h??ng
                                </p>
                            </a>

                        </li>
                        <li class="nav-header">Slide</li>
                        <li class="nav-item ">
                            <a class="nav-link ">
                                <i class="nav-icon fab fa-accusoft"></i>
                                <p>
                                    Slide
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('slide.create')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m silde</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('slide.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch slide</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">Th??? Lo???i</li>
                        <li class="nav-item">
                            <a class="nav-link ">
                                <i class="nav-icon fab fa-strava"></i>
                                <p>
                                    Th??? lo???i
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('category.create')}}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m th??? lo???i</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('category.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh s??ch th??? lo???i</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">Ph?? duy???t truy???n</li>
                        <li class="nav-item">
                            <a href="{{route('approval')}}" class="nav-link position-relative">
                                <i class="nav-icon fas fa-handshake-slash"></i>
                                @if(count($approval_notify)>0)
                                <span class="admin_notify_icon"></span>
                                @endif
                                <p>
                                    Truy???n ch??? ph?? duy???t
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('solved')}}" class="nav-link ">
                                <i class="nav-icon far fa-handshake"></i>
                                <p>
                                    Truy???n ???? ph?? duy???t
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Nh??n (Tag)</li>
                        <li class="nav-item">
                            <a class="nav-link ">
                                <i class="nav-icon fas fa-user-secret"></i>
                                <p>
                                    T??nh c??ch nh??n v???t
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('personality.create')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Th??m t??nh c??ch nh??n v???t</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('personality.index')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Danh s??ch t??nh c??ch nh??n v???t</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">
                                <i class="nav-icon fas fa-globe-europe"></i>
                                <p>
                                    B???i c???nh th??? gi???i
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('world.create')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Th??m B???i c???nh th??? gi???i</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('world.index')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Danh s??ch b???i c???nh th??? gi???i</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">
                                <i class="nav-icon fas fa-vector-square"></i>
                                <p>
                                    L??u ph??i
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('sect.create')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Th??m l??u ph??i</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('sect.index')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Danh s??ch l??u ph??i</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">H?????ng d???n kh??ch h??ng</li>
                        <li class="nav-item">
                            <a class="nav-link ">
                                <i class="nav-icon far fa-question-circle"></i>
                                <p>
                                    C??c c??u h???i th?????ng g???p
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('faqs.create')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Th??m c??u h???i th?????ng g???p</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('faqs.index')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Danh s??ch c??u h???i th?????ng g???p</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    H?????ng d???n t??c gi???
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('author-guide.create')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Th??m h?????ng d???n t??c gi???</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('author-guide.index')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Danh s??ch h?????ng d???n t??c gi???</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">
                                <i class="nav-icon fab fa-instalod"></i>
                                <p>
                                    Nh??n vi??n h?????ng d???n
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('staff-guide.create')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Th??m nh??n vi??n h?????ng d???n</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('staff-guide.index')}}" class="nav-link d-flex">
                                        <div>
                                            <i class="far fa-circle nav-icon"></i>
                                        </div>
                                        <div>
                                            <p>Danh s??ch nh??n vi??n h?????ng d???n</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer text-center">
            <div><?php echo date('Y') ?> ?? truyencv.xyz</div>
        </footer>
        <!-- cropper -->
        <div class="modal fade bd-example-modal-lg imagecrop" id="model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="img-container">
                            <div class="row">
                                <div class="col-md-11">
                                    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary crop" id="crop">Crop</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('public/dist/js/adminlte.js')}}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{asset('public/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('public/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('public/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{asset('public/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('public/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- SweetAlert2 -->
    <script src="{{asset('public/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <!-- Toastr -->
    <script src="{{asset('public/plugins/toastr/toastr.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('public/dist/js/adminlte.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('public/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('public/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('public/dist/js/pages/dashboard2.js')}}"></script>
    <!-- cropper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.js"></script>
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tbl_admin').DataTable();
        });
    </script>
    <script>
        CKEDITOR.replace('cautraloi');
    </script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
    <script>
        var $modal = $('.imagecrop');
        var image = document.getElementById('image');

        var cropper;
        $("body").on("change", "#imageUpload", function(e) {
            var files = e.target.files;
            var done = function(url) {
                image.src = url;
                $modal.modal('show');
            };
            var reader;
            var file;
            var url;
            if (files && files.length > 0) {
                file = files[0];
                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function(e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        $modal.on('shown.bs.modal', function() {
            cropper = new Cropper(image, {
                aspectRatio: 5,
                viewMode: 1,
            });
        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });
        $("body").on("click", "#crop", function() {
            canvas = cropper.getCroppedCanvas({
                width: 2000,
                height: 500,
            });
            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    $('#base64image').val(base64data);
                    document.getElementById('imagePreview').style.backgroundImage = "url(" + base64data + ")";
                    $modal.modal('hide');
                }
            });
        });
    </script>

    <script type="text/javascript">
        function ChangeToSlug() {
            var slug;

            //L???y text t??? th??? input title 
            slug = document.getElementById("name_slug").value;
            slug = slug.toLowerCase();
            //?????i k?? t??? c?? d???u th??nh kh??ng d???u
            slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
            slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
            slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
            slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
            slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
            slug = slug.replace(/??|???|???|???|???/gi, 'y');
            slug = slug.replace(/??/gi, 'd');
            //X??a c??c k?? t??? ?????t bi???t
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
            slug = slug.replace(/ /gi, "-");
            //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
            //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox c?? id ???slug???
            document.getElementById('convert_slug').value = slug;
        }
    </script>
    <script>
        $('#menu_btn').click(function() {
            $('body').toggleClass('sidebar-collapse')
        })
    </script>
    <script>
        $(document).ready(function() {

            var _token = $('input[name="_token"]').val()

            function load_approval() {
                $.ajax({
                    url: "{{url('/admin/approval/')}}",
                    method: "POST",
                    data: {
                        _token: _token
                    },
                    success: function(data) {
                        $('#show_tbl_approval').html(data)
                    }
                })
            }
            load_approval()

            $(document).on('click', '.approval_btn', function(e) {
                e.preventDefault()

                var truyen_id = $(this).data('truyen_id')
                // alert(truyen_id)
                $.ajax({
                    url: "{{url('/admin/approval/update')}}",
                    method: "POST",
                    data: {
                        truyen_id: truyen_id,
                        _token: _token
                    },
                    success: function(data) {
                        var html = '';
                        html += '<div class=" alert-form"><div id="toast-container" class="toast-top-right">'
                        html += '<div class="alert toast toast-success" aria-live="polite">'
                        html += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>'
                        html += '<div class="toast-message"> Duy???t th??nh c??ng!</div>'
                        html += '</div>'
                        html += '</div>'
                        html += '</div>'
                        $('#alert').html(html)
                        $('.alert-form').fadeOut(5000)

                        load_approval()
                    }
                })
            })

            $(document).on('click', '.delete_approval_btn', function(e) {
                e.preventDefault()
                var truyen_id = $(this).data('truyen_id')
                // alert(truyen_id)
                swal.fire({
                    title: 'Are you sure?',
                    html: 'You want to DELETE ',
                    showCancelButton: true,
                    showCloseButton: true,
                    cancelButtonText: 'Cancel',
                    confirmButtonText: 'Yes, Delete',
                    cancelButtonColor: '#d33',
                    confirmButtonColor: '#556ee6',
                    width: 300,
                    allowOutsideClick: false
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: "{{url('/admin/approval/delete')}}",
                            method: "POST",
                            data: {
                                truyen_id: truyen_id,
                                _token: _token
                            },
                            success: function(data) {
                                var html = '';
                                html += '<div class=" alert-form"><div id="toast-container" class="toast-top-right">'
                                html += '<div class="alert toast toast-success" aria-live="polite">'
                                html += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>'
                                html += '<div class="toast-message"> X??a th??nh c??ng!</div>'
                                html += '</div>'
                                html += '</div>'
                                html += '</div>'
                                $('#alert').html(html)
                                $('.alert-form').fadeOut(5000)
                                load_approval()
                            }
                        })
                    }
                })


            })
        })
    </script>
    <script>
        $(document).ready(function() {

            var _token = $('input[name="_token"]').val()

            function load_solved() {
                $.ajax({
                    url: "{{url('/admin/solved/')}}",
                    method: "POST",
                    data: {
                        _token: _token
                    },
                    success: function(data) {
                        $('#show_tbl_solved').html(data)
                    }
                })
            }
            load_solved()

            $(document).on('click', '.solved_btn', function(e) {
                e.preventDefault()
                var truyen_id = $(this).data('truyen_id')
                // alert(truyen_id)
                $.ajax({
                    url: "{{url('/admin/solved/update')}}",
                    method: "POST",
                    data: {
                        truyen_id: truyen_id,
                        _token: _token
                    },
                    success: function(data) {
                        var html = '';
                        html += '<div class=" alert-form"><div id="toast-container" class="toast-top-right">'
                        html += '<div class="alert toast toast-success" aria-live="polite">'
                        html += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>'
                        html += '<div class="toast-message"> B??? duy???t th??nh c??ng!</div>'
                        html += '</div>'
                        html += '</div>'
                        html += '</div>'
                        $('#alert').html(html)
                        $('.alert-form').fadeOut(5000)

                        load_solved()
                    }
                })
            })

            $(document).on('click', '.delete_solved_btn', function(e) {
                e.preventDefault()
                var truyen_id = $(this).data('truyen_id')
                // alert(truyen_id)
                swal.fire({
                    title: 'Are you sure?',
                    html: 'You want to DELETE ',
                    showCancelButton: true,
                    showCloseButton: true,
                    cancelButtonText: 'Cancel',
                    confirmButtonText: 'Yes, Delete',
                    cancelButtonColor: '#d33',
                    confirmButtonColor: '#556ee6',
                    width: 300,
                    allowOutsideClick: false
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: "{{url('/admin/solved/delete')}}",
                            method: "POST",
                            data: {
                                truyen_id: truyen_id,
                                _token: _token
                            },
                            success: function(data) {
                                var html = '';
                                html += '<div class=" alert-form"><div id="toast-container" class="toast-top-right">'
                                html += '<div class="alert toast toast-success" aria-live="polite">'
                                html += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>'
                                html += '<div class="toast-message"> X??a th??nh c??ng!</div>'
                                html += '</div>'
                                html += '</div>'
                                html += '</div>'
                                $('#alert').html(html)
                                $('.alert-form').fadeOut(5000)
                                load_approval()
                            }
                        })
                    }
                })
            })
        })
    </script>
    <!-- Toastr -->
    <script>
        $(document).ready(function() {
            $('.alert-form').fadeOut(7000)

        })
    </script>
</body>

</html>