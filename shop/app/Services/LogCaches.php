<?php
namespace App\Services;


class LogCatchs
{

    public static function writeLog ($ex, $msg) {
        \Log::channel('single')->error( $msg . ", Has bug: ". $ex);
    }
    public static function writeLogSuccess ($msg) {
        \Log::info('single')->notice( $msg );
    }

}