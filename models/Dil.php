<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dil".
 *
 * @property int $id
 * @property string $isim
 * @property string $okuma-seviyesi
 * @property string $yazma-seviyesi
 * @property string $konusma-seviyesi
 * @property int $kullanici-id
 */
class Dil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'okuma-seviyesi', 'yazma-seviyesi', 'konusma-seviyesi', 'kullanici-id'], 'required'],
            [['kullanici-id'], 'integer'],
            [['isim', 'okuma-seviyesi', 'yazma-seviyesi', 'konusma-seviyesi'], 'string', 'max' => 128],
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
            'okuma-seviyesi' => 'Okuma Seviyesi',
            'yazma-seviyesi' => 'Yazma Seviyesi',
            'konusma-seviyesi' => 'Konusma Seviyesi',
            'kullanici-id' => 'Kullanici ID',
        ];
    }
}
