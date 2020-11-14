<?php

namespace backend\controllers;

use Yii;
use backend\models\Images;
use common\models\ImagesSearch;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ImagesController implements the CRUD actions for Images model.
 */
class ImagesController extends BaseController
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
                    'delete' => ['POST','GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Images models.
     * @return mixed
     */
    public function actionIndex()
    {

//        $images = $this->findModel(576);
//        //生成一张填充模式200 x 200 的缩略图
//        $url = Yii::$app->params['upload']['path'].$images->picture->path;
//        $name = explode('/',$images->picture->path);
//        $name = $name[1];
//        \yii\imagine\Image::thumbnail($url, 300 , 300,
//            \Imagine\Image\ManipulatorInterface::THUMBNAIL_INSET)
//            ->save(Yii::$app->params['upload']['path'].'thum/'.$name,
//                ['quality' => 10]);
//        $picture =  \common\models\Picture::find(['path'])->where(['id'=>$images->cover])->one();
//        $picture->thum_path = 'thum/'.$name;
//        $picture->update();
//        echo $images->cover;
//        echo Yii::$app->params['upload']['path'].$images->picture->path;die;
		$this->setForward();
        $searchModel = new ImagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $params=Yii::$app->request->queryParams;
		$category_id=Yii::$app->request->get('ImagesSearch')['category_id']?Yii::$app->request->get('ImagesSearch')['category_id']:0;
//		var_dump($category_id);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'category_id'=>$category_id,
        ]);
    }

    /**
     * Displays a single Images model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Images model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd()
    {
    	$model = $this->findModel(0);
		$model['category_id']=Yii::$app->request->get('category_id',0);
    	if (Yii::$app->request->isPost) {
    		
    		$data = Yii::$app->request->post('Images');
                //处理分类标签数组--start
            if (!empty($data['category_id'])){
                $arrays=array();
                foreach ($data['category_id'] as $key=>$value){

                    if(!empty($value))
                        $arrays=array_merge($arrays,$value);
                }
                $data['category_id']=implode(',',$arrays);
            }
            //处理分类标签数组--end
            //处理属性标签数组--start
//            var_dump($data['attr_value_id']);
            if (!empty($data['attr_value_id'])){
                $arrays=array();
                foreach ($data['attr_value_id'] as $key=>$value){
                    if(!empty($value))
                        $arrays=array_merge($arrays,$value);
                }
                $data['attr_value_id']=implode(',',$arrays);
            }
            //处理属性标签数组--end
			$data['np']=empty($data['np'])?'':join(',',$data['np']);
    		//$data['create_time'] = time();
    		/* 格式化extend值，为空或数组序列化 */
    		if (isset($data['extend'])) {
    			$tmp = FuncHelper::parse_field_attr($data['extend']);
    			if (is_array($tmp)) {
    				$data['extend'] = serialize($tmp);
    			}else{
    				$data['extend'] = '';
    			}
    		}
    		/* 将图组转化为字符串 */
    		if (isset($data['images']) && is_array($data['images'])) {
    			$data['images'] = array_values(array_flip(array_flip($data['images'])));
    			$data['images'] = trim(implode ( ",", $data['images']),',');
    		}

    		/* 表单数据加载、验证、数据库操作 */
            $result=$this->saveRow($model, $data);
            if ($result) {

                $this->success('操作成功'.$result->primaryKey, $this->getForward());
            }else{
                $this->error('检查标题或者SEO标题是否重复，必填内容必须填');
            }
    	}
    	
    	/* 获取模型默认数据 */
    	$model->loadDefaultValues();
    	/* 渲染模板 */
    	return $this->render('edit', [
    			'model' => $model,
    	]);
    }

    /**
     * Updates an existing Images model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionEdit(){
        $id = Yii::$app->request->get('id',0);
        $model = $this->findModel($id);
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('Images');
            //处理分类标签数组--start
            if (!empty($data['category_id'])){
                $arrays=array();
                foreach ($data['category_id'] as $key=>$value){

                    if(!empty($value))
                    $arrays=array_merge($arrays,$value);
                }
                $data['category_id']=implode(',',$arrays);
            }
            //处理分类标签数组--end
            //处理属性标签数组--start
//            var_dump($data['attr_value_id']);
            if (!empty($data['attr_value_id'])){
                $arrays=array();
                foreach ($data['attr_value_id'] as $key=>$value){
                    if(!empty($value))
                        $arrays=array_merge($arrays,$value);
                }
                $data['attr_value_id']=implode(',',$arrays);
            }
            //处理属性标签数组--end
            $data['np']=empty($data['np'])?'':join(',',$data['np']);
            //$data['update_time'] = time();
            $data['type'] = Yii::$app->request->get('type',1);
            /* 格式化extend值，为空或数组序列化 */
            if (isset($data['extend'])) {
                $tmp = FuncHelper::parse_field_attr($data['extend']);
                if (is_array($tmp)) {
                    $data['extend'] = serialize($tmp);
                }else{
                    $data['extend'] = '';
                }
            }
            /* 将图组转化为字符串 */
            if (isset($data['images']) && is_array($data['images'])) {
                $data['images'] = array_values(array_flip(array_flip($data['images'])));
                $data['images'] = trim(implode ( ",", $data['images']),',');
            }
            $data['admin_time'] = time();
            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($model, $data)) {
//                  var_dump($default);
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('检查标题或者SEO标题是否重复，必填内容必须填');
            }
        }
        /* 还原extend的数据 */
        if ($model->extend) {
            $_tmp = unserialize($model->extend);
            $_str = '';
            if ($_tmp && is_array($_tmp)) {
                foreach ($_tmp as $key => $value) {
                    $_str .= $key.':'.$value.',';
                }
            }
            $model->extend = $_str;
        }

        /* 渲染模板 */
        return $this->render('edit', [
            'model' => $model,
        ]);
    }
    

    /**
     * Deletes an existing Images model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
    	$model = $this->findModel(0);
    	if($this->delRow($model, 'id')){
    		$this->success('删除成功', $this->getForward());
    	} else {
    		$this->error('删除失败！');
    	}
    }

    /**
     * Finds the Images model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Images the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
    	if ($id == 0) {
    		return new Images();
    	}
        if (($model = Images::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
