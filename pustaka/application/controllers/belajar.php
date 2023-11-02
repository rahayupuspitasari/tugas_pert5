<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class belajar extends CI_Controller
{
    public function index()
    {
        $nilai1=4;
        $nilai2=6;
        $tambah=$nilai1+$nilai2;
        echo "operator <br>";
        echo "hasil dari $nilai1+$nilai2=",$tambah;
    }


    public function biodataa()
    {
        $nim=19220945;
        $nama="rahayu puspitasari";
        $kelas="19.3a.04";
        $prodi="sistem informasi";
        echo "NIM= $nim <br>";
        echo "NAMA= $nama <br>";
        echo "KELAS= $kelas <br>";
        echo "PRODI= $prodi <br>";


    }
    public function biodata()
    {
        $data=array(
            'no_barang'=>"22556314",
            'nama_barang'=>"penghapus",
            'qty'=>"90"
        );
        
        $this->load->view('view_belajar',$data);
    }
}
