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
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $creator
 *
 * @property User $creator0
 * @property User $lawyer0
 * @property Branch $branch0
 * @property ContractStatus $status0
 * @property Event[] $events
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
            [['start_date', 'created_at', 'updated_at'], 'safe'],
            [['counterparty', 'subject'], 'string', 'max' => 255],
            [['creator'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creator' => 'id']],
            [['lawyer'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['lawyer' => 'id']],
            [['branch'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => ContractStatus::className(), 'targetAttribute' => ['status' => 'id']],
            [['counterparty', 'subject', 'branch', 'lawyer', 'status', 'start_date'], 'required'],
            [['start_date', 'created_at', 'updated_at'], 'date', 'format' => 'yyyy-MM-dd']
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
     * @return \yii\db\ActiveQuery|ContractStatusQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(ContractStatus::className(), ['id' => 'status']);
    }

    /**
     * Gets query for [[Events]].
     *
     * @return \yii\db\ActiveQuery|EventQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['contract' => 'id'])->orderBy(['ordinal_number' => SORT_ASC]);
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
