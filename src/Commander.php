<?php

namespace ArashAbedii;

class Commander{

    //execute command
    public static function call($command){
        return shell_exec($command);
    }

    //execute command in background
    public static function runInBg($command){
        $command=str_replace('"','\"',$command);

        return shell_exec("nohup $command > foo.out 2> foo.err < /dev/null &");
    }

}