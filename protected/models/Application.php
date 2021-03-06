<?php

/**
 * This is the model class for table "application".
 *
 * The followings are the available columns in table 'application':
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property string $short_description
 * @property integer $adv_type
 * @property integer $platform_id
 * @property integer $appearance_id
 * @property string $area
 * @property string $from
 * @property string $to
 * @property integer $status_id
 * @property string $content
 * @property string $link
 * @property double $price
 * @property double $size
 * @property string $registered_date
 */
class Application extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'application';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, image, adv_type, platform_id, appearance_id, status_id, content, link, price, size, registered_date', 'required'),
			array('adv_type, platform_id, appearance_id, status_id', 'numerical', 'integerOnly'=>true),
			array('price, size', 'numerical'),
			array('name, image', 'length', 'max'=>255),
			array('area, link', 'length', 'max'=>1024),
			array('short_description, from, to', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, image, short_description, adv_type, platform_id, appearance_id, area, from, to, status_id, content, link, price, size, registered_date', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'image' => 'Image',
			'short_description' => 'Short Description',
			'adv_type' => 'Adv Type',
			'platform_id' => 'Platform',
			'appearance_id' => 'Appearance',
			'area' => 'Area',
			'from' => 'From',
			'to' => 'To',
			'status_id' => 'Status',
			'content' => 'Content',
			'link' => 'Link',
			'price' => 'Price',
			'size' => 'Size',
			'registered_date' => 'Registered Date',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('adv_type',$this->adv_type);
		$criteria->compare('platform_id',$this->platform_id);
		$criteria->compare('appearance_id',$this->appearance_id);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('to',$this->to,true);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('size',$this->size);
		$criteria->compare('registered_date',$this->registered_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Application the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
