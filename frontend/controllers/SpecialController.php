<?php



namespace frontend\controllers;



use common\helpers\ArrayHelper;

use common\helpers\StringHelper;

use common\models\Article;

use common\models\AttrImages;

use common\models\Category;

use common\models\CategoryImages;

use common\models\Images;

use common\models\Links;

use yii\web\Controller;

use yii;

use yii\log\Logger;

class SpecialController extends CommonController

{

    /**

     * @var string

     */

    public $layout = 'main';


    public function actionIndex()

    {

        parent::common();


        CaseController::itemList(Yii::$app->params['lanmu']['id']);
        return $this->render('/case/index',['data'=>$this->data]);

    }





    

}

