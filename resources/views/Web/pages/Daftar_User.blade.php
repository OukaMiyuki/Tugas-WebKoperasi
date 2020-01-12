<p>
    <section class="content">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User & Akses</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#daftar_user"><i class="far fa-plus-square"></i> Add User</a>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="table-responsive">
                                    <table id="usertbl" class="table table-striped table-bordered display table-sm" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="10">No. </th>
                                                <th width="200">Kode Member</th>
                                                <th width="250">Nama</th>
                                                <th width="100">Username</th>
                                                <th width="190">Password</th>
                                                <th width="100">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1
                                            @endphp
                                            @foreach($usr as $d)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{$d->kode_member}}</td>
                                                <td>{{$d->nama}}</td>
                                                <td>{{ $d->uername }}</td>
                                                <td>{{ $d->password }}</td>
                                                <td align="center">
                                                    <a id="edit_user" data-toggle="modal" data-target="#editUser" data-kode = "{{$d->kode_member}}" data-nama = "{{$d->nama}}" data-username="{{$d->uername}}" data-pass="{{$d->password}}">
                                                        <button class="btn btn-primary btn-sm" ><i class="fas fa-edit"></i></i></button> 
                                                    </a>
                                                    <a href="/admin/action/hapus/user/{{ $d->kode_member }}" onclick="return confirm('Hapus member {{ $d-> kode_member }} ?')">
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
                </div>
            </div>
        </div>
    </section>
</p>
@include('Web.modal.add_user')
@include('Web.modal.daftar_user')
@include('Web.modal.edit_user')
<script type="text/javascript">
     $(document).on("click", "#edit_user", function() {
        var kd = $(this).data('kode');
        var nama = $(this).data('nama');
        var username = $(this).data('username');
        var pass = $(this).data('pass');
        $("#editUSR #kode_member").val(kd);
        $("#editUSR #nama").val(nama);
        $("#editUSR #username").val(username);
        $("#editUSR #password").val(pass);
    })
</script>