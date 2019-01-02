<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "yetenek".
 *
 * @property int $id
 * @property string $isim
 * @property string $seviye
 * @property int $kullanici-id
 */
class Yetenek extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yetenek';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'seviye', 'kullanici-id'], 'required'],
            [['kullanici-id'], 'integer'],
            [['isim', 'seviye'], 'string', 'max' => 128],
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
            'seviye' => 'Seviye',
            'kullanici-id' => 'Kullanici ID',
        ];
    }
}
