<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div><br><br>
            <h4>Input Alamat Pengiriman dan Pembayaran</h3>
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>dashboard/proses_pesanan">

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                        <?php echo form_error('nama', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap">
                        <?php echo form_error('alamat', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input class="form-control" type="text" name="no_telp" placeholder="Nomor Telepon">
                        <?php echo form_error('no_telp', '<div class="text-danger small ml-2 mt-2">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select class="form-control" name="kurir">
                            <option>JNE</option>
                            <option>TIKI</option>
                            <option>POS Indonesia</option>
                            <option>GOJEK</option>
                            <option>GRAB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pilih Pembayaran</label>
                        <select class="form-control" name="bank">
                            <option>BCA 5350143884 a.n Laurent Gracia</option>
                            <option>BCA 581 059 1091 a.n Richelle Erika</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Bukti Pembayaran</label><br>
                        <input type="file" name="bukti" class="form-control">
                    </div>

                    <a href="#modalPesan" data-toggle="modal" onclick="$('#modalPesan #formPesan')">
                        <div class="btn btn-primary mb-3">Pesan</div>
                    </a>
                    <div class="modal fade" id="modalPesan">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"> Pastikan data yang diberikan sudah benar! </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-footer">
                                    <form id="formPesan" action="" method="post">
                                        <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-success">Pesan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php
                } else {
                    echo "<h4 class=m-4>Keranjang Belanja Anda Masih Kosong<br>";
                    echo "<a href=../welcome class=small>Mulai Berbelanja</a>";
                } ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>