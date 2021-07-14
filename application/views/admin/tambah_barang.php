<div class="container-fluid">
    <h3><i class="fas fa-edit mr-3"></i>TAMBAH DATA BARANG</h3>
    <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label>Nama Barang</label>
    <input type="text" name="nama_brg" class="form-control" placeholder="Nama Barang">
</div>
<div class="form-group">
    <label>Keterangan</label>
    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
</div>
<div class="form-group">
    <label>Kategori</label>
    <select class="form-control" name="kategori">
        <option>Top</option>
        <option>Bottom</option>
        <option>Dress</option>
        <option>Set</option>
        <option>Jumpsuit</option>
        <option>Outer</option>
        <option>Skirt</option>
        <option>Accessories</option>
    </select>
</div>
<div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" class="form-control" placeholder="Harga Barang">
</div>
<div class="form-group">
    <label>Stok</label>
    <input type="text" name="stok" class="form-control" placeholder="Jumlah Stok">
</div>
<div class="form-group">
    <label>Warna</label>
    <select class="form-control" name="warna">
        <option>White</option>
        <option>Black</option>
        <option>Pink</option>
        <option>Red</option>
        <option>Brown</option>
        <option>Cream</option>
        <option>Green</option>
        <option>Blue</option>
    </select>
</div>
<div class="form-group">
    <label>Nilai Kenyamanan</label>
    <select class="form-control" name="r_kenyamanan">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
    </select>
</div>
<div class="form-group">
    <label>Nilai Harga</label>
    <select class="form-control" name="r_harga">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
    </select>
</div>
<div class="form-group">
    <label>Nilai Formalitas</label>
    <select class="form-control" name="r_formalitas">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
    </select>
</div>
<div class="form-group">
    <label>Gambar Produk</label><br>
    <input type="file" name="gambar" class="form-control">
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-success">Save</button>
</div>
</form>
</div>