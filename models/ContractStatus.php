<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contract_statuses".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Contract[] $contracts
 */
class ContractStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contract_statuses';
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
     * Gets query for [[Contracts]].
     *
     * @return \yii\db\ActiveQuery|ContractQuery
     */
    public function getContracts()
    {
        return $this->hasMany(Contract::className(), ['status' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ContractStatusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContractStatusQuery(get_called_class());
    }
}
