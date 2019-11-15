<p>
    <section class="content">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Simpanan</h1>
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
                                                <th width="80">Kode</th>
                                                <th width="250">Nama</th>
                                                <th width="80">Status</th>
                                                <th width="200">Action</th>
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
                                                        <td>{{$d->nama}}</td>
                                                        <td align="center">{{$d->status_anggota}}</td>
                                                        <td align="center">
                                                            <button class="btn btn-primary btn-xs" ><i class="fas fa-plus"></i> Simpan</button> 
                                                            <button class="btn btn-info btn-xs" ><i class="fas fa-info-circle"></i> Lihat Simpanan</button>
                                                        </td>
                                                    </tr>
                                                @endif
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