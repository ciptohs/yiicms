<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Agenda;

/**
 * AgendaSearch represents the model behind the search form about `app\models\Agenda`.
 */
class AgendaSearch extends Agenda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_agenda'], 'integer'],
            [['tema', 'tema_seo', 'isi_agenda', 'tempat', 'pengirim', 'tgl_mulai', 'tgl_selesai', 'tgl_posting', 'jam', 'username'], 'safe'],
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
        $query = Agenda::find();

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
            'id_agenda' => $this->id_agenda,
            'tgl_mulai' => $this->tgl_mulai,
            'tgl_selesai' => $this->tgl_selesai,
            'tgl_posting' => $this->tgl_posting,
        ]);

        $query->andFilterWhere(['like', 'tema', $this->tema])
            ->andFilterWhere(['like', 'tema_seo', $this->tema_seo])
            ->andFilterWhere(['like', 'isi_agenda', $this->isi_agenda])
            ->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'pengirim', $this->pengirim])
            ->andFilterWhere(['like', 'jam', $this->jam])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }
}
