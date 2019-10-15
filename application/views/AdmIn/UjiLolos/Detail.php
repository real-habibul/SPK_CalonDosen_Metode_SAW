<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel-group" id="accordion-example">
	<div class="panel">
		<div id="Edit" class="panel-collapse collapse in">
			<div class="panel-body">
				<form action="<?=base_url()?>AdmIn/savePeserta" class="panel form-horizontal" method="post" enctype="multipart/form-data">
					<div class="row form-group">
						<label class="col-sm-3 control-label">Kode Registrasi :</label>
						<div class="col-sm-9">
							<input type="hidden" name="action" value="update">
							<input type="hidden" class="form-control" name="member_id" value="<?=$row['member_id']?>" >
							<input type="text" class="form-control" value="<?=$row['registerCode']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Ketua Anggota :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['fullname']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Anggota :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['fullname2']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">No HP Ketua :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['nohp']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Email :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['email_ketua']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Asal Sekolah :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['instansi']?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Status :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=$row['status']?>" disabled>
							
							<input type="text" name="status" class="hidden form-control" placeholder="status" autocomplete="off" value="Terverifikasi">
						</div>
					</div> 
					<?php if (empty($row['upload_transfer'])) { ?>
					<label class="col-sm-3 control-label">Bukti TF :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="Belum Upload Bukti Transfer" disabled>
						</div>
					<?php } else {  ?>
					<div class="row form-group">
						<div class="col-sm-12">
							<center>Bukti TF
							<img src="<?=base_url()?>assets/uploads/buktiTF/<?=$row['upload_transfer']?>" style="width: 100%">
							</center>
						</div>
					</div>
					<?php if ($row['status'] == 'Menunggu Verifikasi') { ?>
					<div class="ln-solid"></div>
					<div class="row form-group">
						<div class="col-sm-12">
							<center>
							<button type="submit" class="btn btn-success btn-round" data-toggle="tooltip" data-placement="top" title="" onclick="btnsave()" data-original-title="Simpan perubahan">Proses</button>
							<button type="button" class="btn btn-round btn-warning">Tolak</button>
							</center>
						</div>
					</div>
					<?php } ?>
					

					<?php } ?>
					<!-- <div class="row form-group">
						<label class="col-sm-3 control-label">Tanggal Buat :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=date_format(date_create($row['created_date']),"d M Y H:i:s")?>" disabled>
						</div>
					</div>
					<div class="row form-group">
						<label class="col-sm-3 control-label">Perubahan :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" value="<?=date_format(date_create($row['modified_date']),"d M Y H:i:s")?>" disabled>
						</div>
					</div> -->
				</form>
			</div>
		</div>
	</div>
</div>