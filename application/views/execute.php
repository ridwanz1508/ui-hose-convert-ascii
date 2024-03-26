<?php
    $fhexa   	= "";

    foreach($query1 as $val){   
        $fhexa1      = hex2bin(trim(substr($val->fdesc, 2, 2)));
    }
    foreach($query2 as $val){   
        $fhexa2      = hex2bin(trim(substr($val->fdesc, 2, 2)));
    }
    foreach($query3 as $val){   
        $fhexa3      = hex2bin(trim(substr($val->fdesc, 0, 2)));
        $fhexa3b     = hex2bin(trim(substr($val->fdesc, 2, 2)));
    }
    foreach($query4 as $val){   
        $fhexa4      = hex2bin(trim(substr($val->fdesc, 0, 2)));
    }
    foreach($query5 as $val){   
        $fhexa5      = hex2bin(trim(substr($val->fdesc, 2, 2)));
    }
    foreach($query6 as $val){   
        $fhexa6      = hex2bin(trim(substr($val->fdesc, 0, 2)));
        $fhexa6b     = hex2bin(trim(substr($val->fdesc, 2, 2)));
    }
    foreach($query7 as $val){   
        $fhexa7      = hex2bin(trim(substr($val->fdesc, 0, 2)));
    }
    foreach($query8 as $val){   
        $fhexa8      = hex2bin(trim(substr($val->fdesc, 0, 2))); // Mengambil 2 digit pertama dan kemudian mengonversi ke ASCII
    }
    
    echo "tes;".$fhexa1.";".$fhexa2.";".$fhexa3.";".$fhexa4.";".$fhexa5.";".$fhexa6.";".$fhexa7.";".$fhexa8.";".$fhexa3b.";".$fhexa6b;
?>

