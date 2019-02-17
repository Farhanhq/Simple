<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "branches".
 *
 * @property int $branch_id
 * @property int $companies_company_id
 * @property int $branch_name
 * @property int $branch_address
 * @property int $branch_created_date
 * @property int $branch_status
 *
 * @property Companies $companiesCompany
 */
class branches extends \yii\db\ActiveRecord
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
            [['companies_company_id', 'branch_name', 'branch_address', 'branch_created_date', 'branch_status'], 'required'],
            [['companies_company_id', 'branch_name', 'branch_address', 'branch_created_date', 'branch_status'], 'integer'],
            [['companies_company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Companies::className(), 'targetAttribute' => ['companies_company_id' => 'company_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
          
            'companies_company_id' => 'Company name',
            'branch_name' => 'Branch Name',
            'branch_address' => 'Branch Address',
            'branch_created_date' => 'Branch Created Date',
            'branch_status' => 'Branch Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompaniesCompany() {

      return $this->hasOne(Companies::className(), ['company_id' => 'companies_company_id']);
    
    }

    public function getDepartments(){

        return $this->hasOne(Departments::className(), ['branches_branch_id' => 'branch_id']);

    }
}
