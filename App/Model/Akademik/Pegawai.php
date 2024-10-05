<?php

namespace App\Model\Akademik;

class Pegawai {
    public int $nip;
    public string $nama;
    private int $no_hp;
    public string $alamat;

    public function __construct(int $nip,string $nama,int $no_hp,string $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn() {
        return true; 
    }
    public function cekOut() {
        return true; 
    }

    protected function getNoHP() {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp) {
        $this->no_hp = $no_hp;
    }
}


