<?php
    $strSearch = $_GET["name"];
    
    $number = $_GET["number"];
    
    if ($strSearch == null){
        echo "Não existem argumentos para serem procurados";
        exit();
    }
        
    $names = array("Rodrigo", "Roberto", "Rafael", "Ricardo");

    $results = array();


    $find = false;
    foreach($names as $name) {
        $substr = substr($name, 0, $number);
        if (strtoupper($substr) == strtoupper($strSearch)){
            $results[] = $name;
            $find = true;
        }
    }

    $json = "";
    if ($find == true){
        foreach($results as $found) {
            $json .= "{\"name\":\"" . $found . "\"},";
        }

        $json = substr($json, 0, strlen($json) - 1);
        $json = "[" . $json. "]";
    }

    echo $json;
?>