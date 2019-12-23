<?php

namespace backend\controllers;

use common\helpers\ArrayHelper;
use common\helpers\Html;
use common\helpers\StringHelper;
use common\models\Anchor;
use common\models\Article;
use common\models\ArticleAnchor;
use common\models\Attr;
use common\models\AttrImages;
use common\models\AttrImagesSelect;
use common\models\AttrValue;
use common\models\Blog;
use common\models\Category;
use common\models\CategoryImages;
use common\models\Images;
use common\models\produclist;
use common\models\SendMail;
use common\models\Url;
use SebastianBergmann\CodeCoverage\Report\Html\HTMLTest;
use Yii;
use common\models\ImagesExpand;
use yii\data\ActiveDataProvider;
use yii\helpers\HtmlPurifier;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ImagesExpandController implements the CRUD actions for ImagesExpand model.
 */
class EmailListController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [

                ],
            ],
        ];
    }

    /**
     * Lists all ImagesExpand models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->setForward();
        $dataProvider = new ActiveDataProvider([
            'query' => SendMail::find()->orderBy("create_time desc"),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}
