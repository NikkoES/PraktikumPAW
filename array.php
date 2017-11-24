<?php

//asosiatif
$mhs = array('Nama' => 'Nikko',
				'NIM' => '1157050115',
				'Alamat' => 'Jakarta',
				'Jenis Kelamin' => 'Laki-laki' );
$mhs['nilai'] = array('semester1' => array('PKN' => 90,
											'B. Arab' => 90,
											'B. Inggris' => 80),
						'semester2' => array('Daspro' => 90,
											'Algoritma' => 90,
											'Kalkulus' => 80)
					);
echo "<pre>";
print_r($mhs);
foreach ($mhs as $key => $value) {
	if($key=='nilai'){
		foreach ($mhs['nilai'] as $k => $v) {
			echo "<br> Nilai : $k <br>";
			foreach ($v as $k_nilai => $v_nilai) {
				echo " - $k_nilai : $v_nilai <br> ";
			}
		}
	}
	else{
		echo "$key : $value <br/>";
	}
}

//numeric
// key indeks angka 0 - 10

?>