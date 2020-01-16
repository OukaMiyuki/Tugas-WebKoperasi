<p>
    <section class="content">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Simpanan Anggota</h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                               <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="" id="tabpokok" data-target="#pokok" data-toggle="tab" class="nav-link active">Simpanan Pokok</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" id="tabwajib" data-target="#wajib" data-toggle="tab" class="nav-link">Simpanan Wajib</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" id="tabsukarela" data-target="#sukarela" data-toggle="tab" class="nav-link">Simpanan Sukarela</a>
                                    </li>
                                </ul>
                                <br>
                                <div class="tab-content p-b-3">
                                    <div class="tab-pane active" id="pokok">
                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <h1 class="h3 mb-0 text-gray-800">Data Simpanan Pokok</h1>
                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#daftar_anggota"><i class="far fa-plus-square"></i> Tambah Simpanan</a>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table id="usertbl" class="table table-striped table-bordered display table-sm" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>No. </th>
                                                                <th width="120">Kode Member</th>
                                                                <th width="250">Nama</th>
                                                                <th width="200">Jenis Simpanan</th>
                                                                <th width="190">Nominal (Rp.)</th>
                                                                <th width="190">Tanggal</th>
                                                                <th width="100">Action</th>
                                                            </tr>
                                                        </thead>
                                                        @php
                                                            $no = 1
                                                        @endphp
                                                        <tbody>
                                                            @foreach($data2 as $d)
                                                            <tr>
                                                                <td>{{ $no }}.</td>
                                                                <td>{{ $d->kode_member }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->jenis_simpanan }}</td>
                                                                <td>{{ $d->nominal }}</td>
                                                                <td>{{ $d->created_at }}</td>
                                                                <td align="center">
                                                                    <a href="/admin/action/hapus/simpan/pokok/member/{{ $d->kode_member }}" onclick="return confirm('Hapus member {{ $d-> kode_member }} ?')">
                                                                        <button class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i></button> 
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="wajib">
                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <h1 class="h3 mb-0 text-gray-800">Data Simpanan Wajib</h1>
                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#daftar_anggota_simpanan"><i class="far fa-plus-square"></i> Tambah Simpanan</a>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table id="tblWajib" class="table table-striped table-bordered display table-sm" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>No. </th>
                                                                <th width="120">Kode Member</th>
                                                                <th width="250">Nama</th>
                                                                <th width="200">Jenis Simpanan</th>
                                                                <th width="190">Nominal (Rp.)</th>
                                                                <th width="190">Tanggal</th>
                                                                <th width="100">Action</th>
                                                            </tr>
                                                        </thead>
                                                         @php
                                                            $no = 1
                                                        @endphp
                                                        <tbody>
                                                            @foreach($data4 as $d)
                                                            <tr>
                                                                <td>{{$no}}.</td>
                                                                <td>{{ $d->kode_member }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->jenis_simpanan }}</td>
                                                                <td>{{ $d->nominal }}</td>
                                                                <td>{{ $d->created_at }}</td>
                                                                <td align="center">
                                                                    <a href="/admin/action/hapus/simpan/wajib/member/{{ $d->kode_member }}" onclick="return confirm('Hapus member {{ $d-> kode_member }} ?')">
                                                                        <button class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i></button> 
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="sukarela">
                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <h1 class="h3 mb-0 text-gray-800">Data Simpanan Sukarela</h1>
                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#daftar_anggota_sukarela"><i class="far fa-plus-square"></i> Tambah Simpanan</a>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table id="tblSukarela" class="table table-striped table-bordered display table-sm" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th width="5">No. </th>
                                                                <th width="150">Kode Member</th>
                                                                <th width="250">Nama</th>
                                                                <th width="200">Jenis Simpanan</th>
                                                                <th width="190">Nominal (Rp.)</th>
                                                                <th width="190">Tanggal</th>
                                                                <th width="100">Action</th>
                                                            </tr>
                                                        </thead>
                                                         @php
                                                            $no = 1
                                                        @endphp
                                                        <tbody>
                                                            @foreach($data5 as $d)
                                                            <tr>
                                                                <td>{{$no}}.</td>
                                                                <td>{{ $d->kode_member }}</td>
                                                                <td>{{ $d->nama }}</td>
                                                                <td>{{ $d->jenis_simpanan }}</td>
                                                                <td>{{ $d->nominal }}</td>
                                                                <td>{{ $d->created_at }}</td>
                                                                <td align="center">
                                                                    <a id="edit_simpanan_sukarela" data-toggle="modal" data-target="#edit_simpanan_sukarela_form" data-kode = "{{ $d->kode_member }}" data-nama = "{{ $d->nama }}" data-jenis = "{{ $d->jenis_simpanan }}" data-nominal = "{{ $d->nominal }}">
                                                                        <button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></i></button> 
                                                                    </a>
                                                                    <button class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i></button> 
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</p>
@include('Web.modal.add_simpanan_pokok')
@include('Web.modal.add_simpanan_wajib')
@include('Web.modal.add_simpanan_sukarela')
@include('Web.modal.edit_simpanan_sukarela')
@include('Web.modal.daftar_anggota')
@include('Web.modal.daftar_anggota_simpanan_wajib')
@include('Web.modal.daftar_anggota_simpanan_sukarela')
<script type="text/javascript">
    function getDate() {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        if(dd<10) {
            dd = '0'+dd
        } 
        if(mm<10) {
            mm = '0'+mm
        } 
        today = yyyy + '-' + mm + '-' + dd + ' ' + time;
        console.log(today);
        document.getElementById("tanggal").value = today;
        document.getElementById("tanggalWajib").value = today;
        document.getElementById("tanggalUpdate").value = today;
        document.getElementById("tanggalSukarela").value = today;
    }
    window.onload = function() {
        getDate();
    };

     $(document).on("click", "#edit_simpanan_sukarela", function() {
        var kd = $(this).data('kode');
        var nama = $(this).data('nama');
        var jenis = $(this).data('jenis');
        var nominal = $(this).data('nominal');
        $("#edit_simpananSukarela #kode_member").val(kd);
        $("#edit_simpananSukarela #nama").val(nama);
        $("#edit_simpananSukarela #jenis").val(jenis);
        $("#edit_simpananSukarela #nominal").val(nominal);
    });
</script>
<!-- <script type="text/javascript">
    $("#pokok").click(function(){
    var $this = $(this);
    if($this.data('clicked')) {
        alert('yes');
    }
    else {
        $this.data('clicked', true);
        func(some, parameter);
    }
});
</script> -->