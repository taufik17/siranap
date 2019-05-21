<script type="text/javascript">
	$(document).ready(function(){

		$("#simpan").click(function(){
			var string = $("#my-form").serialize();
			//alert(string);
			$.ajax({
				type	: 'POST',
				url		: '<?php echo site_url();?>/tagihan/simpan',
				data	: string,
				succes	: function(data){
					alert(data);
				}
			});
		});
	});
</script>

<form class="form-horizontal" name="my-form" id="my-form">
	<div class="control-group">
		<label class="control-label">NIK</label>
		<div class="controls">
			<select name="NIK" id="Nama Pasien">
					<option value="">-pilih-</option>
					<?php
					$NIK = $this->db->get('pasien');
					foreach ($NIK->result() as $row) {
					
					?>
					<option value="<?php echo $row->NIK;?>"><?php echo $row->nama_pasien;?></option>
					<?php }?>
			</select>
		</div>  
	</div>

	
<div class="control-group">
		<label class="control-label">Nama Dokter</label>
		<div class="controls">
			<select name="nama" id="nama">
					<option value="">-pilih-</option>
					<?php
					$nama = $this->db->get('dokter');
					foreach ($nama->result() as $row) {
					
					?>
					<option value="<?php echo $row->nama;?>"><?php echo $row->nama;?></option>
					<?php }?>
			</select>
		</div>  
	</div>

	<div class="control-group">
		<label class="control-label">Nama Ruangan</label>
		<div class="controls">
			<select name="nama_ruangan" id="nama_ruangan">
					<option value="">-pilih-</option>
					<?php
					$nama_ruangan = $this->db->get('ruangan');
					foreach ($nama_ruangan->result() as $row) {
					
					?>
					<option value="<?php echo $row->nama_ruangan;?>"><?php echo $row->nama_ruangan;?></option>
					<?php }?>
			</select>
		</div>  
	</div>

	<div class="control-group">
		<label class="control-label">Waktu Masuk</label>
		<div class="controls">
			<input type="text" name="waktu_masuk" id="waktu_masuk" placeholder="tahun-bulan-tanggal" class="span4">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Waktu Keluar</label>
		<div class="controls">
			<input type="text" name="waktu_keluar" id="waktu_keluar" placeholder="tahun-bulan-tanggal" class="span4">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Nama Obat</label>
		<div class="controls">
			<select name="nama_obat" id="nama_ruangan">
					<option value="">-pilih-</option>
					<?php
					$nama_obat = $this->db->get('obat');
					foreach ($nama_obat->result() as $row) {
					
					?>
					<option value="<?php echo $row->kode_obat;?>"><?php echo $row->nama_obat;?></option>
					<?php }?>
			</select>
		</div>  
	</div>

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<button type="button" name="simpan" id="simpan" class="btn btn-primary btn-small">
		<i class="icon-save"></i>
		Simpan
		</button>
	</div>

</form>