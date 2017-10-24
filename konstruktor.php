<DOCTYPE html>
<html>
<head>
<title></title>
<body>
<?php
 
 class robot {
 	public $suara;
 	public $berat;
 	public $nama;
 	public $warna;

 	public function __construct ($suara,$berat,$nama,$warna)
 	{
 		$this->suara = $suara;
 		$this->berat = $berat;
 		$this->nama  = $nama ;
 		$this->warna = $warna;
 	}
 	public function set_suara($suara)
 	{
 		$this->suara = $suara;
 	}
 	public function get_suara()
 	{
 		return $this->suara;
 	}
    public function set_berat($berat)
 	{
 		$this->berat = $berat;
 	}	
 	public function get_berat()
 	{
 		return $this->berat;
 	}
 	public function set_nama($nama)
 	{
 		$this->nama = $nama;
 	}	
 	public function get_nama()
 	{
 		return $this->nama;
 	}
 	public function set_warna($warna)
 	{
 		$this->warna = $warna;
 	}	
 	public function get_warna()
 	{
 		return $this->warna;
 	}


 }
 


?>
	
</body>
</head>
</html>