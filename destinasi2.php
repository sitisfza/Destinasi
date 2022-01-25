<?php
echo "<br>";
if (isset($_POST["proses"])) {
    $pilih = $_POST["pilih"];
    if ($pilih == "1") {
?>
        <h3 align="center">Bukit Bintang</h3>
        <table align="center">
            <tr>
                <td>
                <td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>Rp. 10.000</td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type="text" name="tiket"></td>
            </tr>
            <tr>
                <td>Total uang yang akan dibayar</td>
                <td>:</td>
                <td><input type="text" name="bayar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="satu" value="Proses"></td>
            </tr>
        </table>

    <?php } else if ($pilih == "2") { ?>
        <h3 align="center">Pantai Sadrana</h3>
        <table align="center">
            <tr>
                <td>
                <td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>Rp. 15.000</td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type="text" name="tiket"></td>
            </tr>
            <tr>
                <td>Total uang yang akan dibayar</td>
                <td>:</td>
                <td><input type="text" name="bayar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="dua" value="Proses"></td>
            </tr>
        </table>

    <?php } elseif ($pilih == "3") { ?>
        <h3 align="center">Candi Borobudur</h3>
        <table align="center">
            <tr>
                <td>
                <td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type="text" name="tiket"></td>
            </tr>
            <tr>
                <td>Total uang yang akan dibayar</td>
                <td>:</td>
                <td><input type="text" name="bayar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tiga" value="Proses"></td>
            </tr>
        </table>

    <?php } elseif ($pilih == "4") { ?>
        <h3 align="center">Candi Prambanan</h3>
        <table align="center">
            <tr>
                <td>
                <td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type="text" name="tiket"></td>
            </tr>
            <tr>
                <td>Total uang yang akan dibayar</td>
                <td>:</td>
                <td><input type="text" name="bayar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tiga" value="Proses"></td>
            </tr>
        </table>

    <?php } elseif ($pilih == "5") { ?>
        <h3 align="center">Keraton Yogyakarta</h3>
        <table align="center">
            <tr>
                <td>
                <td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>Rp. 15.000</td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type="text" name="tiket"></td>
            </tr>
            <tr>
                <td>Total uang yang akan dibayar</td>
                <td>:</td>
                <td><input type="text" name="bayar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="empat" value="Proses"></td>
            </tr>
        </table>

    <?php } elseif ($pilih == "6") { ?>
        <h3 align="center">Malioboro</h3>
        <table align="center">
            <tr>
                <td>
                <td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>Rp. 5.000</td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type="text" name="tiket"></td>
            </tr>
            <tr>
                <td>Total uang yang akan dibayar</td>
                <td>:</td>
                <td><input type="text" name="bayar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="empat" value="Proses"></td>
            </tr>
        </table>

    <?php } elseif ($pilih == "7") { ?>
        <h3 align="center">Cafe Pendopo Lawas</h3>
        <h4 align="center">Pilih Menu Makanan / Minuman</h4>
        <table align="center" cellpadding="6">
            <tr>
                <th colspan="2">MENU</th>
            </tr>
            <tr>
                <th>Makanan</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td>1. Mie Goreng</td>
                <td>Rp. 15.000</td>
            </tr>
            <tr>
                <td>2. Ayam Goreng</td>
                <td>Rp. 10.000</td>
            </tr>
            <tr>
                <td>3. Ayam Geprek</td>
                <td>Rp. 13.000</td>
            </tr>
            <tr>
                <th>Minuman</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td>1. Green Tea</td>
                <td>Rp. 10.000</td>
            </tr>
            <tr>
                <td>2. Bubble Tea</td>
                <td>Rp. 15.000</td>
            </tr>
            <tr>
                <td>3. Jus Buah</td>
                <td>Rp. 10.000</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>

        <div class="menu">
            <label for="pilih">Pilih Menu = </label>
            <input type="text" name="pilih" id="pilih" />

            <input type="text" name="jumlah" placeholder="Masukkan Jumlah Pesanan">
            <input type="text" name="bayar" placeholder="Bayar">
            <input type="submit" name="menu" value="Pesan">
        </div>
    <?php } elseif ($pilih == "8") { ?>
        <h3 align="center">Goa Pindul</h3>
        <table align="center">
            <tr>
                <td>
                <td>
            </tr>
            <tr>
                <td>Harga Tiket/Orang</td>
                <td>:</td>
                <td>Rp. 100.000</td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type="text" name="tiket"></td>
            </tr>
            <tr>
                <td>Bayar</td>
                <td>:</td>
                <td><input type="text" name="bayar"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="lima" value="Proses"></td>
            </tr>
        </table>

<?php }
}
