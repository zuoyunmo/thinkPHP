<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        // echo C('name').'<br>';
        // echo C('sex');

        /*  thinkPHP URL的4种模式
        URL_MODEL  默认为1，通过 /Conf/config.php文件添加('URL_MODEL'=>1,)修改
        1默认模式  pathinfo模式
            http://localhost:8000/php/index.php/Index/user/id/1.shtml
        0普通模式
            http://localhost:8000/php/index.php?m=Index&a=user&id=1
        2重写模式
            http://localhost:8000/php/Index/user/id/1.shtml
        3兼容模式
            http://localhost:8000/php/index.php?s=/Index/user/id/1.shtml
        */

        echo C('URL_MODEL').'<br/>';
        //U('模块/方法',array('id'=>1),'html/htm/shtml',true/false,'localhost')
        echo U('Index/user',array('id'=>1),'html',false,'localhost:8000');

    }

    public function user(){
        echo 'id is:'.$_GET['id'].'<br>';
        echo '这里是INDEX模块的user方法';
    }
}