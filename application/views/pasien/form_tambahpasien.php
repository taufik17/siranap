<script type="text/javascript">
	function cekform()
	{
		if (!$("#NIK").val())
		{
			alert('maaf NIK tidak boleh kosong');
			$("#NIK").focus();
			return false;
		}

		if (!$("#nama_pasien").val())
		{
			alert('maaf nama tidak boleh kosong');
			$("#nama_pasien").focus();
			return false;
		}

		if (!$("#alamat").val())
		{
			alert('maaf alamat tidak boleh kosong');
			$("#alamat").focus();
			return false;
		}

		if (!$("#ttl").val())
		{
			alert('maaf TTL tidak boleh kosong');
			$("#ttl").focus();
			return false;
		}

		if (!$("#jenis_kelamin").val())
		{
			alert('maaf Jenis Kelamin tidak boleh kosong');
			$("#jenis_kelamin").focus();
			return false;
		}

		if (!$("#usia").val())
		{
			alert('maaf usia tidak boleh kosong');
			$("#usia").focus();
			return false;
		}
		
		if (!$("#penyakit").val())
		{
			alert('maaf Penyakit tidak boleh kosong');
			$("#tarif").focus();
			return false;
		}

		if (!$("#no_telp").val())
		{
			alert('maaf nomor telphone tidak boleh kosong');
			$("#no_telp").focus();
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

<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/pasien/simpan" onsubmit="return cekform();">
	<div class="control-group">
		<label class="control-label">NIK</label>
		<div class="controls">
			<input type="text" name="NIK" id="NIK" placeholder="NIK" class="span4" value="<?php echo $NIK; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Nama</label>
		<div class="controls">
			<input type="text" name="nama_pasien" id="nama_pasien" placeholder="nama" class="span4" value="<?php echo $nama_pasien; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Alamat</label>
		<div class="controls">
			<input type="text" name="alamat" id="alamat" placeholder="alamat" class="span4" value="<?php echo $alamat; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">TTL</label>
		<div class="controls">
			<input type="text" name="ttl" id="ttl" placeholder="tempat tanggal lahir" class="span4" value="<?php echo $ttl; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Jenis Kelamin</label>
		<div class="controls">
			<select name="jenis_kelamin" id="jenis_kelamin" class="texbox" class="span4" value="<?php echo $jenis_kelamin; ?>">
			<option>--Pilih--</option>
			<option value="L">Laki-laki</option>
			<option value="P">Perempuan</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Usia</label>
		<div class="controls">
			<input type="text" name="usia" id="usia" placeholder="usia" class="span4" value="<?php echo $usia; ?>">
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label">Penyakit</label>
		<div class="controls">
			<input type="text" name="penyakit" id="penyakit" placeholder="Penyakit" class="span4" value="<?php echo $penyakit; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">No Telp</label>
		<div class="controls">
			<input type="text" name="no_telp" id="no_telp" placeholder="nomor telphone" class="span4" value="<?php echo $no_telp; ?>">
		</div>
	</div>

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<button type="submit" class="btn btn-primary btn-small">
		<i class="icon-save"></i>
		Simpan
	</button>
	&nbsp; &nbsp; 
		<a href="<?php echo base_url();?>index.php/pasien" class="btn btn-primary btn-small">
			<i class="icon-remove"></i>tutup</a>
	</div>
</form>