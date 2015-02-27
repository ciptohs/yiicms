<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Download;

/**
 * DownloadSearch represents the model behind the search form about `app\models\Download`.
 */
class DownloadSearch extends Download
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_download', 'hits'], 'integer'],
            [['judul', 'nama_file', 'tgl_posting'], 'safe'],
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
        $query = Download::find();

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
            'id_download' => $this->id_download,
            'tgl_posting' => $this->tgl_posting,
            'hits' => $this->hits,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'nama_file', $this->nama_file]);

        return $dataProvider;
    }
}
