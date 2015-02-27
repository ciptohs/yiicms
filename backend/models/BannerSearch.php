<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Banner;

/**
 * BannerSearch represents the model behind the search form about `app\models\Banner`.
 */
class BannerSearch extends Banner
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_banner'], 'integer'],
            [['judul', 'url', 'gambar_banner', 'tgl_posting'], 'safe'],
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
        $query = Banner::find();

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
            'id_banner' => $this->id_banner,
            'tgl_posting' => $this->tgl_posting,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'gambar_banner', $this->gambar_banner]);

        return $dataProvider;
    }
}
