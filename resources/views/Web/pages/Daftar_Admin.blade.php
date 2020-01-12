<p>
    <section class="content">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pengurus Koperasi</h1>
            <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"  data-toggle="modal" data-target="#add_admin"><i class="fas fa-user-plus"></i> Add Admin</button>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="table-responsive">
                                    <table id="tblMember" class="table table-striped table-bordered display table-sm" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="10">No.</th>
                                                <th width="80">Kode Admin</th>
                                                <th width="200">Nama</th>
                                                <th width="80">Status</th>
                                                <th width="300">Action</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $no = 1
                                        @endphp
                                        <tbody>
                                            @foreach($data as $d)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$d->kode}}</td>
                                                <td>{{$d->nama}}</td>
                                                <td align="center">{{$d->status_admin}}</td>
                                                <td align="center">
                                                    <a id="edit_data_admin" data-toggle="modal" data-target="#edit_admin" data-kode="{{ $d->kode }}" data-nik="{{ $d->nik }}"  data-nama="{{ $d->nama }}"  data-jk="{{ $d->jk }}"  data-pendidikan="{{ $d->pendidikan }}"  data-alamat="{{ $d->alamat }}"  data-kako="{{ $d->kabkota }}"  data-pos="{{ $d->pos }}"  data-email="{{ $d->email }}"  data-telp="{{ $d->telp }}"  data-photo="{{ $d->photo }}">
                                                        <button class="btn btn-primary btn-xs" ><i class="fas fa-edit"></i></i> Edit</button>
                                                    </a>
                                                    <a href="/manager/pages/view/profile/admin/{{ $d->kode }}">  
                                                        <button class="btn btn-info btn-xs" ><i class="fas fa-eye"></i> Lihat Profil</button>
                                                    </a>
                                                    @if($d->status_admin == "Aktif")
                                                        <a href="/manager/action/update/edit_status/admin/{{ $d->kode }}">
                                                            <button class="btn btn-danger btn-xs" ><i class="fas fa-ban"></i> Non-Aktif</button> 
                                                        </a>
                                                    @elseif($d->status_admin == "Non-Aktif")
                                                        <a href="/manager/action/update/edit_status/admin/{{ $d->kode }}">
                                                            <button class="btn btn-success btn-xs" ><i class="fas fa-unlock-alt"></i> Aktifkan</button>
                                                        </a>
                                                    @endif
                                                     <a href="/manager/action/hapus/admin/{{ $d->kode }}" onclick="return confirm('Hapus member {{ $d-> kode }} ?')">
                                                        <button class="btn btn-danger btn-xs" ><i class="fas fa-trash-alt"></i> Hapus</button>
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
<script type="text/javascript">
     $(document).on("click", "#edit_data_admin", function() {
        var kd = $(this).data('kode');
        var nik = $(this).data('nik');
        var nama = $(this).data('nama');
        var jk = $(this).data('jk');
        var pdk = $(this).data('pendidikan');
        var almt = $(this).data('alamat');
        var kako = $(this).data('kako');
        var pos = $(this).data('pos');
        var eml = $(this).data('email');
        var telp = $(this).data('telp');
        var img = $(this).data('photo');
        $("#show_edit_admin #kode_admin").val(kd);
        $("#show_edit_admin #nik").val(nik);
        $("#show_edit_admin #nama").val(nama);
        $("#show_edit_admin #jk").val(jk);
        $("#show_edit_admin #pendidikan").val(pdk);
        $("#show_edit_admin #alamat").val(almt);
        $("#show_edit_admin #kabko").val(kako);
        $("#show_edit_admin #pos").val(pos);
        $("#show_edit_admin #email").val(eml);
        $("#show_edit_admin #telp").val(telp);
        $("#show_edit_admin #photo").attr("src", "https://i.imgur.com/"+img);
    })
</script>
@include('Web.modal.add_admin')
@include('Web.modal.edit_admin_info')