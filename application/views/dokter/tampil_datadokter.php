<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      null, null, null, null, null, null, null, null, null, null,
				  { "bSortable": false }
				] } );
			})
		</script>

<p>
<a href="<?php echo base_url();?>index.php/dokter/tambah" class="btn btn-primary btn-small">
<i class="icon-plus"></i>
tambah data</a>
</p>

<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>no </th>
			<th>id dokter </th>
			<th>nama </th>
			<th>alamat </th>
			<th>spesialis </th>
			<th>JK </th>
			<th>ttl </th>
			<th>no_telp </th>
			<th>usia </th>
			<th>tarif </th>
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
			<td><?php echo $row->id_dokter ;?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->alamat ;?></td>
			<td><?php echo $row->spesialis ;?></td>
			<td><?php echo $row->jenis_kelamin ;?></td>
			<td><?php echo $row->ttl ;?></td>
			<td><?php echo $row->no_telp ;?></td>
			<td><?php echo $row->usia ;?></td>
			<td><?php echo $row->tarif ;?></td>
			<td>
				<a href="<?php echo base_url();?>index.php/dokter/edit/<?php echo $row->id_dokter; ?>" ><i class="icon-edit green"></i></a>
				<a href="<?php echo base_url();?>index.php/dokter/delete/<?php echo $row->id_dokter; ?>" onclick="return confirm('anda yakin ingin menghapus data ini ?');" >
					<i class="icon-trash red"></i></a>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>