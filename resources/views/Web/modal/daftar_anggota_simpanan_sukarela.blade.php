<!-- Modal -->
<div class="modal fade" id="daftar_anggota_sukarela" style="z-index: 1600;" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="far fa-plus-square"></i> Daftar Anggota Aktif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="tblWajib" style="width: 100%; margin: 0 auto; overflow: auto; overflow-x: auto;" class="table table-striped table-bordered display table-sm display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Member</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1
                    @endphp
                    <tbody>
                        @foreach($data3 as $d)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$d->kode_member}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->status_anggota}}</td>
                            <td align="center">
                                <a data-dismiss="modal" class="tutup" id="tambahsimpanSukarela" data-toggle="modal" data-target="#simpananSukarelaForm" data-kode="{{ $d->kode_member }}" data-nama="{{ $d->nama }}" data-status = "{{ $d->status_anggota }}">
                                    <button class="btn btn-primary btn-xs" ><i class="fas fa-edit"></i></i> Pilih</button> 
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
<script type="text/javascript">
    $(document).on("click", "#tambahsimpanSukarela", function() {
        var kd = $(this).data('kode');
        var nama = $(this).data('nama');
        var status = $(this).data('status');
        $("#simpanan_sukarela #kode_member").val(kd);
        $("#simpanan_sukarela #nama").val(nama);
        $("#simpanan_sukarels #status").val(status);
    })
</script>