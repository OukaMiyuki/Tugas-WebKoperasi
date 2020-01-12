<!-- Modal -->
<div class="modal fade" id="daftar_user" style="z-index: 1600;" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="far fa-plus-square"></i> Daftar Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="datausr" style="width: 100%; margin: 0 auto; overflow: auto; overflow-x: auto;" class="table table-striped table-bordered display table-sm display nowrap" cellspacing="0" width="100%">
                    @auth('admin')
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Member</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1
                    @endphp
                    <tbody>
                        @foreach($data as $d)
                        @if($d->status_anggota != "Non-Aktif")
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$d->kode_member}}</td>
                            <td>{{$d->status_anggota}}</td>
                            <td align="center">
                                <a data-dismiss="modal" class="tutup" id="addUser" data-toggle="modal" data-target="#userAdd" data-kode="{{ $d->kode_member }}" data-nama="{{ $d->nama }}" data-akses="{{ $d->status_akses }}" data-email="{{ $d->email }}" data-status = "{{ $d->status_anggota }}">
                                    <button class="btn btn-primary btn-xs" ><i class="fas fa-edit"></i></i> Pilih</button> 
                                </a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                    @endauth
                    <!--AUTHMANAGER-->
                    @auth('manager')
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Admin</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1
                    @endphp
                    <tbody>
                        @foreach($data as $d)
                        @if($d->status_admin != "Non-Aktif")
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$d->kode}}</td>
                            <td>{{$d->status_admin}}</td>
                            <td align="center">
                                <a data-dismiss="modal" class="tutup" id="addUser" data-toggle="modal" data-target="#userAdd" data-kode="{{ $d->kode }}" data-nama="{{ $d->nama }}" data-akses="{{ $d->status_akses }}" data-email="{{ $d->email }}"  data-status = "{{ $d->status_admin }}">
                                    <button class="btn btn-primary btn-xs" ><i class="fas fa-edit"></i></i> Pilih</button> 
                                </a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                    @endauth
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
     $(document).on("click", "#addUser", function() {
        var kd = $(this).data('kode');
        var nama = $(this).data('nama');
        var akses = $(this).data('akses');
        var eml = $(this).data('email');
        var status = $(this).data('status');
        $("#UserAdd #kode_member").val(kd);
        $("#UserAdd #nama").val(nama);
        $("#UserAdd #akses").val(akses);
        $("#UserAdd #email").val(eml);
        $("#UserAdd #status").val(status);
    })
</script>