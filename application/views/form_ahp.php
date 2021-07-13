<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-dark">

                <h5>Kami akan membantu anda mendapatkan produk yang paling sesuai berdasarkan keputusan anda</h5>

            </div><br><br>
            <h4>Input Nilai Perbandingan</h4>
            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                <table class="table table-bordered">
                    <tr align="middle">
                        <th>NO</th>
                        <th>Kriteria I</th>
                        <th>Kriteria II</th>
                        <th colspan="3">Nilai</th>
                    </tr>

                    <tr align="middle">
                        <td>1</td>
                        <td>Kenyamanan</td>
                        <td>Harga</td>
                        <td><?php echo ('<input class="text"></input>') ?>
                        </td>
                    </tr>
                    <tr align="middle">
                        <td>2</td>
                        <td>Kenyamanan</td>
                        <td>Formalitas</td>
                        <td><?php echo ('<input class="text"></input>') ?>
                        </td>
                    </tr>
                    <tr align="middle">
                        <td>3</td>
                        <td>Harga</td>
                        <td>Formalitas</td>
                        <td><?php echo ('<input class="text"></input>') ?>
                        </td>
                    </tr>
                </table>

                <h4>Input Produk Yang Ingin Dibandingkan</h4>
                <div class="form-group">
                    <label>Produk 1</label>
                    <select class="form-control">
                        <option>Walter Set</option>
                        <option>TIKI</option>
                        <option>POS Indonesia</option>
                        <option>GOJEK</option>
                        <option>GRAB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Produk 2</label>
                    <select class="form-control">
                        <option>Roger Set</option>
                        <option>BNI - 731991</option>
                        <option>BRI - 124813</option>
                        <option>MANDIRI - 342939</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Produk 3</label>
                    <select class="form-control">
                        <option>Li Yen Dress</option>
                        <option>BNI - 731991</option>
                        <option>BRI - 124813</option>
                        <option>MANDIRI - 342939</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">OK</button>
            </form>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>