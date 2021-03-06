<?php
class entidad extends table{
	function info(){
		$this->table_name = "entidades";
		$this->has_many['municipios'] = 'municipio';
		$this->has_many_keys['municipios'] = 'entidad';
		$this->has_many['localidades'] = 'localidad';
		$this->has_many_keys['localidades'] = 'entidad';
	}
}
class municipio extends table{
	function info(){
		$this->table_name = "municipios";
		$this->objects['entidad'] = 'entidad';
	}	

}
class localidad extends table{
	function info(){
		$this->table_name = "localidades";
		$this->has_many['escuelas'] = "escuela";
		$this->has_many_keys['escuelas'] = "localidad";
	}

}
class enlace extends table{
	function info(){
		$this->table_name = 'enlaces';
		$this->objects['escuelas'] = 'cct';
	}

}
class nivel extends table{
	function info(){
		$this->table_name = "niveles";
	}
}

class subnivel extends table{
	function info(){
		$this->table_name = "subniveles";
	}
}
class servicio extends table{
	function info(){
		$this->table_name = "servicios";
	}
}
class modalidad extends table{
	function info(){
		$this->table_name = "modalidades";
	}
}
class control extends table{
	function info(){
		$this->table_name = "controles";
	}
}
class subcontrol extends table{
	function info(){
		$this->table_name = "subcontroles";
	}
}
class sostenimiento extends table{
	function info(){
		$this->table_name = "sostenimientos";
	}
}
class status extends table{
	function info(){
		$this->table_name = "statuses";
	}
}
class turno extends table{
	function info(){
		$this->table_name = "turnos";
	}
}
class tipo extends table{
	function info(){
		$this->table_name = "tipos";
	}
}
class colonia extends table{
	function info(){
		$this->table_name = "colonias";
	}
}
class calificacion extends table{
	function info(){
		$this->table_name = 'calificaciones';
		$this->objects['cct'] = 'escuela';

		$this->has_many['likes'] = 'calificacion_like';
		$this->has_many_keys['likes'] = 'calificacion';
	}
}
class calificacion_like extends table{
	function info(){
		$this->table_name = 'calificacion_likes';
		$this->objects['calificacion'] = 'calificacion';

	}
}
class reporte_ciudadano extends table{
	function info(){
		$this->table_name = 'reportes_ciudadanos';
		$this->objects['cct'] = 'escuela';

		$this->has_many['likes'] = 'reporte_ciudadano_like';
		$this->has_many_keys['likes'] = 'denuncia'; 
	}
}
class reporte_ciudadano_like extends table{
	function info(){
		$this->table_name = 'reportes_ciudadano_likes';
		$this->objects['reporte_ciudadano'] = 'reporte_ciudadano';
	}
}
?>