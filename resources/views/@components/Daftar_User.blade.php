<p>
    <section class="content">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User & Akses</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#add_user"><i class="far fa-plus-square"></i> Add User</a>
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
                                                <th width="210">Nama</th>
                                                <th width="120">Username</th>
                                                <th width="190">Password</th>
                                                <th width="100">Hak Akses</th>
                                                <th width="250">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Moch. Dzati Amar Wibianto</td>
                                                <td>Admin</td>
                                                <td>accesadminqwertyuiop</td>
                                                <td>Admin</td>
                                                <td align="center">
                                                    <button class="btn btn-primary btn-xs" ><i class="fas fa-edit"></i></i> Edit</button> 
                                                    <button class="btn btn-danger btn-xs" ><i class="fas fa-trash-alt"></i> Hapus</button> 
                                                    <button class="btn btn-info btn-xs" ><i class="fas fa-eye"></i> Lihat Profil</button> 
                                                </td>
                                            </tr>
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
@include('@components.modal.add_user')