<?php

namespace app\controllers;

use app\helpers\ExcelExportImportHelper;
use app\models\Branch;
use app\models\Status;
use app\models\User;
use Yii;
use app\models\Contract;
use app\models\ContractSearch;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContractController implements the CRUD actions for Contract model.
 */
class ContractController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];

    }

    /**
     * Lists all Contract models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContractSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $contracts = $dataProvider->getModels();

        $columnsVisibility = [];
        for ($i = 2; $i <= 30; $i++) {
            $columnsVisibility['milestone' . $i] = false;
            $columnsVisibility['date' . $i] = false;
        }

        foreach ($contracts as $contract) {

            for ($i = 2; $i <= 30; $i++) {
                $date = 'date' . $i;
                $milestone = 'milestone' . $i;

                if ($contract->$date) {
                    $columnsVisibility[$date] = true;
                }

                if ($contract->$milestone) {
                    $columnsVisibility[$milestone] = true;
                }
            }
        }

        $dropdownListArrays = $this->getDropdownListArrays();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'columnsVisibility' => $columnsVisibility,
            'users' => $dropdownListArrays['users'],
            'branches' => $dropdownListArrays['branches'],
            'statuses' => $dropdownListArrays['statuses']
        ]);
    }

    /**
     * Displays a single Contract model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Contract model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Contract();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        $dropdownListArrays = $this->getDropdownListArrays();

        return $this->render('create', [
            'model' => $model,
            'users' => $dropdownListArrays['users'],
            'branches' => $dropdownListArrays['branches'],
            'statuses' => $dropdownListArrays['statuses']
        ]);
    }

    /**
     * Updates an existing Contract model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        $dropdownListArrays = $this->getDropdownListArrays();

        return $this->render('update', [
            'model' => $model,
            'users' => $dropdownListArrays['users'],
            'branches' => $dropdownListArrays['branches'],
            'statuses' => $dropdownListArrays['statuses']
        ]);
    }

    /**
     * Deletes an existing Contract model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Contract model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Contract the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Contract::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionExportExcel()
    {
        ExcelExportImportHelper::ExportFromContracts();
    }

    private function getDropdownListArrays()
    {
        $dropdownListArrays = ['users' => [], 'branches' => [], 'statuses' => []];

        $dropdownListArrays['users'] = User::find()->all();
        $dropdownListArrays['users'] = ArrayHelper::map($dropdownListArrays['users'],'id','username');

        $dropdownListArrays['branches'] = Branch::find()->all();
        $dropdownListArrays['branches'] = ArrayHelper::map($dropdownListArrays['branches'],'id','branch');

        $dropdownListArrays['statuses'] = Status::find()->all();
        $dropdownListArrays['statuses'] = ArrayHelper::map($dropdownListArrays['statuses'],'id','status');

        return $dropdownListArrays;
    }

}
