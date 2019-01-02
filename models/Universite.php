<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "universite".
 *
 * @property int $id
 * @property string $isim
 * @property string $bolum
 * @property int $kullanici-id
 */
class Universite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'universite';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'bolum', 'kullanici-id'], 'required'],
            [['kullanici-id'], 'integer'],
            [['isim', 'bolum'], 'string', 'max' => 128],
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
            'bolum' => 'Bolum',
            'kullanici-id' => 'Kullanici ID',
        ];
    }
}
