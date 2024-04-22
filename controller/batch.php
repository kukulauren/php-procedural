<?php
function index(){
    $sql="SELECT * FROM batches LIMIT 10";
    $rows=get($sql);
    return view("batch",["batches"=>$rows]);
}
function delete(){
    $id=$_GET['id'];
    $sql="DELETE FROM batches WHERE id=$id";
    if(runQuery($sql)){
        redirect(url('batch'));
    }
    
}