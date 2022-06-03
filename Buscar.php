<?php
    //$archivoxml = file_get_contents("Estudiantes.json");
    $archivoxml = simplexml_load_file("Estudiantes.xml");
    //$descifrarxml = json_decode($archivoxml, true);
    //$estudiantes = $descifrarxml['estudiante'];
    $q = $_REQUEST["q"];


    $hint ="";

    if ($q !== ""){
        $q = strtolower($q);
        $len=strlen($q);
        /*
        foreach($estudiantes as $name){
            if (stristr($q, substr(strtolower($name['nombre']), 0, $len)) || stristr($q, substr(strtolower($name['apellido']),0, $len))){
                if ($hint === ""){
                    $hint = $name['nombre']." ".$name['apellido'];
                }
            }
        }
        */
        foreach($archivoxml -> caracteristicas as $name){
            if (stristr($q, substr(strtolower($name->nombre), 0, $len)) || stristr($q, substr(strtolower($name->apellido),0, $len))){
                if ($hint === ""){
                    $hint = $name->nombre." ".$name->apellido;
                }
            }

        }
    }
    echo $hint === "" ? "no suggestion" : $hint;
?>