<?php
namespace app\controllers;

use yii\web\Controller;
use yii\web\Cookie;


class HelloController extends Controller {

  public $layout = "common";//设置view布局控制器

  public function actionIndex()
  {
    $hello_str = "hello wush";
    $hello_arr = array(1,2,3);

    $hello_script = "hello god!<script>alert('haha!')</script>";

    $data = array();
    $data['hello_str'] = $hello_str;  
    $data['hello_arr'] = $hello_arr;
    $data['hello_script'] = $hello_script;
    return $this->renderPartial("index",$data);


  }

  public function actionRequest()
  {
    echo("------------------"."<br/>");
    $requent = \Yii::$app->request;
    echo '<br/>'.$requent->get('id',200). "<br/>";
    if($requent->isGet){
     echo("this is a get request". "<br/>");
    }
    echo $requent->userIp;
  }

  public function actionResponse()
  {
     $res = \Yii::$app->response;
     //$res->statusCode = '404';
     //$res->headers->add("pragma", "no-cache");
     //$res->headers->set("pragma", "max-age=5");
     //$res->headers->remove("pragma");
     
     //跳转
     //$res->headers->add("location", "http://www.baidu.com"); 这个语句不能用
     //$res->redirect("http://www.baidu.com", 302);

    //下载文件
    //$res->headers->add("content-disposition","attachment; filename='robots.txt'");
    //$res->sendFile("robots.txt");

  }

  public function actionSession(){
    $session = \Yii::$app->session;
    if($session->isActive){
      echo("session is actived");
    }
    //$session->open();
    //$session->set("user", "zhangsan");
    //$session->remove('user');
    //echo $session->get('user');

    $session['user'] ='zhangsi';
    echo $session['user'];
    unset($session['user']);
  }

  public function actionCookie()
  {
    $cookies = \Yii::$app->response->cookies;
    $cookData = array("name" => 'user', "value" => 'zhangsan');//添加和修改
    $cookies->add(new Cookie($cookData));
    //echo $cookies->getValue("PHPSESSID");
    //$cookies->remove("user");//删除

    $cookiesRequest = \Yii::$app->request->cookies;
    echo $cookiesRequest->getValue('user');
  }

  public function actionLayout()
  {
    return $this->render("layout");//render使用布局文件
  }

  public function actionBlock()
  {
    return $this->render('block');
  }

}
?>