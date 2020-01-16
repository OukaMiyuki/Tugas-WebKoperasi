<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Koperasi Syariah Zazu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Koperasi Zazu</h3>
                <strong>KZ</strong>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="{!! url('/admin'); !!}" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    @auth('admin')
                    <a href="#pengguna" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-user"></i>
                        Users
                    </a>
                    <ul class="collapse list-unstyled" id="pengguna">
                        <li>
                            <a href="{!! url('admin/pages/view/daftar_user'); !!}">Data User</a>
                        </li>
                        <li>
                            <a href="{!! url('admin/pages/view/daftar_anggota'); !!}">Data Member</a>
                        </li>
                    </ul>
                    @endauth
                    @auth('manager')
                    <a href="#admins" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-user-shield"></i>
                        Admins
                    </a>
                    <ul class="collapse list-unstyled" id="admins">
                        <li>
                            <a href="{!! url('manager/pages/view/daftar_user_admin'); !!}">Admin Users</a>
                        </li>
                        <li>
                            <a href="{!! url('manager/pages/view/daftar_admin'); !!}">Data Admins</a>
                        </li>
                    </ul>
                    @endauth
                </li>
                <li>
                    <a href="#kontak" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                    <ul class="collapse list-unstyled" id="kontak">
                        <li>
                            <a href="#">Manager</a>
                        </li>
                        <li>
                            <a href="#">Admin</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#laporan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-print"></i>
                        Cetak
                    </a>
                    <ul class="collapse list-unstyled" id="laporan">
                        <li>
                            <a href="#">Simpan</a>
                        </li>
                        <li>
                            <a href="#">Pinjam</a>
                        </li>
                        <li>
                            <a href="#">Tarik</a>
                        </li>
                        <li>
                            <a href="#">Angsur</a>
                        </li>
                        <li>
                            <a href="#">Bagi Hasil</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/keluar">
                        <i class="fa fa-sign-out-alt"></i>
                        Sign Out
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="@auth('admin') /admin/pages/view/profile @endauth @auth('manager') /manager/pages/view/profile/ @endauth" class="nav-link" href="#">Profil</a>
                            </li>
                            @auth('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{!! url('page/simpan'); !!}">Simpan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{!! url('page/pinjam'); !!}">Pinjam</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Widthraw</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Angsuran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bagi Hasil</a>
                            </li>
                            @endauth
                            @auth('manager')
                            <li class="nav-item">
                                <a class="nav-link" href="{!! url('page/simpan'); !!}">Laporan Simpnan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{!! url('page/pinjam'); !!}">Laporan Pinjaman</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Laporan Angsuran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pending Approval</a>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>