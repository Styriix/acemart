<?php
defined('BASEPATH') OR exit('This page does not exist');

class WhoopsHook {
    public function bootWhoops() {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
        $whoops->register();
    }
}