<script type="text/javascript">
	function cekform()
	{
		if (!$("#nama_ruangan").val())
		{
			alert('maaf Nama Ruangan tidak boleh kosong');
			$("#nama_ruangan").focus();
			return false;
		}

		if (!$("#kelas").val())
		{
			alert('maaf Kelas tidak boleh kosong');
			$("#kelas").focus();
			return false;
		}

		if (!$("#tarif_ruangan").val())
		{
			alert('maaf Tarif Ruangan tidak boleh kosong');
			$("#tarif_ruangan").focus();
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

<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/ruangan/simpan" onsubmit="return cekform();">
	<div class="control-group">
		<label class="control-label">Nama Ruangan</label>
		<div class="controls">
			<input type="text" name="nama_ruangan" id="nama_ruangan" placeholder="Nama Ruangan" class="span4" value="<?php echo $nama_ruangan; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Kelas</label>
		<div class="controls">
			<input type="text" name="kelas" id="kelas" placeholder="Kelas" class="span4" value="<?php echo $kelas; ?>">
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">Tarif Ruangan</label>
		<div class="controls">
			<input type="text" name="tarif_ruangan" id="tarif_ruangan" placeholder="Tarif Ruangan" class="span4" value="<?php echo $tarif_ruangan; ?>">
		</div>
	</div>

	<div>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<button type="submit" class="btn btn-primary btn-small">
		<i class="icon-save"></i>
		Simpan
	</button>
	&nbsp; &nbsp; 
		<a href="<?php echo base_url();?>index.php/ruangan" class="btn btn-primary btn-small">
			<i class="icon-remove"></i>tutup</a>
	</div>
</form>