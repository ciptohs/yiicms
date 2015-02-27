<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kontak;

/**
 * KontakSearch represents the model behind the search form about `app\models\Kontak`.
 */
class KontakSearch extends Kontak
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_hubungi'], 'integer'],
            [['nama', 'email', 'subjek', 'pesan', 'tanggal'], 'safe'],
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
        $query = Kontak::find();

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
            'id_hubungi' => $this->id_hubungi,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'subjek', $this->subjek])
            ->andFilterWhere(['like', 'pesan', $this->pesan]);

        return $dataProvider;
    }
}
