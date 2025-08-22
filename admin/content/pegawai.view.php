<?php
session_start();
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
                    <h5 class="page-title fs-21 mb-1">Pegawai List</h5>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Menu Utama</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input Pegawai</li>
                        </ol>
                    </nav>
                </div>

                <div class="d-flex my-xl-auto right-content align-items-center">
                    <div class="pe-1 mb-xl-0">
                        <a href="#modaldemo8insert" id="tambah" class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-fall" data-bs-toggle="modal">
                            Tambah
                        </a>
                        <!-- <a class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8insert" id="tambah">tambah</a> -->
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
                        <div class="card-body">
                            <div class="table-responsive border border-bottom-0 userlist-table">
                                <table class="table card-table table-vcenter text-nowrap mb-0" id="mytablepegawai">
                                    <thead>
                                        <tr>

                                            <th><span>No</span></th>
                                            <th><span>Nama</span></th>
                                            <th><span>Tempat</span></th>
                                            <th><span>Tanggal Lahir</span></th>
                                            <th><span>Jenis Kelamin</span></th>
                                            <th><span>Agama</span></th>
                                            <th><span>Nip</span></th>
                                            <th><span>Pangkat</span></th>
                                            <th><span>Jabatan</span></th>
                                            <th><span>Gambar</span></th>
                                            <th><span>Status</span></th>
                                            <th><span>Urutan</span></th>
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
    <div class="modal fade" id="modaldemo8insert">

        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Form Input Pegawai</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="proses/pegawai/executepegawai.php?action=insertData" method="post" id="form_inputpegawai" enctype="multipart/form-data">
                    <div class="modal-body text-start">
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="Nama Pegawai" name="namapegawai" id="namapegawai">
                        </div><br>
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="Tempat & Tanggal Lahir" name="tl1" id="tl1">
                            <input type="DATE" class="form-control " placeholder="" name="tl2" id="tl2">
                        </div><br>
                        <div class="input-group">
                            <select class="form-control" class="form-select rounded-pill" aria-label="jeniskelamin" name="jeniskelamin" id="jeniskelamin">
                                <option value="">---JENIS KELAMIN---</option>';
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <select class="form-control" class="form-select rounded-pill" aria-label="agama" name="agama" id="agama">
                                <option value="">PILIH AGAMA</option>';
                                <option value="ISLAM">ISLAM</option>
                                <option value="KRISTEN">KRISTEN</option>
                                <option value="KHATOLIK">KHATOLIK</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="NIP Pegawai" name="nippegawai" id="nippegawai">
                        </div><br>
                        <div class="input-group">
                            <select class="form-control" class="form-select rounded-pill" aria-label="jabatan" name="jabatan" id="jabatan">
                                <option value="">PILIH JABATAN</option>';
                                <?php
                                // include '../../lib/conn.php';
                                $menu = mysqli_query($koneksi, "SELECT * from jabatan");
                                while ($fetch = mysqli_fetch_array($menu)) {
                                    echo '<option value="' . $fetch['id'] . '">' . $fetch['nama_jabatan'] . '</option>';
                                }
                                ?>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <select class="form-control" class="form-select rounded-pill" aria-label="Default select example" name="pangkat" id="pangkat">
                                <option value="">PILIH PANGKAT</option>';
                                <?php
                                // include '../../lib/conn.php';
                                $pangkat = mysqli_query($koneksi, "SELECT * from pangkat");
                                while ($fetch = mysqli_fetch_array($pangkat)) {
                                    echo '<option value="' . $fetch['id'] . '">' . $fetch['jenis'] . "&nbsp;"  . $fetch['golongan'] . $fetch['ruang'] . '</option>';
                                }
                                ?>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <input type="file" class="form-control form-control-sm" name="filegambar" id="filegambar">
                        </div><br>
                        <div class="input-group">
                            <select class="form-control" class="form-select rounded-pill" aria-label="status" name="status" id="status">
                                <option value="">---STATUS JABATAN---</option>';
                                <option value="aktif">AKTIF</option>
                                <option value="nonaktif">NON AKTIF</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="Urutan" name="urutan" id="urutan">
                        </div><br>


                        <!-- //MESSAGE -->

                        <div class="alert custom-alert1 alert-secondary" id="error">
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
                            <div class="text-center px-5 pb-0">
                                <svg class="custom-alert-icon svg-secondary" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                </svg>
                                <h5>Confirmed</h5>
                                <p class="">This alert is created to just show the confirmation message.</p>
                                <div class="">
                                    <button class="btn btn-sm btn-secondary m-1">Close</button>
                                </div>
                            </div>
                        </div>
                        <!-- ENDMESSAGE -->


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="simpan">
                            Simpan
                        </button>
                        <!-- <button type="button" class="btn btn-light" data-bs-dismiss="modal" >Close</button> -->
                    </div>
                </form>
            </div>
        </div>

    </div>


    <div class="modal fade" id="modaldemo8edit">

        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Form Edit Pegawai</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button> -->
                 <form  method="post" id="editForm" enctype="multipart/form-data">
                    <div class="modal-body text-start">
                        <input type="hidden" name="id" id="id">
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="Nama Pegawai" name="namapegawai1" id="namapegawai1">
                        </div><br>
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="Tempat & Tanggal Lahir" name="tl11" id="tl11">

                            <input type="DATE" class="form-control " placeholder="" name="tl21" id="tl21">
                        </div><br>
                        <div class="input-group">
                            <select class="form-control" class="form-select rounded-pill" aria-label="Default select example" name="jeniskelamin1" id="jeniskelamin1">
                                <option value="">---JENIS KELAMIN---</option>';
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <select class="form-control" class="form-select rounded-pill" aria-label="Default select example" name="agama1" id="agama1">
                                <option value="">PILIH AGAMA</option>';
                                <option value="ISLAM">ISLAM</option>
                                <option value="KRISTEN">KRISTEN</option>
                                <option value="KHATOLIK">KHATOLIK</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="NIP Pegawai" name="nippegawai1" id="nippegawai1">
                        </div><br>
                        <div class="input-group">
                            <select class="form-control" class="form-select rounded-pill" aria-label="Default select example" name="jabatan1" id="jabatan1">
                                <option value="">PILIH JABATAN</option>';
                                <?php
                                // include '../../lib/conn.php';
                                $menu = mysqli_query($koneksi, "SELECT * from jabatan");
                                while ($fetch = mysqli_fetch_array($menu)) {
                                    echo '<option value="' . $fetch['id'] . '">' . $fetch['nama_jabatan'] . '</option>';
                                }
                                ?>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <select class="form-control" class="form-select rounded-pill" aria-label="Default select example" name="pangkat1" id="pangkat1">
                                <option value="">PILIH PANGKAT</option>';
                                <?php
                                // include '../../lib/conn.php';
                                $pangkat = mysqli_query($koneksi, "SELECT * from pangkat");
                                while ($fetch = mysqli_fetch_array($pangkat)) {
                                    echo '<option value="' . $fetch['id'] . '">' . $fetch['jenis'] . "&nbsp;"  . $fetch['golongan'] . $fetch['ruang'] . '</option>';
                                }
                                ?>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <input type="file" class="form-control form-control-sm" name="filegambar11" id="filegambar11">
                        </div><br>
                        <div class="input-group">
                            <img src="" width="300" class="thumbnail" name="filegmbr" id="filegmbr" width="100%" height="100%">
                        </div><br>
                        <div class="input-group">
                            <select class="form-control" class="form-select rounded-pill" aria-label="Default select example" name="status1" id="status1">
                                <option value="">---STATUS JABATAN---</option>';
                                <option value="aktif">AKTIF</option>
                                <option value="nonaktif">NON AKTIF</option>
                            </select>
                        </div><br>
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="urutan" name="urutan1" id="urutan1">
                        </div><br>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="update">
                            Update
                        </button>
                        <!-- <button class="btn btn-light" data-bs-dismiss="modal" >Close</button> -->
                    </div>
                </form>
            </div>
        </div>

    </div>


    <script>
        $(document).ready(function() {
            
            let table = new DataTable("#mytablepegawai");
            fetchData();
            kosong();

            

            // function to fetch data from database
            function fetchData() {
                $.ajax({
                    url: "proses/pegawai/executepegawai.php?action=fetchData",
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
                                    value.nama,
                                    value.tempat,
                                    value.tanggal,
                                    value.jk,
                                    value.agama,
                                    value.nip,
                                    value.pangkat,
                                    value.jabatan,
                                    '<img src="imagepegawai/' + value.gambar + '" alt="img" width="100" height="100">',
                                    // value.gambar,
                                    value.status,
                                    value.urutan,
                                    '<button type="button" data-bs-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8edit" class="btn btn-sm btn-info btn-b  editBtn" value="' +
                                    value.id +
                                    '"><i class="las la-pen"></i></button>' +
                                    '<Button type="button" class="btn btn-sm btn-danger deleteBtn" value="' +
                                    value.id +
                                    '"><i class="las la-trash"></i></Button>'
                                ])
                                .draw(false);
                            counter++;
                            // data.innerhtml();
                        });
                    }
                });
            }

            function kosong() {
                $("#namapegawai").val('');
                $("#tl1").val('');
                $("#tl2").val('');
                $("#jeniskelamin").val('');
                $("#agama").val('');
                $("#nippegawai").val('');
                $("#jabatan").val('');
                $("#pangkat").val('');
                $("#status").val('');
                $("#urutan").val('');
                $("#error").hide();
            }
            $("#tambah").on("click", function() {
                kosong();
            })
            // function to insert data to database
            $("#form_inputpegawai").on("submit", function(e) {
                // $("#insertBtn").attr("disabled", "disabled");
                e.preventDefault();
                $.ajax({
                    url: "proses/pegawai/executepegawai.php?action=insertData",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        var response = JSON.parse(response);
                        if (response.statusCode == 200) {
                            alert('Data Sukses tersimpan');
                            // $('#modaldemo8insert').fadeOut("close");
                            // window.location.replace("/admin/inputmenu");
                            fetchData();
                            kosong();
                        } else if (response.statusCode == 500) {
                            $("#offcanvasAddUser").offcanvas("hide");
                            $("#simpan").removeAttr("disabled");
                            $("#insertForm")[0].reset();
                            Swal.fire("!", "Data Erro Disimpan", "Warning");
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
            $("#mytablepegawai").on("click", ".editBtn", function() {
                var id = $(this).val();
                // console.log(id);
                $.ajax({
                    url: "proses/pegawai/executepegawai.php?action=fetchSingle",
                    type: "POST",
                    dataType: "json",
                    data: {
                        id: id
                    },
                    success: function(response) {
                        var data = response.data;

                        $(" #modaldemo8edit #editForm #id").val(data.id);
                        $("#modaldemo8edit #editForm input[name='namapegawai1']").val(data.nama);
                        $("#modaldemo8edit #editForm input[name='tl11']").val(data.tempat);
                        $("#modaldemo8edit #editForm input[name='tl21']").val(data.tanggal);
                        $("#modaldemo8edit #editForm select[name='jeniskelamin1']").val(data.jk);
                        $("#modaldemo8edit #editForm select[name='agama1']").val(data.agama);
                        $("#modaldemo8edit #editForm input[name='nippegawai1']").val(data.nip);
                        $("#modaldemo8edit #editForm select[name='jabatan1']").val(data.jabatan);
                        $("#modaldemo8edit #editForm select[name='pangkat1']").val(data.pangkat);
                        $("#modaldemo8edit #editForm select[name='status1']").val(data.status);
                        $("#modaldemo8edit #editForm img[name='filegmbr']").attr("src", 'imagepegawai/' + data.gambar);
                        // $("#modaldemo8edit #editForm input[name='link']").val(data.link);
                        $("#modaldemo8edit #editForm input[name='urutan1']").val(data.urutan);

                        $("#modaldemo8edit").modal("show");

                    }
                });
            });

            // function to update data in database
            $("#editForm").on("submit", function(e) {
                // $("#editBtn").attr("disabled");
                e.preventDefault();
                $.ajax({
                    url: "proses/pegawai/executepegawai.php?action=updateData",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        var response = JSON.parse(response);
                        if (response.statusCode == 200) {
                            // alert('Data Sukses terupdate')
                            // Swal.fire("!", "Data Sukses Terupdate", "success");
                            window.location.replace("/admin/pegawai");
                            fetchData();
                            kosong();
                            
                            // $("#offcanvasEditUser").modal("hide");
                        } else if (response.statusCode == 500) {
                            alert('format bermasalah');
                            kosong();
                        } else if (response.statusCode == 400) {
                            alert('isi Yang Kosong');
                        }
                         else if (response.statusCode == 302) {
                           fetchData();
                        }
                    }
                });
            });

            // function to delete data
            $("#mytablepegawai").on("click", ".deleteBtn", function() {
                if (confirm("Apakah yakin Menghapus Data Ini?")) {
                    var id = $(this).val();
                    //   var delete_image = $(this).closest("td").find(".delete_image").val();
                    $.ajax({
                        url: "proses/pegawai/executepegawai.php?action=deleteData",
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