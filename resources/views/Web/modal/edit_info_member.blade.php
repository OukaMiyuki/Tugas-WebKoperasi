<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="edit_anggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  	<div class="modal-dialog modal-lg" role="document">
	 	<div class="modal-content">
			<div class="modal-header">
		  		<h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-user-plus"></i> Edit Anggota</h5>
		  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 		<span aria-hidden="true">&times;</span>
		  		</button>
			</div>
			<form role="form" action="{{ route('update.member') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body" id="show_edit">
			 		<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Kode Anggota</label>
				  		<div class="col-lg-9">
							<input id="kode_member" class="form-control" name="kode_member" type="text" value="" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">NIK</label>
						<div class="col-lg-9">
							<input id="nik" class="form-control" name="nik" type="text" value="" required="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Nama</label>
						<div class="col-lg-9">
							<input id="nama" class="form-control" name="nama" type="text" value="" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Jenis Kelamin</label>
						<div class="col-lg-9">
							<select id="jk" name="jk" class="form-control" size="0">
								<option value="">--Pilih--</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Peempuan">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Pekerjaan</label>
						<div class="col-lg-9">
							<input id="pekerjaan" class="form-control" name="pk" type="text" value="" placeholder="" required>
						</div>
					</div>
					<div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                        <div class="col-lg-9">
                        	<input id="alamat" class="form-control" name="alamat" type="text" value="" placeholder="Masukkan Alamat" required>
                        </div>
                    </div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label"></label>
						<div class="col-lg-6">
							<input id="kabko" class="form-control" name="kabko" type="text" value="" placeholder="Kab/Kota" required>
						</div>
						<div class="col-lg-3">
							<input id="pos" class="form-control" name="pos" type="text" value="" placeholder="Kode Pos" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Email</label>
						<div class="col-lg-9">
							<input id="email" class="form-control" name="email" type="email" value="" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">No. Telp</label>
						<div class="col-lg-9">
							<input id="telp" class="form-control" name="telp" type="text" value="" required>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label"></label>
						<div class="col-lg-9">
							<img src="" width="80px" id="photo">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Upload Photo</label>
						<div class="col-lg-9">
							<div class="custom-file">
  								<input type="file" name="image" class="custom-file-input" id="dir_imgg" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
  								<label class="d-inline-block custom-file-label editphoto" for="dir_imgg">Masukkan Foto</label>
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

<script type="text/javascript">
  if(document.getElementById('jk').value == "Laki-laki") {
     $("#status option[value=Laki-laki]").prop("selected", "selected")
  } else if(document.getElementById('jk').value == "Perempuan") {
     $("#status option[value=Perempuan]").prop("selected", "selected")
  } else if(document.getElementById('status').value == "") {
     $("#status option[value='']").prop("selected", "selected")
  }
</script>