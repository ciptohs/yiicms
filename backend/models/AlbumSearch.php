<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Album;

/**
 * AlbumSearch represents the model behind the search form about `app\models\Album`.
 */
class AlbumSearch extends Album
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_album'], 'integer'],
            [['jdl_album', 'album_seo', 'gbr_album', 'aktif'], 'safe'],
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
        $query = Album::find();

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
            'id_album' => $this->id_album,
        ]);

        $query->andFilterWhere(['like', 'jdl_album', $this->jdl_album])
            ->andFilterWhere(['like', 'album_seo', $this->album_seo])
            ->andFilterWhere(['like', 'gbr_album', $this->gbr_album])
            ->andFilterWhere(['like', 'aktif', $this->aktif]);

        return $dataProvider;
    }
}
