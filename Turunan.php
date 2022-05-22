<?php

//childs class
class Roda extends Kendaraan{
	private $jumlah_roda;
	// private $harga;
	// private $warna;
    // private $bahan_bakar;
    // private $status_harga;
    // private $tahun_pembuatan;
    // private $harga_bekas;
    // private $harga_subsidi;
	
	function __construct(){
	}

    function setRoda($jumlah_roda){
            $this->jumlah_roda = $jumlah_roda;
        }
        
        function getRoda(){
            return $this->jumlah_roda;
        }
        
    function __destruct(){
    }
}

class Harga extends Kendaraan{
	private $harga;
	// private $warna;
    // private $bahan_bakar;
    // private $status_harga;
    // private $tahun_pembuatan;
    // private $harga_bekas;
    // private $harga_subsidi;
	
	function __construct(){
	}

    function setHarga($harga){
            $this->harga = $harga;
        }
        
        function getHarga(){
            return $this->harga;
        }
        
    function __destruct(){
    }
}

class Warna extends Kendaraan{
	private $warna;
    // private $bahan_bakar;
    // private $status_harga;
    // private $tahun_pembuatan;
    // private $harga_bekas;
    // private $harga_subsidi;
	
	function __construct(){
	}

    function setWarna($warna){
            $this->warna = $warna;
        }
        
        function getWarna(){
            return $this->warna;
        }
        
    function __destruct(){
    }
}
 
class Bahan_Bakar extends Kendaraan{
    private $bahan_bakar;
    // private $status_harga;
    // private $tahun_pembuatan;
    // private $harga_bekas;
    // private $harga_subsidi;
	
	function __construct(){
	}

    function setBahanBakar($bahan_bakar){
            $this->bahan_bakar = $bahan_bakar;
        }
        
        function getBahanBakar(){
            return $this->bahan_bakar;
        }
        
    function __destruct(){
    }
}

class Status_Harga extends Kendaraan{
    private $status_harga;
    // private $tahun_pembuatan;
    // private $harga_bekas;
    // private $harga_subsidi;
	
	function __construct(){
	}

    function setStatusHarga($status_harga){
            $this->status_harga = $status_harga;
        }
        
        function getStatusHarga(){
            return $this->status_harga;
        }
        
    function __destruct(){
    }
}

class Tahun_Pembuatan extends Kendaraan{
    private $tahun_pembuatan;
    // private $harga_bekas;
    // private $harga_subsidi;
	
	function __construct(){
	}

    function setTahunPembuatan($tahun_pembuatan){
            $this->tahun_pembuatan = $tahun_pembuatan;
        }
        
        function getTahunPembuatan(){
            return $this->tahun_pembuatan;
        }
        
    function __destruct(){
    }
}

class Harga_Bekas extends Kendaraan{
     private $harga_bekas;
    // private $harga_subsidi;
	
	function __construct(){
	}

    function setHargaBekas($harga_bekas){
            $this->harga_bekas = $harga_bekas;
        }
        
        function getHargaBekas(){
            return $this->harga_bekas;
        }
        
    function __destruct(){
    }
}

class Harga_Subsidi extends Kendaraan{
   private $harga_subsidi;
   
   function __construct(){
   }

   function setHargaSubsidi($harga_subsidi){
           $this->harga_subsidi = $harga_subsidi;
       }
       
       function getHargaSubsidi(){
           return $this->harga_subsidi;
       }
       
   function __destruct(){
   }
}

?>