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
<a href="<?php echo base_url();?>index.php/obat/tambah" class="btn btn-primary btn-small">
<i class="icon-plus"></i>
tambah data</a>
</p>

<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No </th>
			<th>Kode Obat </th>
			<th>Nama Obat </th>
			<th>Jenis Obat </th>
			<th>Tempat Simpan </th>
			<th>Kadaluarsa </th>
			<th>Harga Obat </th>
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
			<td><?php echo $row->kode_obat; ?></td>
			<td><?php echo $row->nama_obat ;?></td>
			<td><?php echo $row->jenis_obat ;?></td>
			<td><?php echo $row->tempat_simpan ;?></td>
			<td><?php echo $row->kedaluwarsa ;?></td>
			<td><?php echo $row->harga_obat ;?></td>
			<td>
				<a href="<?php echo base_url();?>index.php/obat/edit/<?php echo $row->kode_obat; ?>" ><i class="icon-edit green"></i></a>
				<a href="<?php echo base_url();?>index.php/obat/delete/<?php echo $row->kode_obat; ?>" onclick="return confirm('anda yakin ingin menghapus data ini ?');" >
					<i class="icon-trash red"></i></a>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>