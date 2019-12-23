<?php

namespace backend\controllers;

use Yii;
use backend\models\Article;
use common\helpers\ArrayHelper;
use common\helpers\FuncHelper;
use common\models\Category;
use backend\models\search\ArticleSearch;
use yii\web\NotFoundHttpException;
use common\models\Tag;

/**
 * 文章控制器
 * 作者 ：longfei
 * Email ：phphome@qq.com
 */
class ArticleadminController extends BaseController
{
    /**
     * ---------------------------------------
     * 列表页
     * ---------------------------------------
     */
    public function actionIndex()
    {
        /* 添加当前位置到cookie供后续跳转调用 */
        $this->setForward();
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->searchAuthor(Yii::$app->request->queryParams);
        $category_id=Yii::$app->request->get('ArticleSearch')['category_id']?Yii::$app->request->get('ArticleSearch')['category_id']:0;
//        var_dump(Yii::$app->request->get('ArticleSearch')['category_id']);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category_id'=>$category_id,

        ]);
    }
    public function actionShenhe()
    {
        /* 添加当前位置到cookie供后续跳转调用 */
        $this->setForward();
        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $category_id=Yii::$app->request->get('ArticleSearch')['category_id']?Yii::$app->request->get('ArticleSearch')['category_id']:0;
//        var_dump(Yii::$app->request->get('ArticleSearch')['category_id']);
        return $this->render('shenhe', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'category_id'=>$category_id,

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
            $data = Yii::$app->request->post('Article');
            //$data['create_time'] = time(); // backend/models/Article->behaviors()自动完成时间更新
            /* 格式化extend值，为空或数组序列化 */
            $data['np']=empty($data['np'])?'':join(',',$data['np']);
            if ($data['extend']) {
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
            $data['author_id']=Yii::$app->user->identity->id;

            if ($this->saveRow($model, $data)) {
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('检查标题或者内容是否重复，必填内容必须填');
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
    public function actionEditshenhe(){
        $id = Yii::$app->request->get('id',0);
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('Article');
            $data['np']=empty($data['np'])?'':join(',',$data['np']);
            //$data['update_time'] = time(); // backend/models/Article->behaviors()自动完成时间更新
            /* 格式化extend值，为空或数组序列化 */
            if ($data['extend']) {
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
            $data['create_time']=time();
        
            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($model, $data)) {
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('检查标题或者内容是否重复，必填内容必须填');
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
        return $this->render('edit_shenhe', [
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
        if ($model->author_id!=Yii::$app->user->identity->id){
//            echo '你无权进行访问！';
            $this->error('你无权进行访问', $this->getForward());
        }
        if ($model->status==1){

            $this->error('已发布，无法修改', $this->getForward());
        }

        if (Yii::$app->request->isPost) {
            $data = Yii::$app->request->post('Article');
            $data['np']=empty($data['np'])?'':join(',',$data['np']);
            //$data['update_time'] = time(); // backend/models/Article->behaviors()自动完成时间更新
            /* 格式化extend值，为空或数组序列化 */
            if ($data['extend']) {
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
            $data['author_id']=Yii::$app->user->identity->id;
            /* 表单数据加载、验证、数据库操作 */
            if ($this->saveRow($model, $data)) {
                $this->success('操作成功', $this->getForward());
            }else{
                $this->error('检查标题或者内容是否重复，必填内容必须填');
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
     * ---------------------------------------
     * 删除或批量删除
     * ---------------------------------------
     */
    public function actionDelete(){
        $model = $this->findModel(0);
        if($this->delRow($model, 'id')){
            $this->success('删除成功', $this->getForward());
        } else {
            $this->error('删除失败！');
        }
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if ($id == 0) {
            return new Article();
        }
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
