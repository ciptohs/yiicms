<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pelamar;

/**
 * PelamarSearch represents the model behind the search form about `app\models\Pelamar`.
 */
class PelamarSearch extends Pelamar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pelamar', 'id_karir'], 'integer'],
            [['nama', 'email', 'alamat', 'telepon', 'file_cv', 'cretae_date', 'ip_addres'], 'safe'],
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
        $query = Pelamar::find();

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
            'id_pelamar' => $this->id_pelamar,
            'id_karir' => $this->id_karir,
            'cretae_date' => $this->cretae_date,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'telepon', $this->telepon])
            ->andFilterWhere(['like', 'file_cv', $this->file_cv])
            ->andFilterWhere(['like', 'ip_addres', $this->ip_addres]);

        return $dataProvider;
    }
}
