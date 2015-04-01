<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Artikel;

/**
 * ArtikelSearch represents the model behind the search form about `app\models\Artikel`.
 */
class ArtikelSearch extends Artikel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_berita', 'id_kategori', 'dibaca'], 'integer'],
            [['username', 'judul', 'judul_seo', 'headline', 'isi_berita', 'hari', 'tanggal', 'jam', 'gambar', 'tag'], 'safe'],
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
        $query = Artikel::find();

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
            'id_berita' => $this->id_berita,
            'id_kategori' => $this->id_kategori,
            'tanggal' => $this->tanggal,
            'jam' => $this->jam,
            'dibaca' => $this->dibaca,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'judul_seo', $this->judul_seo])
            ->andFilterWhere(['like', 'headline', $this->headline])
            ->andFilterWhere(['like', 'isi_berita', $this->isi_berita])
            ->andFilterWhere(['like', 'hari', $this->hari])
            ->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'tag', $this->tag]);

        return $dataProvider;
    }
}
