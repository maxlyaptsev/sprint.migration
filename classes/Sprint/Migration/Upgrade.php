<?php

namespace Sprint\Migration;

abstract class Upgrade
{

    protected $debug = false;

    public function setDebug($debug = false){
        $this->debug = $debug;
    }

    abstract public function doUpgrade();


    protected function isMssql(){
        return Env::isMssql();
    }

    protected function isWin1251(){
        return Env::isWin1251();
    }
}