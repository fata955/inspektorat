<?php
session_start();
include 'component/header.view.php';

include 'component/pengaturantampilan.view.php';

?>

<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
<div class="page">
    <?php
    include 'component/header2.view.php';
    ?>
    <!--End modal -->
    <!-- Start::app-sidebar -->
    <aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="index.html" class="header-logo">
                <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                <img src="assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                <img src="assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
            </a>
        </div>
        <!-- End::main-sidebar-header -->
        <?php
        include 'component/sidebar.view.php';
        ?>

    </aside>
    <!-- End::app-sidebar -->

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <div class="my-auto">
                    <h5 class="page-title fs-21 mb-1">Halaman List</h5>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Menu Utama</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input Halaman</li>
                        </ol>
                    </nav>
                </div>

                <div class="d-flex my-xl-auto right-content align-items-center">
                    <div class="pe-1 mb-xl-0">
                        <!-- <a href="#modaldemo8insert" id="tambah" class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-fall" data-bs-toggle="modal">
                            Tambah
                        </a> -->
                        <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8insert" id="tambah">tambah</a>
                        <!-- <button type="button" class="btn btn-info btn-icon me-2 btn-b">
                            <i class="bx bx-file-blank"></i></i>
                         
                        </button> -->
                    </div>

                </div>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                    <div class="card">
                        <!-- <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-0">USERS TABLE</h4>
                                <a href="javascript:void(0);" class="tx-inverse" data-bs-toggle="dropdown"><i
                                        class="mdi mdi-dots-horizontal text-gray"></i></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Another
                                        Action</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Something Else
                                        Here</a>
                                </div>
                            </div>
                            <p class="fs-12 text-gray-5 mb-2">Example of Valex Simple Table. <a href="">Learn
                                    more</a></p>
                        </div> -->
                        <div class="card-body">
                            <div class="table-responsive border border-bottom-0 userlist-table">
                                <table class="table card-table table-vcenter text-nowrap mb-0" id="mytablehalaman">
                                    <thead>
                                        <tr>

                                            <th><span>No</span></th>
                                            <th><span>Judul</span></th>
                                            <th><span>Isi</span></th>
                                            <!-- <th><span>Status</span></th> -->
                                            <!-- <th><span>tanggal</span></th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <!-- <ul class="pagination mt-4 mb-0 float-end flex-wrap">
                                <li class="page-item page-prev disabled">
                                    <a class="page-link" href="javascript:void(0);" tabindex="-1">Prev</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item page-next">
                                    <a class="page-link" href="javascript:void(0);">Next</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>
            <!--End::row-1 -->


        </div>
    </div>


    <!-- End::app-content -->



    <?php
    include 'component/footer.view.php';
    ?>


    <script src="/admin/assets/ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function() {

            $('#modaldemo8insert').on('shown.bs.modal', function() {
                CKEDITOR.replace('isi', {
                    filebrowserBrowseUrl: 'assets/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: 'assets/ckfinder/ckfinder.html?Type=Images',
                    filebrowserFlashBrowseUrl: 'assets/ckfinder/ckfinder.html?Type=Flash',
                    filebrowserUploadUrl: 'assets/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: 'assets/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: 'assets/ckfinder/core/connector/aspx/connector.aspx?command=QuickUpload&type=Flash'
                });



            });

            fetchData();
            kosong();

            let table = new DataTable("#mytablehalaman");

            // function to fetch data from database
            function fetchData() {

                $.ajax({
                    url: "proses/page/halaman.php?action=fetchData",
                    type: "POST",
                    dataType: "json",
                    success: function(response) {
                        var data = response.data;
                        table.clear().draw();
                        var counter = 1;
                        $.each(data, function(index, value) {
                            table.row
                                .add([
                                    counter,
                                    value.judul,
                                    value.isi,
                                    '<button type="button" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8edit" class="btn btn-sm btn-info btn-b  editBtn" value="' +
                                    value.id +
                                    '"><i class="las la-pen"></i></button>' +
                                    '<Button type="button" class="btn btn-sm btn-danger deleteBtn" value="' +
                                    value.id +
                                    '"><i class="las la-trash"></i></Button>'
                                ])

                                .draw(false);
                            counter++;
                        });
                    }
                });
            }

            function kosong() {
                $("#judul").val('');
                $("#isi").val('');
                $("#error").hide();
            }
            $("#tambah").on("click", function() {
                $('#modaldemo8insert').on('shown.bs.modal', function() {
                    CKEDITOR.replace('isi', {
                        filebrowserBrowserUrl: '../../assets/ckfinder/ckfinder.html',
                        filebrowserBrowserUrl: '../../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                    });
                });
            })
            // function to insert data to database
            $("#form_inputhalaman").on("submit", function(e) {
                var isi = $('textarea#isi').value();
                // var isi = $("#isi").val('');
                window.location.replace("/admin/halaman");
                // console.log(isi);
                e.preventDefault();
                $.ajax({
                    url: "proses/page/halaman.php?action=insertData",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: true,
                    processData: false,
                    success: function(response) {
                        var response = JSON.parse(response);
                        if (response.statusCode == 200) {
                            // alert('Data Sukses tersimpan');
                            // $('#modaldemo8insert').fadeOut("close");
                            // window.location.replace("/admin/inputmenu");
                            fetchData();
                            kosong();
                        } else if (response.statusCode == 500) {
                            alert('Data Harus jpg,png dan jpeg');
                            fetchData();
                            //   $(".preview_img").attr("src", "images/default_profile.jpg");
                            // $("#errorToast").toast("show");
                            // $("#errorMsg").html(response.message);
                        } else if (response.statusCode == 400) {
                            $("#simpan").removeAttr("disabled");
                            Swal.fire("!", "Data Masih Kosong", "Warning");
                            // $("#errorToast").toast("show");
                            // $("#errorMsg").html(response.message);
                        } else if (response.statusCode == 800) {
                            $("#error").show();
                            alert('Data Sudah Ada yang sama')
                            // window.location.replace("/admin/inputmenu");
                            fetchData();

                            // $("#simpan").removeAttr("disabled");
                            // Swal.fire("!", "Data Masih Kosong", "Warning");
                            // $("#errorToast").toast("show");
                            kosong();
                            // $("#errorMsg").html(response.message);
                        }

                    }
                });
            });

            // function to edit data
            $("#mytablehalaman").on("click", ".editBtn", function() {
                var id = $(this).val();
                // console.log(id);
                $.ajax({
                    url: "proses/page/halaman.php?action=fetchSingle",
                    type: "POST",
                    dataType: "json",
                    data: {
                        id: id
                    },
                    success: function(response) {
                        var data = response.data;

                        $("#modaldemo8edit #editForm #id").val(data.id);
                        $("#modaldemo8edit #editForm input[name='judul']").val(data.judul_berita);
                        $("#modaldemo8edit #editForm textarea[name='isi']").val(data.isi);
                        $("#modaldemo8edit").modal("show");

                    }
                });
            });

            // function to update data in database
            $("#editForm").on("submit", function(e) {
                // $("#editBtn").attr("disabled");
                e.preventDefault();
                $.ajax({
                    url: "proses/page/halaman.php?action=updateData",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        var response = JSON.parse(response);
                        if (response.statusCode == 200) {
                            alert('Data Sukses terupdate')
                            // Swal.fire("!", "Data Sukses Terupdate", "success");
                            fetchData();
                            kosong();
                            // $("#offcanvasEditUser").modal("hide");
                        } else if (response.statusCode == 500) {
                            alert('File Yang Dimasukan Harus JPG atau PNG');
                            kosong();
                        } else if (response.statusCode == 400) {
                            alert('isi Yang Kosong');
                        }
                    }
                });
            });

            // function to delete data
            $("#mytablehalaman").on("click", ".deleteBtn", function() {
                if (confirm("Apakah yakin Menghapus Data Ini?")) {
                    var id = $(this).val();
                    //   var delete_image = $(this).closest("td").find(".delete_image").val();
                    $.ajax({
                        url: "proses/page/halaman.php?action=deleteData",
                        type: "POST",
                        dataType: "json",
                        data: {
                            id
                            //   delete_image
                        },
                        success: function(response) {
                            if (response.statusCode == 200) {
                                alert('Data Sukses Terhapus')
                                fetchData();

                            } else if (response.statusCode == 500) {
                                alert('Penghapusan data error, Jaringan Anda');
                            }
                        }
                    });
                }
            });
        });
    </script>


    <div class="modal fade" id="modaldemo8insert" tabindex="-1" role="dialog">

        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <form action="proses/page/halaman.php?action=insertData" method="POST" id="form_inputnews" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h6 class="modal-title">Form Input Berita</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="Judul Berita" name="judul" id="judul">
                        </div><br>
                        <div class="input-group">
                            <textarea class="form-control" name="isi" id="isi"></textarea>
                        </div><br>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="simpan">
                            Simpan
                        </button>

                    </div>
                </form>
            </div>
        </div>

    </div>