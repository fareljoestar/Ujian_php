<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<b>Sisa Daya Baterai</b>

    <?php

    function hitung_sisa_daya_baterai($daya_awal, $penggunaan) {
        $sisa_daya_baterai = $daya_awal - $penggunaan;

        if ($sisa_daya_baterai <= 20) {
            echo "<p style='color: red;'>Sisa daya baterai 20%. Harap sambungkan ke sumber daya segera.</p>";
            if ($sisa_daya_baterai <= 10)
            echo "<p style='color: red;'>Sisa daya baterai 10% . Harap sambungkan ke sumber daya segera.</p>";
            if ($sisa_daya_baterai <= 5)
            echo "<p style='color: red;'>Sisa daya baterai 5% . Harap sambungkan ke sumber daya segera.</p>";
            if ($sisa_daya_baterai <= 2)
            echo "<p style='color: red;'>Sisa daya baterai 2% . Harap sambungkan ke sumber daya segera.</p>";
        } else {
            echo "<p>Sisa daya baterai: " . $sisa_daya_baterai . "%</p>";
        }
    }

    if (isset($_POST["submit"])) {
        $daya_awal_baterai = $_POST["daya_awal_baterai"];
        $penggunaan_baterai = $_POST["penggunaan_baterai"];

        if (is_numeric($daya_awal_baterai) && is_numeric($penggunaan_baterai)) {
            hitung_sisa_daya_baterai($daya_awal_baterai, $penggunaan_baterai);
        } else {
            echo "<p style='color: red;'>Masukkan angka yang valid untuk daya awal baterai dan penggunaan baterai.</p>";
        }
    }

    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="daya_awal_baterai">Daya Awal Baterai:</label>
        <input type="text" name="daya_awal_baterai" id="daya_awal_baterai" required>
        <br><br>
        <label for="penggunaan_baterai">Penggunaan Baterai:</label>
        <input type="text" name="penggunaan_baterai" id="penggunaan_baterai" required>
        <br><br>
        <center><input type="submit" value="Hitung" name="submit"></center>
    </form>

</body>
</html>
