<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property int|null $type
 * @property string|null $date
 * @property int|null $contract
 * @property int|null $user
 * @property string|null $content
 * @property int|null $ordinal_number
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $creator
 *
 * @property EventType $type0
 * @property Contract $contract0
 * @property User $user0
 * @property User $creator0
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'contract', 'user', 'ordinal_number', 'creator'], 'integer'],
            [['date', 'created_at', 'updated_at'], 'safe'],
            [['content'], 'string'],
            [['type'], 'exist', 'skipOnError' => true, 'targetClass' => EventType::className(), 'targetAttribute' => ['type' => 'id']],
            [['contract'], 'exist', 'skipOnError' => true, 'targetClass' => Contract::className(), 'targetAttribute' => ['contract' => 'id']],
            [['user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user' => 'id']],
            [['creator'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['creator' => 'id']],
            [['date', 'created_at', 'updated_at'], 'date', 'format' => 'yyyy-MM-dd']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Тип отчетного события',
            'date' => 'Дата',
            'contract' => 'Договор',
            'user' => 'Исполнитель',
            'content' => 'Содержание',
            'ordinal_number' => 'Порядковый номер',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
            'creator' => 'Кем создано / обновлено',
        ];
    }

    /**
     * Gets query for [[Type0]].
     *
     * @return \yii\db\ActiveQuery|EventTypeQuery
     */
    public function getType0()
    {
        return $this->hasOne(EventType::className(), ['id' => 'type']);
    }

    /**
     * Gets query for [[Contract0]].
     *
     * @return \yii\db\ActiveQuery|ContractQuery
     */
    public function getContract0()
    {
        return $this->hasOne(Contract::className(), ['id' => 'contract']);
    }

    /**
     * Gets query for [[User0]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'user']);
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
     * {@inheritdoc}
     * @return EventQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventQuery(get_called_class());
    }
}
