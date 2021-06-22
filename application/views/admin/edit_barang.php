<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit Data barang</h3>

	<?php foreach($barang as $brg) : ?>
		
		<form method="post" action="<?php echo base_url().'admin/produk/update' ?>">
			<div class="for-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg?>">
			</div>
			<div class="for-group">
				<label>Keterangan</label>
				<input type="hidden" name="tb_brg" value="<?php echo $brg->tb_brg ?>">
				<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan?>">
			</div>
			<div class="for-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori?>">
			</div>
			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga?>">
			</div>
			<div class="for-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok?>">
			</div>
			<br>
			<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
		</form>

	<?php endforeach; ?>
</div>