<?php

namespace backend\controllers;

use Yii;
use common\models\Keywords;
use common\models\KeywordsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KeywordsController implements the CRUD actions for Keywords model.
 */
class KeywordsController extends BaseController
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
     * Lists all Keywords models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->setForward();
        $searchModel = new KeywordsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAdd()
    {
        $model = $this->findModel(0);

        if (Yii::$app->request->isPost) {

            $data = Yii::$app->request->post('Keywords');
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
//            if (!empty($data['attr_value_id'])){
//                $arrays=array();
//                foreach ($data['attr_value_id'] as $key=>$value){
//                    if(!empty($value))
//                        $arrays=array_merge($arrays,$value);
//                }
//                $data['attr_value_id']=implode(',',$arrays);
//            }
            //处理属性标签数组--end




            /* 表单数据加载、验证、数据库操作 */
            $result=$this->saveRow($model, $data);
            if ($result) {

                $this->success('操作成功'.$result->primaryKey, $this->getForward());
            }else{
                $this->error('操作错误');
            }
        }

        /* 获取模型默认数据 */
        $model->loadDefaultValues();
        /* 渲染模板 */
        return $this->render('edit', [
            'model' => $model,
        ]);
    }

    public function actionEdit(){
        $id = Yii::$app->request->get('id',0);
        $model = $this->findModel($id);
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('Keywords');

//            if (!empty($data['attr_value_id'])){
//                $arrays=array();
//                foreach ($data['attr_value_id'] as $key=>$value){
//                    if(!empty($value))
//                        $arrays=array_merge($arrays,$value);
//                }
//                $data['attr_value_id']=implode(',',$arrays);
//            }
            //处理分类标签数组--start
            if (!empty($data['category_id'])){
                $arrays=array();
                foreach ($data['category_id'] as $key=>$value){

                    if(!empty($value))
                        $arrays=array_merge($arrays,$value);
                }
                $data['category_id']=implode(',',$arrays);
            }


            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($model, $data)) {
//                  var_dump($default);
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('操作错误');
            }
        }
        /* 还原extend的数据 */

        /* 渲染模板 */
        return $this->render('edit', [
            'model' => $model,
        ]);
    }
    /**
     * Updates an existing Keywords model.
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

    /**
     * Deletes an existing Keywords model.
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
     * Finds the Keywords model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Keywords the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if ($id == 0) {
            return new Keywords();
        }
        if (($model = Keywords::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
