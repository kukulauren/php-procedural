<?php
function courses(){
    $sql="SELECT * FROM courses LIMIT 10";
    $rows=get($sql);
    json($rows);
}
function batches(){
    $sql="SELECT * FROM batches LIMIT 10";
    $rows=get($sql);
    json($rows);
}