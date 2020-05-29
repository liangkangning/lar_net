<?php



namespace frontend\controllers;




use common\helpers\ArrayHelper;

use common\models\Article;

use common\models\Category;

use common\models\Keywords;
use yii\web\Controller;

use yii;
use common\models\SendMail;
use yii\helpers\Html;


class FormController extends CommonController

{

    /**

     * @var string

     */

    public function init(){
        parent::init();
        $this->enableCsrfValidation = false;

    }

    public function actionMessage()
    {

        parent::common();
        $model=new SendMail();
        $model->setScenario('all');
        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            if ($model->save()){
                $res = Yii::$app->mailer->compose('test', ['data'=>$model,'title' => 'www.large.net信息反馈','html' => 'text'])
                    ->setTo(Yii::$app->params['web']['WEB_EMAIL']->value)
                    ->setSubject('外贸询盘：'.$model->email)
                    ->send();
                return $this->redirect('/form/submitted-successfully.html');
//                return $this->render('/page/contactus_success',['data'=>$this->data]);
            }

        }

        $this->view->params['meta_title'] = 'Request a Quote | Large Power';
        $this->view->params['keywords'] =  'Request a Quote';
        $this->view->params['description'] = 'Request a Quote';
        return $this->render('message',['data'=>$this->data,'model'=>$model]);
    }
    public function actionMessageSimple()
    {

        parent::common();
        $model=new SendMail();
        $model->setScenario('simple');
        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            if ($model->save()){
                $res = Yii::$app->mailer->compose('test', ['data'=>$model,'title' => 'www.large.net信息反馈','html' => 'text'])
                    ->setTo(Yii::$app->params['web']['WEB_EMAIL']->value)
                    ->setSubject('外贸询盘：'.$model->email)
                    ->send();
                return $this->redirect('/form/submitted-successfully.html');
            }

        }
        $this->view->params['meta_title'] = 'Request a Quote | Large Power';
        $this->view->params['keywords'] =  'Request a Quote';
        $this->view->params['description'] = 'Request a Quote';
        return $this->render('message',['data'=>$this->data,'model'=>$model]);
    }

    public function actionSubmittedSuccessfully(){
        parent::common();
        $this->view->params['meta_title'] = 'Request a Quote | Large Power';
        $this->view->params['keywords'] =  'Request a Quote';
        $this->view->params['description'] = 'Request a Quote';
        return $this->render('/page/contactus_success',['data'=>$this->data]);
    }
    public function actionPostEmail(){
        $model=new SendMail();
        $model->setScenario('simple');
        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            $post['from'] = '/form/post-email.html';
            $data['SendMail'] = $post;
            $model->load($data);
            if ($model->save()){
                echo 2;
                $res = Yii::$app->mailer->compose('test', ['data'=>$model,'title' => 'www.large.net信息反馈','html' => 'text'])
                    ->setTo(Yii::$app->params['web']['WEB_EMAIL']->value)
                    ->setSubject('外贸询盘：'.$model->email)
                    ->send();
            }else{
//                var_dump($model->save());
                var_dump($model->errors);
            }

        }
    }


}
?>

