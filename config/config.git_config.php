<?php
class git_config extends default_config{
	public function git_config(){
		parent::__construct();
		//Site
		$this->http_address = 'http://comparatuescuela.proyects.spaceshiplabs.com/';
		$this->mxnphp_dir = "/var/www/mxnphp/";
		
		//Database
		$this->db_host = 'localhost';
		$this->db_name = 'comparatuescuela';
		$this->db_user = 'root';
		$this->db_pass = 'RtG/()rERtfkfGKLF';
		
		//MXNPHP
		$this->dev_mode = true;
		
	}
}
?>