<?php
function view(string $file,array $data=null):bool{
    is_null($data)?"": extract($data);
    require_once __DIR__."/views/".$file.".php";
    return true;
}
function controller(string $filefun):bool{
    $arr=explode("@",$filefun);
    // print_r($arr);
    $controllerFile=$arr[0];
    $controllerFunction=$arr[1];
    require_once __DIR__."/controller/".$controllerFile.".php";
    call_user_func($controllerFunction);
    return true;
}
function routing($routes):void{
    $path = $_SERVER['PATH_INFO'] ?? "/";

    $current= $routes[$path]??false;
    if($current){
        controller($current);
    }else{
        view("not-found");
    }
}
function asset(string $filePath):string{
    $fullUrl=(isset($_SERVER["HTTPS"])?"https://":"http://").$_SERVER['HTTP_HOST']."/".ltrim($filePath,"/");
    return $fullUrl;
}
function url(string $filePath, array $data=null):string{
    $fullUrl=(isset($_SERVER["HTTPS"])?"https://":"http://").$_SERVER['HTTP_HOST']."/".ltrim($filePath,"/").( is_null($data)?"":"?".http_build_query($data) );
    return $fullUrl;
}

function template(string $name):void{
    require_once __DIR__."/views/templates/".$name.".php";
}

function connect():object{
    global $configs;
    return mysqli_connect($configs["db_host"],$configs["db_user"],$configs["db_password"],$configs["db_name"]);
}

function dd($data){
    echo "<div style='background-color: rgb(17, 17, 17); padding: 10px; color: rgb(210, 210, 210); border-radius:20px; line-height:2;'>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    echo "<div/>";
}

function runQuery(string $sql):mixed{
    $con=connect();
    $query=mysqli_query($con,$sql);
    return $query;
}

function first(string $sql):mixed{
    $query=runQuery($sql);
    $row=mysqli_fetch_assoc($query);
    return $row;
}

function get(string $sql):mixed{
    $query=runQuery($sql);
    $rows=[];
    while($row=mysqli_fetch_assoc($query)){
        $rows[]=$row; 
    }
    return $rows;
}

function redirect(string $url):void{
    header("Location:$url");
}

function json(array $data):void{
    header("Content-Type:application/json");
    echo json_encode($data);
}