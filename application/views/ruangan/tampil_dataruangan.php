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
<a href="<?php echo base_url();?>index.php/ruangan/tambah" class="btn btn-primary btn-small">
<i class="icon-plus"></i>
tambah data</a>
</p>

<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No </th>
			<th>Nama Ruangan </th>
			<th>Kelas </th>
			<th>Tarif Ruangan </th>
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
			<td><?php echo $row->nama_ruangan; ?></td>
			<td><?php echo $row->kelas ;?></td>
			<td><?php echo $row->tarif_ruangan ;?></td>
			<td>
				<a href="<?php echo base_url();?>index.php/ruangan/edit/<?php echo $row->nama_ruangan; ?>" ><i class="icon-edit green"></i></a>
				<a href="<?php echo base_url();?>index.php/ruangan/delete/<?php echo $row->nama_ruangan; ?>" onclick="return confirm('anda yakin ingin menghapus data ini ?');" >
					<i class="icon-trash red"></i></a>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>