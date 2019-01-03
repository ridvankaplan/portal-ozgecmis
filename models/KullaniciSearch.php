<?php

namespace kouosl\portal-ozgecmis\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Kullanici;

/**
 * KullaniciSearch represents the model behind the search form of `frontend\models\Kullanici`.
 */
class KullaniciSearch extends Kullanici
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tel'], 'integer'],
            [['isim', 'soyisim', 'ozet', 'email', 'website', 'lokasyon', 'lise', 'universite', 'yetenek', 'dil', 'sertifika', 'bolum'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kullanici::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tel' => $this->tel,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'soyisim', $this->soyisim])
            ->andFilterWhere(['like', 'ozet', $this->ozet])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'lokasyon', $this->lokasyon])
            ->andFilterWhere(['like', 'lise', $this->lise])
            ->andFilterWhere(['like', 'universite', $this->universite])
            ->andFilterWhere(['like', 'yetenek', $this->yetenek])
            ->andFilterWhere(['like', 'dil', $this->dil])
            ->andFilterWhere(['like', 'sertifika', $this->sertifika])
            ->andFilterWhere(['like', 'bolum', $this->bolum]);

        return $dataProvider;
    }
}
