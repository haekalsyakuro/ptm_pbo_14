<?php
class mobil_lama{
    public function nama _kendaraan(){
        return "mobil: lexus, 100kmh, 2000";
    }

}
$dealer= new mobil_lama();
echo $dealer->nama_kendaraan();
?>