<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kullanici".
 *
 * @property int $id
 * @property string $isim
 * @property string $soyisim
 * @property string $ozet
 * @property int $tel
 * @property string $email
 * @property string $website
 * @property string $lokasyon
 * @property string $lise
 * @property string $universite
 * @property string $yetenek
 * @property string $dil
 * @property string $sertifika
 */
class Kullanici extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kullanici';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'soyisim', 'ozet', 'tel', 'email', 'website', 'lokasyon', 'lise', 'universite', 'yetenek', 'dil', 'sertifika'], 'required'],
            [['tel'], 'integer'],
            [['isim', 'soyisim', 'email', 'website', 'lokasyon', 'lise', 'universite', 'yetenek', 'dil', 'sertifika'], 'string', 'max' => 128],
            [['ozet'], 'string', 'max' => 10000],
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
            'soyisim' => 'Soyisim',
            'ozet' => 'Ozet',
            'tel' => 'Tel',
            'email' => 'Email',
            'website' => 'Website',
            'lokasyon' => 'Lokasyon',
            'lise' => 'Lise',
            'universite' => 'Universite',
            'yetenek' => 'Yetenek',
            'dil' => 'Dil',
            'sertifika' => 'Sertifika',
        ];
    }
}
