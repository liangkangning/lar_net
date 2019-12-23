<?php

namespace common\models;

use Yii;
use common\modelsgii\Position;

/**
 * This is the model class for table "{{%ad}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $company
 * @property string $country
 * @property string $message
 * @property integer $create_time
 * @property string $ip
 * @property string $from
 */
class SendMail extends \common\core\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%send_mail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email','company','country','ip'], 'string', 'max' => 50],
            [['message','from'], 'string', 'max' => 255],
            [['create_time'],'integer'],

            ['from','required','on'=>['all','simple']],
            ['name','required','message'=>'Name is required.','on'=>['all']],
            ['email','required','message'=>'Email is required.','on'=>['all','simple']],
            ['message','required','message'=>'Massage is required.','on'=>['all','simple']],
            ['email', 'email','message'=>'This Email is not valid.'],
        ];
    }
    public function scenarios()
    {
        return [
              'all'=>['name','email','company','country','message','from'],
              'simple'=>['email','message','from'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'company' => 'Company',
            'country'=>'Country',
            'message' => 'Message',
            'create_time'=>'create_time',
            'ip'=>'ip',
            'from'=>'from'

        ];
    }

    public function beforeSave($insert)
    {
        $black_id = ['110.184.29.139'];
        parent::beforeSave($insert);
       if ($insert){
           if (in_array(Yii::$app->request->userIP,$black_id)) return false;//黑名单ip
           
           $this->create_time=time();
           $this->ip=Yii::$app->request->userIP;
           $this->from=$this->from;
           if ($this->email=='sample@email.tst'){
               return false;
           }
           if(strpos($this->from,'large.net') !==false){
               return true;
           }else{
               return false;
           }
       }
        return true;

    }

}
