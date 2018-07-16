<?php
if(!function_exists("ouvreBase")){
	function ouvreBase($dbn="labo")
	{
        $user="root";
        
        $pass="Boeing737nextgen";
        
        $dsn="mysql:host=localhost;dbname=$dbn";
        
        $base=new PDO ($dsn, $user, $pass);
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");
        
		return $base;
	}
}
?>