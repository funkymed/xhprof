<?php

if(!file_exists('config_xhprof.php'))
    return false;

include "config_xhprof.php";
/**
 * Class Xhprof by Cyril Pereira
 */
class Xhprof
{
    /**
     * @return bool
     * @throws Exception
     */
    static private function isXhprof()
    {
        return (!isset($_GET['xhprof']) || !extension_loaded('xhprof')) ? false : true;
    }

    static public function header()
    {
        if(self::isXhprof())
        {
            include_once XHPROF_PATH.'xhprof_lib.php';
            include_once XHPROF_PATH.'/xhprof_runs.php';
            xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);

        }
    }

    static public function footer()
    {
        if(self::isXhprof())
        {
            $profiler_namespace = XHPROF_NAME;
            $xhprof_data        = xhprof_disable();
            $xhprof_runs        = new XHProfRuns_Default();
            $run_id             = $xhprof_runs->save_run($xhprof_data, $profiler_namespace);
            $profiler_url       = sprintf(XHPROF_URL.'xhprof_html/index.php?run=%s&source=%s', $run_id, $profiler_namespace);
            echo '<a href="'. $profiler_url .'" target="_blank">Profiler output</a>';
        }
    }
}
