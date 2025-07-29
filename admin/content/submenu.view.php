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
                    <h5 class="page-title fs-21 mb-1">Sub Menu List</h5>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Sub Menu Utama</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input SubMenu</li>
                        </ol>
                    </nav>
                </div>

                <div class="d-flex my-xl-auto right-content align-items-center">
                    <div class="pe-1 mb-xl-0">
                        <a href="#modaldemo8" class="modal-effect btn btn-primary d-grid mb-3" data-bs-effect="effect-rotate-left" data-bs-toggle="modal">
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
                                <table class="table card-table table-vcenter text-nowrap mb-0">
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
                                        <tr>
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
                                                <!-- <a href="javascript:void(0);" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="" data-bs-original-title="search">
                                                    <i class="las la-search"></i>
                                                </a> -->
                                                <a href="javascript:void(0);" class="btn btn-sm btn-info btn-b" data-bs-toggle="tooltip" title="" data-bs-original-title="edit">
                                                    <i class="las la-pen"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="" data-bs-original-title="delete">
                                                    <i class="las la-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
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
    <div class="modal fade" id="modaldemo8">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <div class="modal-title">
                        Message Preview
                    </div>
                    <div class="modal-body text-start">
                        TES
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">
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