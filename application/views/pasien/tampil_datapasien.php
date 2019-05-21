<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      null, null, null, null, null, null, null, null, null, 
				  { "bSortable": false }
				] } );
			})
		</script>

<p>
<a href="<?php echo base_url();?>index.php/pasien/tambah" class="btn btn-primary btn-small">
<i class="icon-plus"></i>
tambah data</a>
</p>

<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No </th>
			<th>NIK </th>
			<th>Nama </th>
			<th>Alamat </th>
			<th>TTL </th>
			<th>JK </th>
			<th>Usia </th>
			<th>Penyakit </th>
			<th>No telp </th>
			<th>aksi </th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<?php
		$no = 1;
		foreach ($data->result() as $row ) {
		?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->NIK; ?></td>
			<td><?php echo $row->nama_pasien ;?></td>
			<td><?php echo $row->alamat ;?></td>
			<td><?php echo $row->ttl ;?></td>
			<td><?php echo $row->jenis_kelamin ;?></td>
			<td><?php echo $row->usia ;?></td>
			<td><?php echo $row->penyakit ;?></td>
			<td><?php echo $row->no_telp ;?></td>
			<td>
				<a href="<?php echo base_url();?>index.php/pasien/edit/<?php echo $row->NIK; ?>" ><i class="icon-edit green"></i></a>
				<a href="<?php echo base_url();?>index.php/pasien/delete/<?php echo $row->NIK; ?>" onclick="return confirm('anda yakin ingin menghapus data ini ?');" >
					<i class="icon-trash red"></i></a>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>