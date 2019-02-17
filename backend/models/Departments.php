<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $department_id
 * @property int $branches_branch_id
 * @property string $department_name
 * @property int $comapnies_company_id
 * @property string $department_created_dater
 * @property string $department_status
 *
 * @property Branches $branchesBranch
 * @property Companies $comapniesCompany
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['branches_branch_id', 'department_name', 'comapnies_company_id', 'department_created_dater', 'department_status'], 'required'],
            [['branches_branch_id', 'comapnies_company_id'], 'integer'],
            [['department_created_dater'], 'safe'],
            [['department_name'], 'string', 'max' => 191],
            [['department_status'], 'string', 'max' => 11],
            [['branches_branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branches::className(), 'targetAttribute' => ['branches_branch_id' => 'branch_id']],
            [['comapnies_company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Companies::className(), 'targetAttribute' => ['comapnies_company_id' => 'company_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'Department ID',
            'branches_branch_id' => 'Branches Branch ID',
            'department_name' => 'Department Name',
            'comapnies_company_id' => 'Comapnies Company ID',
            'department_created_dater' => 'Department Created Dater',
            'department_status' => 'Department Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranchesBranch()
    {
        return $this->hasOne(Branches::className(), ['branch_id' => 'branches_branch_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComapniesCompany()
    {
        return $this->hasOne(Companies::className(), ['company_id' => 'comapnies_company_id']);
    }
}
