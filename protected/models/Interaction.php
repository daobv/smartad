<?php

/**
 * This is the model class for table "interaction".
 *
 * The followings are the available columns in table 'interaction':
 * @property integer $id
 * @property integer $interaction_info
 * @property integer $action
 * @property integer $click
 * @property integer $app_id
 * @property integer $user_id
 * @property double $revenue
 * @property integer $date
 */
class Interaction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'interaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('interaction_info, app_id, user_id, date', 'required'),
			array('interaction_info, action, click, app_id, user_id, date', 'numerical', 'integerOnly'=>true),
			array('revenue', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, interaction_info, action, click, app_id, user_id, revenue, date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'interaction_info' => 'Interaction Info',
			'action' => 'Action',
			'click' => 'Click',
			'app_id' => 'App',
			'user_id' => 'User',
			'revenue' => 'Revenue',
			'date' => 'Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('interaction_info',$this->interaction_info);
		$criteria->compare('action',$this->action);
		$criteria->compare('click',$this->click);
		$criteria->compare('app_id',$this->app_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('revenue',$this->revenue);
		$criteria->compare('date',$this->date);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Interaction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
