<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contracts".
 *
 * @property int $id
 * @property string|null $counterparty
 * @property string|null $subject
 * @property int|null $branch
 * @property int|null $lawyer
 * @property int|null $status
 * @property string|null $start_date
 * @property string|null $milestone1
 * @property string|null $date1
 * @property string|null $milestone2
 * @property string|null $date2
 * @property string|null $milestone3
 * @property string|null $date3
 * @property string|null $milestone4
 * @property string|null $date4
 * @property string|null $milestone5
 * @property string|null $date5
 * @property string|null $milestone6
 * @property string|null $date6
 * @property string|null $milestone7
 * @property string|null $date7
 * @property string|null $milestone8
 * @property string|null $date8
 * @property string|null $milestone9
 * @property string|null $date9
 * @property string|null $milestone10
 * @property string|null $date10
 * @property string|null $milestone11
 * @property string|null $date11
 * @property string|null $milestone12
 * @property string|null $date12
 * @property string|null $milestone13
 * @property string|null $date13
 * @property string|null $milestone14
 * @property string|null $date14
 * @property string|null $milestone15
 * @property string|null $date15
 * @property string|null $milestone16
 * @property string|null $date16
 * @property string|null $milestone17
 * @property string|null $date17
 * @property string|null $milestone18
 * @property string|null $date18
 * @property string|null $milestone19
 * @property string|null $date19
 * @property string|null $milestone20
 * @property string|null $date20
 * @property string|null $milestone21
 * @property string|null $date21
 * @property string|null $milestone22
 * @property string|null $date22
 * @property string|null $milestone23
 * @property string|null $date23
 * @property string|null $milestone24
 * @property string|null $date24
 * @property string|null $milestone25
 * @property string|null $date25
 * @property string|null $milestone26
 * @property string|null $date26
 * @property string|null $milestone27
 * @property string|null $date27
 * @property string|null $milestone28
 * @property string|null $date28
 * @property string|null $milestone29
 * @property string|null $date29
 * @property string|null $milestone30
 * @property string|null $date30
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $creator
 *
 * @property User $creator0
 * @property User $lawyer0
 * @property Branch $branch0
 * @property Status $status0
 */
class Contract extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contracts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['branch', 'lawyer', 'status', 'creator'], 'integer'],
            [['start_date', 'date1', 'date2', 'date3', 'date4', 'date5', 'date6', 'date7', 'date8', 'date9', 'date10', 'date11', 'date12', 'date13', 'date14', 'date15', 'date16', 'date17', 'date18', 'date19', 'date20', 'date21', 'date22', 'date23', 'date24', 'date25', 'date26', 'date27', 'date28', 'date29', 'date30', 'created_at', 'updated_at'], 'safe'],
            [['milestone1', 'milestone2', 'milestone3', 'milestone4', 'milestone5', 'milestone6', 'milestone7', 'milestone8', 'milestone9', 'milestone10', 'milestone11', 'milestone12', 'milestone13', 'milestone14', 'milestone15', 'milestone16', 'milestone17', 'milestone18', 'milestone19', 'milestone20', 'milestone21', 'milestone22', 'milestone23', 'milestone24', 'milestone25', 'milestone26', 'milestone27', 'milestone28', 'milestone29', 'milestone30'], 'string'],
            [['counterparty', 'subject'], 'string', 'max' => 255],
            [['creator'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creator' => 'id']],
            [['lawyer'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['lawyer' => 'id']],
            [['branch'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'id']],
            [['counterparty', 'subject', 'branch', 'lawyer', 'status', 'start_date'], 'required'],
            [['start_date', 'date1', 'date2', 'date3', 'date4', 'date5', 'date6', 'date7', 'date8', 'date9', 'date10', 'date11', 'date12', 'date13', 'date14', 'date15', 'date16', 'date17', 'date18', 'date19', 'date20', 'date21', 'date22', 'date23', 'date24', 'date25', 'date26', 'date27', 'date28', 'date29', 'date30', 'created_at', 'updated_at'], 'date', 'format' => 'yyyy-MM-dd'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'counterparty' => 'Контрагент',
            'subject' => 'Адрес аренды / предмет хоз. договора',
            'branch' => 'Филиал / СП',
            'lawyer' => 'Исполнитель',
            'status' => 'Статус задачи',
            'start_date' => 'Дата поступления',
            'milestone1' => 'Веха1',
            'date1' => 'Дата1',
            'milestone2' => 'Веха2',
            'date2' => 'Дата2',
            'milestone3' => 'Веха3',
            'date3' => 'Дата3',
            'milestone4' => 'Веха4',
            'date4' => 'Дата4',
            'milestone5' => 'Веха5',
            'date5' => 'Дата5',
            'milestone6' => 'Веха6',
            'date6' => 'Дата6',
            'milestone7' => 'Веха7',
            'date7' => 'Дата7',
            'milestone8' => 'Веха8',
            'date8' => 'Дата8',
            'milestone9' => 'Веха9',
            'date9' => 'Дата9',
            'milestone10' => 'Веха10',
            'date10' => 'Дата10',
            'milestone11' => 'Веха11',
            'date11' => 'Дата11',
            'milestone12' => 'Веха12',
            'date12' => 'Дата12',
            'milestone13' => 'Веха13',
            'date13' => 'Дата13',
            'milestone14' => 'Веха14',
            'date14' => 'Дата14',
            'milestone15' => 'Веха15',
            'date15' => 'Дата15',
            'milestone16' => 'Веха16',
            'date16' => 'Дата16',
            'milestone17' => 'Веха17',
            'date17' => 'Дата17',
            'milestone18' => 'Веха18',
            'date18' => 'Дата18',
            'milestone19' => 'Веха19',
            'date19' => 'Дата19',
            'milestone20' => 'Веха20',
            'date20' => 'Дата20',
            'milestone21' => 'Веха21',
            'date21' => 'Дата21',
            'milestone22' => 'Веха22',
            'date22' => 'Дата22',
            'milestone23' => 'Веха23',
            'date23' => 'Дата23',
            'milestone24' => 'Веха24',
            'date24' => 'Дата24',
            'milestone25' => 'Веха25',
            'date25' => 'Дата25',
            'milestone26' => 'Веха26',
            'date26' => 'Дата26',
            'milestone27' => 'Веха27',
            'date27' => 'Дата27',
            'milestone28' => 'Веха28',
            'date28' => 'Дата28',
            'milestone29' => 'Веха29',
            'date29' => 'Дата29',
            'milestone30' => 'Веха30',
            'date30' => 'Дата30',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
            'creator' => 'Кем создано / обновлено',
        ];
    }

    /**
     * Gets query for [[Creator0]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getCreator0()
    {
        return $this->hasOne(User::className(), ['id' => 'creator']);
    }

    /**
     * Gets query for [[Lawyer0]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getLawyer0()
    {
        return $this->hasOne(User::className(), ['id' => 'lawyer']);
    }

    /**
     * Gets query for [[Branch0]].
     *
     * @return \yii\db\ActiveQuery|BranchQuery
     */
    public function getBranch0()
    {
        return $this->hasOne(Branch::className(), ['id' => 'branch']);
    }

    /**
     * Gets query for [[Status0]].
     *
     * @return \yii\db\ActiveQuery|StatusQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }

    /**
     * {@inheritdoc}
     * @return ContractQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContractQuery(get_called_class());
    }
}
