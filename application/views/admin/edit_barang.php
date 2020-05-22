<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

	<?php foreach($barang as $brg) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">
		
		<div class="form-group">
			<label>NAMA BARANG</label>
			<input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang ?>">
		</div>
		
		<div class="form-group">
			<label>NAMA BARANG</label>
			<input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang ?>">
		</div>

		<div class="form-group">
			<label>DESKRIPSI</label>
			<input type="hidden" name="id_barang" class="form-control" value="<?php echo $brg->id_barang ?>">
			<input type="text" name="deskripsi" class="form-control" value="<?php echo $brg->deskripsi ?>">
		</div>

		<div class="form-group">
			<label>HARGA</label>
			<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
		</div>

		<div class="form-group">
			<label>KATEGORI</label>
			<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
		</div>

		<div class="form-group">
			<label>STOK</label>
			<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
		</div>

		<button type="submit" class="btn btn-primary btn-sm mt-3">simpan</button>
	
	</form
	
	<?php endforeach ?>

</div>