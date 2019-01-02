<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lise".
 *
 * @property int $id
 * @property string $isim
 * @property int $kullanici-id
 */
class Lise extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lise';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'kullanici-id'], 'required'],
            [['kullanici-id'], 'integer'],
            [['isim'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'kullanici-id' => 'Kullanici ID',
        ];
    }
}
