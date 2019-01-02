<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sertifika".
 *
 * @property int $id
 * @property string $isim
 * @property string $kurum
 * @property int $kullanici-id
 */
class Sertifika extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sertifika';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'kurum', 'kullanici-id'], 'required'],
            [['kullanici-id'], 'integer'],
            [['isim', 'kurum'], 'string', 'max' => 128],
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
            'kurum' => 'Kurum',
            'kullanici-id' => 'Kullanici ID',
        ];
    }
}
