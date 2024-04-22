<?php

function index():void{
    $sql="SELECT * FROM courses LIMIT 10";
    $rows=get($sql);
    view("courses",["courses"=>$rows]);
}
function store(){

}
function delete():void{
    $id=$_GET['id'];
    if(runQuery("DELETE FROM courses where id=$id")){
        redirect(url("courses"));
    }
}