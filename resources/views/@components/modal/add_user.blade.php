<!-- Modal -->
<div class="modal fade" id="userAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
	 	<div class="modal-content">
			<div class="modal-header">
		  		<h5 class="modal-title" id="exampleModalLongTitle"><i class="far fa-plus-square"></i> Add User</h5>
		  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 		<span aria-hidden="true">&times;</span>
		  		</button>
			</div>
			<form role="form">
				<div class="modal-body" id="UserAdd">
			 		<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Kode</label>
				  		<div class="col-lg-6">
							<input name="kode_member" id="kode_member"  class="form-control" type="text" value="" readonly="">
						</div>
						<div class="col-lg-3">
							<button type="button" class="btn btn-info" data-toggle="modal" data-dismiss="modal" data-target="#daftar_user" class="btn btn-secondary">Member</button>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Nama</label>
						<div class="col-lg-9">
							<input id="nama" class="form-control" type="text" value="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Akses</label>
						<div class="col-lg-9">
							<input id="akses" class="form-control" type="text" value="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Email</label>
						<div class="col-lg-9">
							<input id="email" class="form-control" type="email" value="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Username</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" value="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Password</label>
						<div class="col-lg-9">
							<input class="form-control" type="text" value="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Akses</label>
						<div class="col-lg-9">
							<select id="user_time_zone" class="form-control" size="0">
								<option value="">--Pilih--</option>
								<option value="Laki-laki">Member</option>
								<option value="Peempuan">Admin</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
		  			<button type="reset" class="btn btn-secondary">Reset</button>
		  			<button type="button" class="btn btn-primary">Simpan</button>
				</div>
			</form>
	 	</div>
  	</div>
</div>