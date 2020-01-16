<!-- Modal -->
<div class="modal fade" id="simpananPokok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
	 	<div class="modal-content">
			<div class="modal-header">
		  		<h5 class="modal-title" id="exampleModalLongTitle"><i class="far fa-plus-square"></i> Tambah Simpanan Pokok</h5>
		  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 		<span aria-hidden="true">&times;</span>
		  		</button>
			</div>
			<form role="form" action="{{ route('tambah.simpanan_pokok') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body" id="simpanan_pokok">
			 		<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Kode</label>
				  		<div class="col-lg-6">
							<input name="kode_member" id="kode_member"  class="form-control" type="text" value="" readonly="">
						</div>
						<div class="col-lg-3">
							<button type="button" class="btn btn-info" data-toggle="modal" data-dismiss="modal" data-target="#daftar_anggota" class="btn btn-secondary">Member</button>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Nama</label>
						<div class="col-lg-9">
							<input id="nama" name="nama" class="form-control" type="text" value="" readonly="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Status</label>
						<div class="col-lg-9">
							<input id="status" name="status" class="form-control" type="text" value="" readonly="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Jenis Simpanan</label>
						<div class="col-lg-9">
							<input id="jenis" name="simpanan" class="form-control" type="text" value="Simpanan Pokok" readonly="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Tanggal Simpan</label>
						<div class="col-lg-9">
							<input id="tanggal" name="tanggal" class="form-control" type="text" value="" readonly="">
						</div>
					</div>
				</div>
				<div class="modal-footer">
		  			<input type="submit" class="button btn btn-primary" value="Simpan">
				</div>
			</form>
	 	</div>
  	</div>
</div>