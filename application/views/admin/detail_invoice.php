<div class="container-fluid">
    <div class="card">
        <h4 class="card-header">Detail Pesanan <div class="btn btn-sm btn-success">No.Invoice: <?php echo $invoice->id ?></div>
        </h4>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo base_url() . '/uploads/' . $invoice->bukti ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table table-bordered table-hover table-striped">

                        <tr>
                            <th>ID BARANG</th>
                            <th>NAMA PRODUK</th>
                            <th>JUMLAH PESANAN</th>
                            <th>HARGA SATUAN</th>
                            <th>SUB-TOTAL</th>
                        </tr>
                        <?php $total = 0;
                        foreach ($pesanan as $psn) :
                            $subtotal = $psn->jumlah * $psn->harga;
                            $total += $subtotal;
                        ?>

                            <tr>
                                <td><?php echo $psn->id_brg ?></td>
                                <td><?php echo $psn->nama_brg ?></td>
                                <td><?php echo $psn->jumlah ?></td>
                                <td>Rp. <?php echo number_format($psn->harga, 0, ',', '.') ?></td>
                                <td>Rp. <?php echo number_format($subtotal, 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>

                        <tr>
                            <td colspan="4" align="middle">Grand Total</td>
                            <td>Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
                        </tr>
                    </table>
                    <table>
                        <br>
                </div>
            </div>
        </div>
        <a href="<?php echo base_url('admin/invoice/index') ?>">
            <div class="btn btn-sm btn-primary">Kembali</div>
        </a>
    </div>