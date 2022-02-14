<?php
class Mahasiswa{
	private $nim = 0;
	private $nama = 0;
	private $jk = 0;
	private $prodi = 0;
	private $sem = 0;


	public function __construct($nim = 0, $nama =0, $jk = 0, $prodi = 0, $sem = 0){
		$this->nim = $nim;
		$this->nama = $nama;
		$this->jk = $jk;
		$this->prodi = $prodi;
		$this->sem = $sem;
	}

	public function setNim($nim){
		$this->nim = $nim;
	}
	public function getNim(){
		return $this->nim;
	}

	public function setNama($nama){
		$this->nama = $nama;
	}
	public function getNama(){
		return $this->nama;
	}

	public function setJk($jk){
		$this->jk = $jk;
	}
	public function getJk(){
		return $this->jk;
	}

	public function setProdi($prodi){
		$this->prodi = $prodi;
	}
	public function getProdi(){
		return $this->prodi;
	}
	public function setSem($sem){
		$this->sem = $sem;
	}
	public function getSem(){
		return $this->sem;
	}





}


?>