<?php
class Welcome extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
        $this->load->model('m_laporan');
	}
	
	function index(){
		$this->load->view('admin/v_index');
	}

	function profil(){
		$this->load->view('admin/v_profil');
	}

	function barang(){
	if($this->session->userdata('akses')=='1'){
		$x['data']=$this->m_laporan->get_stok_barang();
		$x['jml']=$this->m_laporan->get_total_stok_barang();
		$this->load->view('admin/laporan/v_plap_stok_barang',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function transaksi(){
	if($this->session->userdata('akses')=='1'){
		$x['data']=$this->m_laporan->get_data_penjualan();
		$x['jml']=$this->m_laporan->get_total_penjualan();
		$this->load->view('admin/laporan/v_plap_penjualan',$x);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}