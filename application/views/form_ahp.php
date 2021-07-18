<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-dark">

                <h5>Kami akan membantu anda mendapatkan produk yang paling sesuai berdasarkan keputusan anda</h5>

            </div><br><br>
            <h4>Input Nilai Perbandingan</h4>
            <form method="post" action="<?php echo base_url() ?>ahp/filter_item_by_criteria">
                <table class="table table-bordered">
                    <tr align="middle">
                        <th>NO</th>
                        <th>Kriteria I</th>
                        <th>Kriteria II</th>
                        <th colspan="3">Nilai</th>
                    </tr>

                    <tr align="middle">
                        <td>1</td>
                        <td><input type="radio" checked name="kevsha" value="1"> Kenyamanan</td>
                        <td> <input type="radio" name="kevsha" value="2"> Harga</td>
                        <td>
                        <select class="form-control" name="r_kevsha">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        </td>
                    </tr>
                    <tr align="middle">
                        <td>2</td>
                        <td> <input type="radio" checked name="kevsfo" value="1"> Formalitas</td>
                        <td><input type="radio" name="kevsfo" value="2"> Kenyamanan</td>
                        <td>
                        <select class="form-control" name="r_kevsfo">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        </td>
                    </tr>
                    <tr align="middle">
                        <td>3</td>
                        <td><input type="radio" checked name="havsfo" value="1"> Harga</td>
                        <td> <input type="radio" name="havsfo" value="2"> Formalitas</td>
                        <td>
                        <select class="form-control" name="r_havsfo">
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
                        </td>
                    </tr>
                </table>

                <h4>Input Produk Yang Ingin Dibandingkan</h4>
                <div class="form-group">
                    <label>Produk 1</label>
                    <select class="form-control" name="product_comp_1">
                        <option value=1>Walter Set</option>
                        <option>TIKI</option>
                        <option>POS Indonesia</option>
                        <option>GOJEK</option>
                        <option>GRAB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Produk 2</label>
                    <select class="form-control" name="product_comp_2">
                        <option value=11>Roger Set</option>
                        <option>BNI - 731991</option>
                        <option>BRI - 124813</option>
                        <option>MANDIRI - 342939</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Produk 3</label>
                    <select class="form-control" name="product_comp_3">
                        <option value=13>Li Yen Dress</option>
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