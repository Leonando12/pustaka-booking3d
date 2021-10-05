<?php
class model_latihan1 extends CI_model
{
    //variable untuk menampung nilai 
    public $nilai1, $nilai2, $nilai3;

    //method untuk operasi penjumlahan 
    public function jumlah($n1 = null, $n2 = null)
    {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->