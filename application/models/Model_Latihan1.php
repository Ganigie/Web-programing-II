<?php
class Model_Latihan1 extends CI_Model
{
    //membuat variable untuk menampung nilai
    public $nilai1,$nilai2,$hasil;

    //Method penjumlahan
    public function jumlah ($n1=null,$n2=null)
    {
        $this-> nilai1 = $nilai1;
        $this-> nilai2 = $nilai2;
        $this-> hasil = $this-> nilai1 + $this-> nilai2;
        return $this->hasil;
    }
        

    
}