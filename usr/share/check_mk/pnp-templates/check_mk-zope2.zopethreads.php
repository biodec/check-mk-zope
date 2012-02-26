<?php

$parts = explode("_", $servicedesc);
$instance = $parts[2];

#
$opt[1] = "--title \"Response Time For  $hostname / $instance / $servicedesc\" ";
#
$def[1] =  "DEF:var1=$rrdfile:$DS[1]:AVERAGE " ;
$def[1] .= "AREA:var1#00FF00:\"Response Times \" " ;
$def[1] .= "LINE1:var1#000000 " ;
$def[1] .= "GPRINT:var1:LAST:\"%3.4lg %s$UNIT[1] LAST \" ";
$def[1] .= "GPRINT:var1:MAX:\"%3.4lg %s$UNIT[1] MAX \" ";
$def[1] .= "GPRINT:var1:AVERAGE:\"%3.4lg %s$UNIT[1] AVERAGE \" ";

/*
$opt[1] = "--vertical-label 'Throughput (MB/s)' -X0  --title \"Disk throughput $hostname / $disk\" ";
    $def[1]  = 
               "HRULE:0#a0a0a0 ".
    # read
               "DEF:read=$RRDFILE[1]:$DS[1]:MAX ".
               "CDEF:read_mb=read,1048576,/ ".
               "AREA:read_mb#40c080:\"Read \" ".
               "GPRINT:read_mb:LAST:\"%8.1lf MB/s last\" ".
               "GPRINT:read_mb:AVERAGE:\"%6.1lf MB/s avg\" ".
               "GPRINT:read_mb:MAX:\"%6.1lf MB/s max\\n\" ";

    # read average
    if (isset($DS[3])) {
        $def[1] .= 
               "DEF:read_avg=$RRDFILE[3]:$DS[3]:MAX ".
               "CDEF:read_avg_mb=read_avg,1048576,/ ".
               "LINE:read_avg_mb#202020 ";
    }

    # write
    $def[1] .=
               "DEF:write=$RRDFILE[2]:$DS[2]:MAX ".
               "CDEF:write_mb=write,1048576,/ ".
               "CDEF:write_mb_neg=write_mb,-1,* ".
               "AREA:write_mb_neg#4080c0:\"Write  \"  ".
               "GPRINT:write_mb:LAST:\"%6.1lf MB/s last\" ".
               "GPRINT:write_mb:AVERAGE:\"%6.1lf MB/s avg\" ".
               "GPRINT:write_mb:MAX:\"%6.1lf MB/s max\\n\" ".
               "";

    # show levels for read
    if ($WARN[1]) {
        $def[1] .= "HRULE:$WARN[1]#ffd000:\"Warning for read at  " . sprintf("%6.1f", $WARN[1]) . " MB/s  \" ";
        $def[1] .= "HRULE:$CRIT[1]#ff0000:\"Critical for read at  " . sprintf("%6.1f", $CRIT[1]) . " MB/s\\n\" ";
    }

    # show levels for write
    if ($WARN[2]) {
        $def[1] .= "HRULE:-$WARN[2]#ffd000:\"Warning for write at " . sprintf("%6.1f", $WARN[2]) . " MB/s  \" ";
        $def[1] .= "HRULE:-$CRIT[2]#ff0000:\"Critical for write at " . sprintf("%6.1f", $CRIT[2]) . " MB/s\\n\" ";
    }

    # write average
    if (isset($DS[3])) {
        $def[1] .= 
               "DEF:write_avg=$RRDFILE[4]:$DS[4]:MAX ".
               "CDEF:write_avg_mb=write_avg,1048576,/ ".
               "CDEF:write_avg_mb_neg=write_avg_mb,-1,* ".
               "LINE:write_avg_mb_neg#202020 ";
    }
}

// legacy version of diskstat
else {
    $opt[1] = "--vertical-label 'Througput (MByte/s)' -l0  -u 1 --title \"Disk throughput $hostname / $servicedesc\" ";

    $def[1]  = "DEF:kb=$RRDFILE[1]:$DS[1]:AVERAGE " ;
    $def[1] .= "CDEF:mb=kb,1024,/ " ;
    $def[1] .= "AREA:mb#40c080 " ;
    $def[1] .= "GPRINT:mb:LAST:\"%6.1lf MByte/s last\" " ;
    $def[1] .= "GPRINT:mb:AVERAGE:\"%6.1lf MByte/s avg\" " ;
    $def[1] .= "GPRINT:mb:MAX:\"%6.1lf MByte/s max\\n\" ";
}
*/
?>

