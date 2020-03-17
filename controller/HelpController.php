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
        echo '以下是系统的内部地址,仅限于安装本系统的办公室才可以访问。</br>';
        print('http://'.$server_ip.'/index');
    }




}