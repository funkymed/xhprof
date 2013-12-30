#Xhprof
=============
a little class to help to use xhprof on your project

GitHub : https://github.com/funkymed/xhprof

##Author

Cyril Pereira http://www.cyrilpereira.com

##Documentation

###Installation
First, you need to intall xhprof http://php.net/xhprof

with brew :
~~~
> brew search xhprof
php53-xhprof   php54-xhprof   php55-xhprof
> brew install php53-xhprof
~~~

####Configuration
rename the file config_xhprof.sample.php in config_xhprof.php and edit it
~~~
define('XHPROF_PATH', "Your local xhprof lib");
define('XHPROF_NAME', "your project namespace");
define('XHPROF_URL', "http://localhost/xhprof/");
~~~

XHPROF_PATH : is the real path of your xhprof lib directory
installed with brew it will be in : /usr/local/Cellar/php[php version]-xhprof/[code]/xhprof_lib/utils/
XHPROF_NAME : is the namespace to define your project
XHPROF_URL  : is your local url to xhprof website

#####Local xhprof website
http://pecl.php.net/package/xhprof

download the last package and put it in your localhost


####Example :
~~~
if(file_exists('xhprof.php'))
    include "xhprof.php";

if(class_exists('Xhprof'))
    Xhprof::header();

include "dummy/dummy.php";

Your bootstrap here

if(class_exists('Xhprof'))
    Xhprof::footer();
~~~