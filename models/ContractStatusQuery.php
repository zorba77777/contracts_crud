<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ContractStatus]].
 *
 * @see ContractStatus
 */
class ContractStatusQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ContractStatus[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ContractStatus|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
