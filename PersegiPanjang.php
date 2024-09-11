<?php
class PersegiPanjang
{
    public $panjang;
    public $lebar;
    public function rumus($panjang,  $lebar)
    {
        $luaspp = $panjang * $lebar;
        return $luaspp;
    }

}