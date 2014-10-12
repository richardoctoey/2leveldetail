<?php

/**
 * This is the model class for table "transaksi".
 *
 * The followings are the available columns in table 'transaksi':
 * @property string $id
 * @property string $no
 */
class Transaksi extends CActiveRecord
{
	public $produk_id = array();
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no', 'required','message'=>'Harus di isi'),
			array('produk_id','safe'),
			array('produk_id','apakahTerisi'),
			array('no','unique','message'=>'Sudah ada di database'),
			array('no', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, no', 'safe', 'on'=>'search'),
		);
	}
	
	public function apakahTerisi(){
		$index = 0;
		foreach($this->produk_id as $produkId){
			if($produkId == null){
				$this->addError("produk_id[$index]",'Harus Pilih Produk Id');
			}
			$index++;
		}
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'detailTransaksis'=>array(self::HAS_MANY,'DetailTransaksi','transaksi_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'no' => 'No',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('no',$this->no,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}