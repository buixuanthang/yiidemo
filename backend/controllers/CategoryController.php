<?php

namespace backend\controllers;

use Yii;
use backend\models\Category;
use backend\models\Group;
use backend\models\CategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();
        $group = new Group();
        $dataGroup= ArrayHelper::map($group->getAllGroup(),'group_id','group_name'); // gọi phương thức bên modelGroup sang
         //ArrayHelper conver dữ liệu trả về là mảng khi dùng nhớ phải có thư viện:use yii\helpers\ArrayHelper; (key:group_id; value:group_name)

        // echo "<pre>";
        // print_r($dataGroup);
        // die();
        $dataCat= $model->getCategoryParent();
        if(empty($dataCat))
            $dataCat=array();
        
        // echo "<pre>";
        // print_r($dataCat);
        // die();
        $time=time();
        $model->created_at= $time;
        $model->updated_at= $time;
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('index'); // tạo xong thì đưa về danh sách
        } else {
            return $this->render('create', [
                'model' => $model,
                'dataGroup'=>$dataGroup, // gửi qua view
                'dataCat'=>$dataCat,
            ]);
        }
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $category = new Category();
        $group = new Group();
        $dataCat= ArrayHelper::map($category->getAllCategory(),'cat_id','cat_name');
        $dataGroup= ArrayHelper::map($group->getAllGroup(),'group_id','group_name');
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cat_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'dataGroup'=>$dataGroup, // gửi qua view
                'dataCat'=>$dataCat,
            ]);
        }
    }

    /**
     * Deletes an existing Category model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
