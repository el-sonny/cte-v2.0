<?php
class default_config{
	public function __construct(){
		//system configuration
		$this->site_name =  'comparatuescuela.org';
		$this->theme = 'mtev1';
		$this->default_controler = 'home';
		$this->default_action = 'index';
	
		//Security 
		$this->secured = false;
		
		//Sofware
		$this->document_root = $_SERVER['DOCUMENT_ROOT']."/";
		$this->lang = "en";
		$this->dev_mode = false;
		
		//MTE
		$this->semaforos = array('Reprobado','De panzazo','Bien','Excelente','No Enlace','Poco confiable');

		//Change.org
		$this->change_api_key = '944f03ed498ad797d7aa93901b48cceaef444f49c6fdcc72caaf6d1801772f09';
		$this->change_secret_token = 'c2a7dd3596774463d3138cc3be72ffb2d2c4611973ae5ff5304b489b8ec9f61e';
	}
}
?>