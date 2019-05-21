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
<a href="<?php echo base_url();?>index.php/tagihan/tambah" class="btn btn-primary btn-small">
<i class="icon-plus"></i>
tambah data</a>
</p>

<table id="sample-table-2" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No </th>
			<th>NIK </th>
			<th>Nama Pasien </th>
			<th>Nama Dokter </th>
			<th>Tarif Dokter </th>
			<th>Nama Ruangan </th>
			<th>Tarif Ruangan </th>
			<th>Waktu Masuk </th>
			<th>Waktu Keluar </th>
			<th>Kode Obat </th>
			<th>Nama Obat </th>
			<th>Harga Obat </th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<?php
		$no = 1;
		foreach ($data->result() as $row ) {
		?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->NIK ;?></td>
			<td><?php echo $row->nama_pasien ;?></td>
			<td><?php echo $row->nama ;?></td>
			<td><?php echo $row->tarif ;?></td>
			<td><?php echo $row->nama_ruangan ;?></td>
			<td><?php echo $row->tarif_ruangan ;?></td>
			<td><?php echo $row->waktu_masuk ;?></td>
			<td><?php echo $row->waktu_keluar ;?></td>
			<td><?php echo $row->kode_obat ;?></td>
			<td><?php echo $row->nama_obat ;?></td>
			<td><?php echo $row->harga_obat ;?></td>

			
		</tr>
		<?php }?>
	</tbody>
</table>