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
	public $nama_album;
	
    public function rules()
    {
        return [
            [['id_gallery', 'id_album'], 'integer'],
            [['jdl_gallery', 'gallery_seo', 'keterangan', 'gbr_gallery','nama_album'], 'safe'],
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
		$query->joinWith(['album_rel']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
	$dataProvider->sort->attributes['nama_album'] = [
        // The tables are the ones our relation are configured to
        // in my case they are prefixed with "tbl_"
        'asc' => ['album.jdl_album' => SORT_ASC],
        'desc' => ['album.jdl_album' => SORT_DESC],
    ];
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_gallery' => $this->id_gallery,
        ]);

        $query->andFilterWhere(['like', 'jdl_gallery', $this->jdl_gallery])
            ->andFilterWhere(['like', 'gallery_seo', $this->gallery_seo])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'gbr_gallery', $this->gbr_gallery]);
		$query->joinWith(['album_rel' => function ($q) {
        $q->where('album.jdl_album LIKE "%' . $this->nama_album. '%"');
    }]);
        return $dataProvider;
    }
}
