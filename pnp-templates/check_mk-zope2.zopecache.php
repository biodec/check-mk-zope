<?php

# TODO: .../buildout/parts/instance/etc/zope.conf
$parts = explode("_", $servicedesc);
$instance = $parts[sizeof($parts) - 3];

$opt[1] = "--title \"Zope cache For $hostname / $instance\" ";

$def[1] =  
    "DEF:objs=$RRDFILE[1]:$DS[1]:MAX ".
    "AREA:objs#60c0e0:\"Total objects \" ".
    "GPRINT:objs:LAST:\"%3lg LAST \" ".
    "GPRINT:objs:AVERAGE:\"%3lg AVERAGE \" ".
    "GPRINT:objs:MAX:\"%3lg MAX\\n\" ".
    "";
    
$def[1] .= 
    "DEF:objs_mem=$RRDFILE[2]:$DS[2]:MAX ".
    "LINE:objs_mem#40d010:\"Total objects memory \" ".
    "GPRINT:objs_mem:LAST:\"%3lg LAST \" ".
    "GPRINT:objs_mem:AVERAGE:\"%3lg AVERAGE \" ".
    "GPRINT:objs_mem:MAX:\"%3lg MAX\\n\" ".
    "";

$def[1] .=
    "DEF:target=$RRDFILE[3]:$DS[3]:MAX ".
    "LINE:target#004080:\"Target number \" ".
    "GPRINT:target:LAST:\"%3lg LAST \" ".
    "GPRINT:target:AVERAGE:\"%3lg AVERAGE \" ".
    "GPRINT:target:MAX:\"%3lg MAX\\n\" ".
    "";

?>

