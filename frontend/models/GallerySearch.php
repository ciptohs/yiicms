<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gallery;

/**
 * GallerySearch represents the model behind the search form about `app\models\Gallery`.
 */
class GallerySearch extends Gallery
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_gallery', 'id_album'], 'integer'],
            [['jdl_gallery', 'gallery_seo', 'keterangan', 'gbr_gallery'], 'safe'],
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
        $query = Gallery::find();

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
            'id_gallery' => $this->id_gallery,
            'id_album' => $this->id_album,
        ]);

        $query->andFilterWhere(['like', 'jdl_gallery', $this->jdl_gallery])
            ->andFilterWhere(['like', 'gallery_seo', $this->gallery_seo])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'gbr_gallery', $this->gbr_gallery]);

        return $dataProvider;
    }
}
