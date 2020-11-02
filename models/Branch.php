<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "branches".
 *
 * @property int $id
 * @property string|null $branch
 *
 * @property Contract[] $contracts
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'branches';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['branch'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'branch' => 'Branch',
        ];
    }

    /**
     * Gets query for [[Contracts]].
     *
     * @return \yii\db\ActiveQuery|ContractQuery
     */
    public function getContracts()
    {
        return $this->hasMany(Contract::className(), ['branch' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return BranchQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BranchQuery(get_called_class());
    }
}
