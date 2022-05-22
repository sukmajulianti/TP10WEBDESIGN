<?php

class Kendaraan{

	private $nama;
	private $alamat;
	private $no_ktp;
	private $no_telepon;
	
	function __construct(){
	}
	
	function setNama($nama){
		$this->nama = $nama;
	}
	
	function getNama(){
		return $this->nama;
	}
	
	function setAlamat($alamat){
		$this->alamat = $alamat;
	}
	
	function getAlamat(){
		return $this->alamat;
	}
	
	function setNoKTP($no_ktp){
		$this->no_ktp = $no_ktp;
	}
	
	function getNoKTP(){
		return $this->no_ktp;
	}
	
	function setNoTelepon($no_telepon){
		$this->no_telepon = $no_telepon;
	}
	
	function getNoTelepon(){
		return $this->no_telepon;
	}
	
	function __destruct(){
	}
}

?>
	
	
	
	