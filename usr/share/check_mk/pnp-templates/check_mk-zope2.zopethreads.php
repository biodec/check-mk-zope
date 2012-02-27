<?php

# TODO: .../buildout/parts/instance/etc/zope.conf
$parts = explode("_", $servicedesc);
$instance = $parts[sizeof($parts) - 3];

$opt[1] = "--title \"Threads For $hostname / $instance\" ";

$def[1] =  
    "DEF:total=$RRDFILE[1]:$DS[1]:MAX ".
    "AREA:total#202020:\"Total \" ".
    "GPRINT:total:LAST:\"%3lg LAST \" ".
    "GPRINT:total:AVERAGE:\"%3lg AVERAGE \" ".
    "GPRINT:total:MAX:\"%3lg MAX\\n\" ".
    "";
    
$def[1] .= 
    "DEF:free=$RRDFILE[2]:$DS[2]:MAX ".
    "AREA:free#4080c0:\"Free \" ".
    "GPRINT:free:LAST:\"%2lg LAST \" ".
    "GPRINT:free:AVERAGE:\"%2lg AVERAGE \" ".
    "GPRINT:free:MAX:\"%2lg MAX \" ".
    "";

?>

