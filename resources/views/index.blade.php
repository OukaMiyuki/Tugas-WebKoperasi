
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
                    <a href="{!! url('/'); !!}" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#pengguna" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-user"></i>
                        Users
                    </a>
                    <ul class="collapse list-unstyled" id="pengguna">
                        <li>
                            <a href="{!! url('page/daftar_user'); !!}">Data User</a>
                        </li>
                        <li>
                            <a href="{!! url('page/daftar_anggota'); !!}">Data Member</a>
                        </li>
                    </ul>
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
                    <a href="#">
                        <i class="fa fa-lock"></i>
                        Sign In
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
                                <a class="nav-link" href="#">Profil</a>
                            </li>
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
                        </ul>
                    </div>
                </div>
            </nav>
             @if(\Request::is('/'))
              @include('@components.Dashboard')
            @elseif(\Request::is('page/daftar_anggota'))
              @include('@components/Daftar_Anggota')
            @elseif(\Request::is('page/daftar_user'))
              @include('@components/Daftar_User')
            @elseif(\Request::is('page/simpan'))
              @include('@components/Tambah_Simpanan')
            @elseif(\Request::is('page/pinjam'))
              @include('@components/Tambah_Pinjaman')
            @elseif(\Request::is('page/profil/manager'))
              @include('@components/Profil')
            @elseif(\Request::is('admin_page'))
              <p>Halaman Utama, Harap pilih database untuk melakukan operasi!</p>
            @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        $(document).ready(function() {
            $('#tblMember').DataTable();
        });

        $('#dir_img').on('change',function(){
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        })

        $(function () {
            $(document).on('change', ':file', function () {
                var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [numFiles, label]);
            });
            $(document).ready(function () {
                $(':file').on('fileselect', function (event, numFiles, label) {
                    var input = $(this).parents('.input-group').find(':text'),
                        log = numFiles > 1 ? numFiles + ' files selected' : label;
                    if (input.length) {
                        input.val(log);
                    } else {
                        if (log) alert(log);
                    }
                });
            });
        });
    </script>
</body>
</html>