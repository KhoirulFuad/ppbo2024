<?php

use App\Admin\Dosen;

$dian = new Dosen(
    198411132015041001,     
    "Dian Prawira",         
    62111111,               
    "Jln Purnama",          
    "0013118405"            
);

echo "Nama Dosen: " . $dian->nama . "\n";          
echo "NIP: " . $dian->nip . "\n";                 
echo "NIDN: " . $dian->nidn . "\n";               
echo "Nomor HP: " . $dian->getNoHP() . "\n";      
echo "Alamat: " . $dian->alamat . "\n";           

$dian->mengajar(); 

?>
