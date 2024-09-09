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
$pp = new PersegiPanjang();
echo $pp -> rumus(32, 22);
?>
