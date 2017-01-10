<?php
mysql_connect("localhost","root","") or DIE ("Belum terkoneksi dengan MySQL");
mysql_select_db("e_koperasi") or DIE ("Belum terkoneksi dengan Database");
$provinsi = $_GET['IdProvinsi'];
$kota = mysql_query("SELECT * FROM kota WHERE IdProvinsi='$provinsi'");
echo "<option value='0'> Pilih Kota </option>";
while($k = mysql_fetch_array($kota)){
    echo "<option value=\"".$k['IdKota']."\">".$k['NamaKota']."</option>\n";
}?>
