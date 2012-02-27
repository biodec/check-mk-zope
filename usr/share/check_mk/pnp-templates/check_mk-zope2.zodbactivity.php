<?php

# TODO: .../buildout/parts/instance/etc/zope.conf
$parts = explode("_", $servicedesc);
$instance = $parts[sizeof($parts) - 3];

$opt[1] = "--title \"ZODB Activity For $hostname / $instance\" ";

$def[1] =  
    "DEF:load=$RRDFILE[1]:$DS[1]:MAX ".
    "AREA:load#60c0e0:\"Load       \" ".
    "GPRINT:load:LAST:\"%3lg LAST \" ".
    "GPRINT:load:AVERAGE:\"%3lg AVERAGE \" ".
    "GPRINT:load:MAX:\"%3lg MAX\\n\" ".
    "";
    
$def[1] .= 
    "DEF:store=$RRDFILE[2]:$DS[2]:MAX ".
    "AREA:store#004080:\"Store      \" ".
    "GPRINT:store:LAST:\"%3lg LAST \" ".
    "GPRINT:store:AVERAGE:\"%3lg AVERAGE \" ".
    "GPRINT:store:MAX:\"%3lg MAX\\n\" ".
    "";

$def[1] .=
    "DEF:conn=$RRDFILE[3]:$DS[3]:MAX ".
    "LINE:conn#40d010:\"Connections \" ".
    "GPRINT:conn:LAST:\"%3lg LAST \" ".
    "GPRINT:conn:AVERAGE:\"%3lg AVERAGE \" ".
    "GPRINT:conn:MAX:\"%3lg MAX\\n\" ".
    "";

?>

