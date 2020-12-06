<?php

namespace app\controllers;

use app\helpers\ExcelExportImportHelper;
use app\models\Branch;
use app\models\ContractStatus;
use app\models\Event;
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

        if(isset($_COOKIE['showAll'])) {
            $dataProvider->pagination = false;
            unset($_COOKIE['showAll']);
            setcookie('showAll', null, -1, '/');
        }

        $contracts = $dataProvider->getModels();

        $maxOrdinalNumber = 0;
        foreach ($contracts as $contract) {
            if ($events = $contract->events) {
                foreach ($events as $event) {
                    if ($event->ordinal_number > $maxOrdinalNumber) {
                        $maxOrdinalNumber = $event->ordinal_number;
                    }
                }
            }
        }

        $dropdownListArrays = $this->getDropdownListArrays();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'maxOrdinalNumber' => $maxOrdinalNumber,
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
     * If creation is successful, the browser will be redirected to the 'index' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $contract = new Contract();

        $events = [];
        for ($i = 0; $i < 30; $i++) {
            $events[] = new Event();
        }

        if ($contract->load(Yii::$app->request->post()) && $contract->save()) {

            for ($i = 0; $i < 30; $i++) {
                if (Yii::$app->request->post('content' . $i)) {
                    $events[$i]->contract = $contract->id;
                    $events[$i]->content = Yii::$app->request->post('content' . $i);
                    $events[$i]->date = Yii::$app->request->post('date' . $i);
                    $events[$i]->ordinal_number = Yii::$app->request->post('ordinalNumber' . $i);
                    $events[$i]->creator = $contract->creator;
                    $events[$i]->user = $contract->lawyer;
                    $events[$i]->save();
                }
            }

            return $this->redirect(['index']);
        }

        $dropdownListArrays = $this->getDropdownListArrays();

        return $this->render('create', [
            'contract' => $contract,
            'events' => $events,
            'users' => $dropdownListArrays['users'],
            'branches' => $dropdownListArrays['branches'],
            'statuses' => $dropdownListArrays['statuses']
        ]);
    }

    /**
     * Updates an existing Contract model.
     * If update is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $contract = $this->findModel($id);

        $events = $contract->events;

        for ($i = count($events); $i < 30; $i++) {
            $events[] = new Event();
        }

        if ($contract->load(Yii::$app->request->post()) && $contract->save()) {

            for ($i = 0; $i < 30; $i++) {
                if (Yii::$app->request->post('content' . $i)) {
                    $events[$i]->contract = $contract->id;
                    $events[$i]->content = Yii::$app->request->post('content' . $i);
                    $events[$i]->date = Yii::$app->request->post('date' . $i);
                    $events[$i]->ordinal_number = Yii::$app->request->post('ordinalNumber' . $i);
                    $events[$i]->creator = $contract->creator;
                    $events[$i]->user = $contract->lawyer;
                    $events[$i]->save();
                }
            }

            return $this->redirect(['index']);
        }

        $dropdownListArrays = $this->getDropdownListArrays();

        return $this->render('update', [
            'contract' => $contract,
            'events' => $events,
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

    private function getDropdownListArrays()
    {
        $dropdownListArrays = ['users' => [], 'branches' => [], 'statuses' => []];

        $dropdownListArrays['users'] = User::find()->all();
        $dropdownListArrays['users'] = ArrayHelper::map($dropdownListArrays['users'],'id','username');

        $dropdownListArrays['branches'] = Branch::find()->all();
        $dropdownListArrays['branches'] = ArrayHelper::map($dropdownListArrays['branches'],'id','name');

        $dropdownListArrays['statuses'] = ContractStatus::find()->all();
        $dropdownListArrays['statuses'] = ArrayHelper::map($dropdownListArrays['statuses'],'id','name');

        return $dropdownListArrays;
    }

}
