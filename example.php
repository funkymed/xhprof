<?php

if(file_exists('xhprof.php'))
    include "xhprof.php";

if(class_exists('Xhprof'))
    Xhprof::header();

include "dummy/dummy.php";

$dummy = new Dummy();

if(class_exists('Xhprof'))
    Xhprof::footer();
