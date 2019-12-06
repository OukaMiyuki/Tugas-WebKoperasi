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
<<<<<<< HEAD
			<form role="form" action="{{ route('add.user') }}" method="post" enctype="multipart/form-data">
				@csrf
=======
			<form role="form">
>>>>>>> 289f60ee6468d2850658c289b656fac7a8f31ece
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
<<<<<<< HEAD
							<input id="nama" name="nama" class="form-control" type="text" value="" readonly="">
=======
							<input id="nama" class="form-control" type="text" value="">
>>>>>>> 289f60ee6468d2850658c289b656fac7a8f31ece
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Akses</label>
						<div class="col-lg-9">
<<<<<<< HEAD
							<input id="akses" name="akses" class="form-control" type="text" value="" readonly="">
=======
							<input id="akses" class="form-control" type="text" value="">
>>>>>>> 289f60ee6468d2850658c289b656fac7a8f31ece
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Email</label>
						<div class="col-lg-9">
<<<<<<< HEAD
							<input id="email" name="email" class="form-control" type="email" value="" readonly="">
=======
							<input id="email" class="form-control" type="email" value="">
>>>>>>> 289f60ee6468d2850658c289b656fac7a8f31ece
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Username</label>
						<div class="col-lg-9">
							<input name="username" class="form-control" type="text" value="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Password</label>
						<div class="col-lg-9">
							<input id="passwor" name="password" type="password" class="form-control" value="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label"></label>
						<div class="col-lg-9">
							 <div class="custom-control custom-checkbox">
    							<input type="checkbox" class="custom-control-input" id="custoCheck" onclick="showPass()">
    							<label class="custom-control-label" for="custoCheck">Show Pasword</label>
  							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
		  			<button type="reset" class="btn btn-secondary">Reset</button>
		  			<input type="submit" class="button btn btn-primary" value="Simpan">
				</div>
			</form>
	 	</div>
  	</div>
</div>
<script type="text/javascript">
	function showPass() {
 		var x = document.getElementById("passwor");
		if (x.type === "password") {
    		x.type = "text";
  		} else {
    		x.type = "password";
  		}
	}
</script>