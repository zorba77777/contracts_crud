<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event_types".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Event[] $events
 */
class EventType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Events]].
     *
     * @return \yii\db\ActiveQuery|EventQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['type' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return EventTypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventTypeQuery(get_called_class());
    }
}
