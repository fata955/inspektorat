<?php
include 'component/header.view.php';
include 'component/pengaturantampilan.view.php';

?>
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
                    <h5 class="page-title fs-21 mb-1">Menu List</h5>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Menu Utama</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input Menu</li>
                        </ol>
                    </nav>
                </div>

                <div class="d-flex my-xl-auto right-content align-items-center">
                    <div class="pe-1 mb-xl-0">
                        <a href="#modaldemo8insert" class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-left" data-bs-toggle="modal">
                            Tambah
                        </a>
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
                                <table class="table card-table table-vcenter text-nowrap mb-0" id="mytablemenu">
                                    <thead>
                                        <tr>

                                            <th><span>No</span></th>
                                            <th><span>Judul Menu</span></th>
                                            <th><span>Link</span></th>
                                            <th><span>Urutan</span></th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr>
                                            <td>01</td>
                                            <td>
                                                Beranda
                                            </td>
                                            <td>
                                                /
                                            </td>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                            
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b" data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                                    <i class="las la-pen"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                    <i class="las la-trash"></i>
                                                </a>
                                            </td>
                                        </tr> -->
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
    <div class="modal fade" id="modaldemo8insert">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <div class="modal-title">
                        <!-- <h1>Input Menu</h1> -->
                    </div>
                    <div class="modal-body text-start">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control " placeholder="Judul Menu" name="judul_menu">
                            </div><br>
                            <div class="input-group">
                                <input type="text" class="form-control " placeholder="Isi Link" name="link_menu">
                            </div><br>
                            <div class="input-group">
                                <input type="text" class="form-control " placeholder="Isi Urutan Menu" name="urutan_menu">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" id="simpan">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
    include 'component/footer.view.php';
    ?>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="success" class="toast colored-toast bg-primary-transparent text-secondary" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header bg-secondary text-fixed-white">
                <img class="bd-placeholder-img rounded me-2" src="assets/images/brand-logos/toggle-white.png" alt="...">
                <strong class="me-auto">Success</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Data Sukses Tersimpan
            </div>
        </div>
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="error" class="toast colored-toast bg-primary-transparent text-secondary" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header bg-secondary text-fixed-white">
                <img class="bd-placeholder-img rounded me-2" src="assets/images/brand-logos/toggle-white.png" alt="...">
                <strong class="me-auto">Success</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Data Error
            </div>
        </div>
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="kosong" class="toast colored-toast bg-primary-transparent text-secondary" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div class="toast-header bg-secondary text-fixed-white">
                <img class="bd-placeholder-img rounded me-2" src="assets/images/brand-logos/toggle-white.png" alt="...">
                <strong class="me-auto">Success</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Data Sukses Tersimpan
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            fetchData();

            let table = new DataTable("#mytablemenu");
            $("#success").toast("show");
            // function to fetch data from database
            function fetchData() {
                $.ajax({
                    url: "proses/menu/executemenu.php?action=fetchData",
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
                                    value.link,
                                    value.urutan,
                                    '<Button type="button" class="btn btn-sm btn-info btn-b  editBtn" value="' +
                                    value.id +
                                    '"><i class="las la-pen"></i></Button>' +
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

            // function to insert data to database
            $("#topleftToastBtn").on("submit", function(e) {
                // $("#insertBtn").attr("disabled", "disabled");
                e.preventDefault();
                $.ajax({
                    url: "proses/menu/executemenu.php?action=insertData",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        var response = JSON.parse(response);
                        if (response.statusCode == 200) {
                            $("#offcanvasAddUser").offcanvas("hide");
                            $("#insertBtn").removeAttr("disabled");
                            $("#insertForm")[0].reset();
                            Swal.fire("!", "Data Sukses Tersimpan", "success");
                            fetchData();
                        } else if (response.statusCode == 500) {
                            $("#offcanvasAddUser").offcanvas("hide");
                            $("#insertBtn").removeAttr("disabled");
                            $("#insertForm")[0].reset();
                            Swal.fire("!", "Data Erro Disimpan", "Warning");
                            fetchData();
                            //   $(".preview_img").attr("src", "images/default_profile.jpg");
                            // $("#errorToast").toast("show");
                            // $("#errorMsg").html(response.message);
                        } else if (response.statusCode == 400) {
                            $("#insertBtn").removeAttr("disabled");
                            Swal.fire("!", "Data Masih Kosong", "Warning");
                            // $("#errorToast").toast("show");
                            // $("#errorMsg").html(response.message);
                        }
                    }
                });
            });

            // function to edit data
            $("#mytablemenu").on("click", ".editBtn", function() {
                var id = $(this).val();
                $.ajax({
                    url: "proses/opd/executeopd.php?action=fetchSingle",
                    type: "POST",
                    dataType: "json",
                    data: {
                        id: id
                    },
                    success: function(response) {
                        var data = response.data;
                        $("#editForm #id").val(data.id);
                        $("#editForm input[name='idsipd']").val(data.id_sipd);
                        $("#editForm input[name='namaopd']").val(data.nama_opd);
                        $("#editForm input[name='kodeopd']").val(data.kode_skpd);
                        // $("#editForm select[name='country']").val(data.country);
                        // $("#editForm .preview_img").attr("src", "uploads/" + data.image + "");
                        // $("#editForm #image_old").val(data.image);
                        // if (data.gender === "male") {
                        //   $("#editForm input[name='gender'][value='male']").attr("checked", true);
                        // } else if(data.gender === "female") {
                        //   $("#editForm input[name='gender'][value='female']").attr("checked", true);
                        // }
                        // show the edit user offcanvas
                        $("#offcanvasEditUser").modal("show");
                    }
                });
            });

            // function to update data in database
            $("#editForm").on("submit", function(e) {
                $("#editBtn").attr("disabled");
                e.preventDefault();
                $.ajax({
                    url: "proses/opd/executeopd.php?action=updateData",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        var response = JSON.parse(response);
                        if (response.statusCode == 200) {
                            Swal.fire("!", "Data Sukses Terupdate", "success");
                            fetchData();
                            $("#offcanvasEditUser").modal("hide");
                        } else if (response.statusCode == 500) {
                            $("#offcanvasEditUser").offcanvas("hide");
                            $("#editBtn").removeAttr("disabled");
                            $("#editForm")[0].reset();
                            //   $(".preview_img").attr("src", "images/default_profile.jpg");
                            $("#errorToast").toast("show");
                            $("#errorMsg").html(response.message);
                        } else if (response.statusCode == 400) {
                            // $("#editBtn").removeAttr("disabled");
                            $("#errorToast").toast("show");
                            $("#errorMsg").html(response.message);
                        }
                    }
                });
            });

            // function to delete data
            $("#myTableopd").on("click", ".deleteBtn", function() {
                if (confirm("Apakah yakin Menghapus Data Ini?")) {
                    var id = $(this).val();
                    //   var delete_image = $(this).closest("td").find(".delete_image").val();
                    $.ajax({
                        url: "proses/opd/executeopd.php?action=deleteData",
                        type: "POST",
                        dataType: "json",
                        data: {
                            id
                            //   delete_image
                        },
                        success: function(response) {
                            if (response.statusCode == 200) {
                                fetchData();
                                $("#successToast").toast("show");
                                $("#successMsg").html(response.message);
                            } else if (response.statusCode == 500) {
                                $("#errorToast").toast("show");
                                $("#errorMsg").html(response.message);
                            }
                        }
                    });
                }
            });
        });
    </script>