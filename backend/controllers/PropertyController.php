<?php

namespace backend\controllers;

use Yii;
use common\models\Property;
use common\models\PropertySearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PropertyController implements the CRUD actions for Property model.
 */
class PropertyController extends BaseController
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
     * Lists all Property models.
     * @return mixed
     */
    public function actionIndex()
    {
        /* 添加当前位置到cookie供后续跳转调用 */
        $this->setForward();
        $searchModel = new PropertySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * ---------------------------------------
     * 添加
     * ---------------------------------------
     */
    public function actionAdd(){

        $model = $this->findModel(0);
        $model['category_id']=Yii::$app->request->get('category_id',0);
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('Property');
            //$data['create_time'] = time(); // backend/models/Article->behaviors()自动完成时间更新
            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($model, $data)) {
                $this->success('操作成功', $this->getForward());
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

        /**
         * ---------------------------------------
         * 编辑
         * ---------------------------------------
        */
        public function actionEdit(){

            $id = Yii::$app->request->get('id',0);
            $model = $this->findModel($id);

            if (Yii::$app->request->isPost) {
                $data = Yii::$app->request->post('Property');

                /* 表单数据加载、验证、数据库操作 */
                if ($this->saveRow($model, $data)) {
                    $this->success('操作成功', $this->getForward());
                }else{
                    $this->error('操作错误');
                }
            }

            /* 渲染模板 */
            return $this->render('edit', [
                'model' => $model,
            ]);
        }
    /**
     * ---------------------------------------
     * 二级属性管理
     * ---------------------------------------
     */
    public function actionItem(){
        /* 添加当前位置到cookie供后续跳转调用 */
        $this->setForward();
        $id=Yii::$app->request->get('id',0);
        $model = $this->findModel($id);
        $new_model=$this->findModel(0);
        $new_model->sort=0;
        /* post回来的数据处理 */
        if (Yii::$app->request->isPost) {
            $new_model->pid=$id;
            $data = Yii::$app->request->post('Property');
            if ($model->style==1&&empty($data['value'])){//属性是数字类型
                $this->error('操作错误');
            }
            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($new_model, $data)) {
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('操作错误');
            }
        }
        $dataProvider = new ActiveDataProvider([
            'query'=>Property::find()->where('pid='.$id),
            'pagination'=>[
                'pageSize'=>10,
            ],
        ]);
        /* 渲染模板 */
        return $this->render('view', [
            'model' => $model,
            'dataProvider'=>$dataProvider,
            'new_model'=>$new_model,

        ]);

    }




    /**
     * Updates an existing Property model.
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
     * Deletes an existing Property model.
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
     * Finds the Property model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Property the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if ($id == 0) {
            return new Property();
        }
        if (($model = Property::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

    }
}
