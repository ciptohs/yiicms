<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Karir;

/**
 * KarirSearch represents the model behind the search form about `app\models\Karir`.
 */
class KarirSearch extends Karir
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_karir', 'hit'], 'integer'],
            [['judul', 'open_date', 'close_date', 'kualifikasi', 'experience', 'usia', 'jenis_kelamin', 'deskripsi', 'publish', 'create_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Karir::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_karir' => $this->id_karir,
            'open_date' => $this->open_date,
            'close_date' => $this->close_date,
            'hit' => $this->hit,
            'create_date' => $this->create_date,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'kualifikasi', $this->kualifikasi])
            ->andFilterWhere(['like', 'experience', $this->experience])
            ->andFilterWhere(['like', 'usia', $this->usia])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'publish', $this->publish]);

        return $dataProvider;
    }
}
