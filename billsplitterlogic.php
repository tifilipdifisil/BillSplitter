<?php

if (isset($_GET['tabtotal']) && ($_GET['tabsplit']) && isset($_GET['tip'])){
$tabtotal=$_GET['tabtotal'];
$tabsplit=$_GET['tabsplit'];
$tip     =$_GET['tip'];
}
else{
    $tabtotal='';
    $tabsplit='';
    $tip     ='';
}
if($tabtotal && $tabsplit && $tip){
    $tipCal= $tabtotal*$tip;
    $result= ($tipCal+$tabtotal)/$tabsplit;
}

else{
    $result='';

}

if (isset($_GET['checked'])){
$roundup = ceil($result);
$result =$roundup;
}
else{
    $results='';
}

