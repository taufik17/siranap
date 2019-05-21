<script type="text/javascript">
	function cekform()
	{
		if (!$("#kode_obat").val())
		{
			alert('maaf Kode Obat tidak boleh kosong');
			$("#kode_obat").focus();
			return false;
		}

		if (!$("#nama_obat").val())
		{
			alert('maaf Nama Obat tidak boleh kosong');
			$("#nama_obat").focus();
			return false;
		}

		if (!$("#jenis_obat").val())
		{
			alert('maaf Jenis Obat tidak boleh kosong');
			$("#jenis_obat").focus();
			return false;
		}

		if (!$("#tempat_simpan").val())
		{
			alert('maaf Tempat Simpan tidak boleh kosong');
			$("#tempat_simpan").focus();
			return false;
		}

		if (!$("#kedaluwarsa").val())
		{
			alert('maaf Kedaluwarsa tidak boleh kosong');
			$("#kedaluwarsa").focus();
			return false;
		}

		if (!$("#harga_obat").val())
		{
			alert('maaf Harga Obat tidak boleh kosong');
			$("#harga_obat").focus();
			return false;
		}
		
	}
</script>

<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
	echo $info;
}
?>

<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/obat/simpan" onsubmit="return cekform();">
	<div class="control-group">
		<label class="control-label">Kode Obat</label>
		<div class="controls">
			<input type="text" name="kode_obat" id="kode_obat" placeholder="Kode Obat" class="span4" value="<?php echo $kode_obat; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Nama Obat</label>
		<div class="controls">
			<input type="text" name="nama_obat" id="nama_obat" placeholder="Nama Obat" class="span4" value="<?php echo $nama_obat; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Jenis Obat</label>
		<div class="controls">
			<input type="text" name="jenis_obat" id="jenis_obat" placeholder="Jenis Obat" class="span4" value="<?php echo $jenis_obat; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Tempat Simpan</label>
		<div class="controls">
			<input type="text" name="tempat_simpan" id="tempat_simpan" placeholder="Tempat Simpan" class="span4" value="<?php echo $tempat_simpan; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Kedaluwarsa</label>
		<div class="controls">
			<input type="text" name="kedaluwarsa" id="kedaluwarsa" placeholder="Kedaluwarsa" class="span4" value="<?php echo $kedaluwarsa; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Harga Obat</label>
		<div class="controls">
			<input type="text" name="harga_obat" id="harga_obat" placeholder="Harga Obat" class="span4" value="<?php echo $harga_obat; ?>">
		</div>
	</div>

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<button type="submit" class="btn btn-primary btn-small">
		<i class="icon-save"></i>
		Simpan
	</button>
	&nbsp; &nbsp; 
		<a href="<?php echo base_url();?>index.php/obat" class="btn btn-primary btn-small">
			<i class="icon-remove"></i>tutup</a>
	</div>
</form>