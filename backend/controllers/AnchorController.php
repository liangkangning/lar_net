<?php

namespace backend\controllers;
use common\models\Anchor;
use common\models\AnchorSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * AttrtController implements the CRUD actions for Attr model.
 */
class AnchorController extends BaseController
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
     * Lists all Attr models.
     * @return mixed
     */
    public function actionIndex()
    {
//        $data = Anchor::find()->all();
//        foreach ($data as $key => $value) {
//            $value->create_time = time();
//            $value->save();
//        }
        $this->setForward();
        $searchModel = new AnchorSearch();
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
        $model['id']=Yii::$app->request->get('id',0);
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('Anchor');
            $data['create_time'] = time();
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
            $data = Yii::$app->request->post('Anchor');
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
     * 编辑属性值
     * ---------------------------------------
     */
    public function actionEdit_value(){
        $id = Yii::$app->request->get('id',0);
        $model = $this->findModel_value($id);
        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('AttrValue');
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
        $new_model=$this->findModel_value(0);
        $new_model->sort=0;
        /* post回来的数据处理 */
        if (Yii::$app->request->isPost) {
            $new_model->attr_id=$id;
            $data = Yii::$app->request->post('AttrValue');
            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($new_model, $data)) {
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('操作错误');
            }
        }
        $dataProvider = new ActiveDataProvider([
            'query'=>AttrValue::find()->where('attr_id='.$id),
            'pagination'=>[
                'pageSize'=>10,
            ],
        ]);
        /* 渲染模板 */
        return $this->render('item', [
            'model' => $model,
            'dataProvider'=>$dataProvider,
            'new_model'=>$new_model,

        ]);

    }




    /**
     * Deletes an existing Attr model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     *删除
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    /**
     * Finds the Attr model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Attr the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if ($id == 0) {
            return new Anchor();
        }
        if (($model = Anchor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }




}
