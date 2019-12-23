<?php

namespace backend\controllers;

use common\models\AttrValue;
use common\models\LanguageAdaptation;
use Yii;
use common\models\Attr;
use common\models\AttrSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * AttrtController implements the CRUD actions for Attr model.
 */
class LanguageAdaptationController extends BaseController
{
    /**
     * @inheritdoc
     */


    /**
     * Lists all Attr models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->setForward();

        $data = LanguageAdaptation::find();
        $dataProvider= new \yii\data\ActiveDataProvider([
            'query' => $data,
            'pagination'=>[
                'pageSize'=>50,
                'pageSizeParam' => false,
            ],
        ]);
        return $this->render('index', [
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
            $data = Yii::$app->request->post('LanguageAdaptation');

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
            $data = Yii::$app->request->post('LanguageAdaptation');
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

    public function actionDeletevalue($id)
    {
        $this->findModel_value($id)->delete();

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
            return new LanguageAdaptation();
        }
        if (($model = LanguageAdaptation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findModel_value($id)
    {
        if ($id == 0) {
            return new LanguageAdaptation();
        }
        if (($model = LanguageAdaptation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }



}
