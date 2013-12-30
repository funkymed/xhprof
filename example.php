<?php

include "xhprof.php";

Xhprof::header();

include "dummy/dummy.php";

$dummy = new Dummy();

if($dummy)
{
    echo "dummy done";
}else{
    echo "dummy not working";
}

Xhprof::footer();
