<p>
    <section class="content">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Anggota Koperasi</h1>
            <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"  data-toggle="modal" data-target="#add_member"><i class="fas fa-user-plus"></i> Add Member</button>
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
                                                <th width="250">Action</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $no = 1
                                        @endphp
                                        <tbody>
                                            @foreach($data as $d)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$d->kode_member}}</td>
                                                <td>{{$d->nama}}</td>
                                                <td align="center">{{$d->status_anggota}}</td>
                                                <td align="center">
                                                    <button class="btn btn-primary btn-xs" ><i class="fas fa-edit"></i></i> Edit</button>  
                                                    <button class="btn btn-info btn-xs" ><i class="fas fa-eye"></i> Lihat Profil</button>
                                                    <button class="btn btn-danger btn-xs" ><i class="fas fa-trash-alt"></i> Hapus</button> 
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
@include('@components.modal.add_member')