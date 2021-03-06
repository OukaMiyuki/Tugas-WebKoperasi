<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="add_member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  	<div class="modal-dialog modal-lg" role="document">
	 	<div class="modal-content">
			<div class="modal-header">
		  		<h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-user-plus"></i> Tambah Anggota</h5>
		  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 		<span aria-hidden="true">&times;</span>
		  		</button>
			</div>
			<form role="form" action="{{ route('upload.member') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">
			 		<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Kode Anggota</label>
				  		<div class="col-lg-9">
							<input class="form-control" name="kd" type="text" value="{{$kode}}" readonly required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">NIK</label>
						<div class="col-lg-9">
							<input class="form-control" name="nik" type="text" value="" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Nama</label>
						<div class="col-lg-9">
							<input class="form-control" name="nama" type="text" value="" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Jenis Kelamin</label>
						<div class="col-lg-9">
							<select id="user_time_zone" name="jk" class="form-control" size="0">
								<option value="">--Pilih--</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Peempuan">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Pekerjaan</label>
						<div class="col-lg-9">
							<input class="form-control" name="pk" type="text" value="" placeholder="" required>
						</div>
					</div>
					<div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                        <div class="col-lg-9">
                        	<input class="form-control" name="alamat" type="text" value="" placeholder="Masukkan Alamat" required>
                        </div>
                    </div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label"></label>
						<div class="col-lg-6">
							<input class="form-control" name="kabko" type="text" value="" placeholder="Kab/Kota" required>
						</div>
						<div class="col-lg-3">
							<input class="form-control" name="pos" type="text" value="" placeholder="Kode Pos" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Email</label>
						<div class="col-lg-9">
							<input class="form-control" name="email" type="email" value="" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">No. Telp</label>
						<div class="col-lg-9">
							<input class="form-control" name="telp" type="text" value="" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Upload Photo</label>
						<div class="col-lg-9">
							<div class="custom-file">
  								<input type="file" name="image" class="custom-file-input" id="dir_img" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*" required>
  								<label class="d-inline-block custom-file-label addmember" for="dir_img">Masukkan Foto</label>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
		  			<button type="reset" class="btn btn-secondary">Reset</button>
		  			<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
	 	</div>
  	</div>
</div>