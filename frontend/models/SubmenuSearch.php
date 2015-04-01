<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Submenu;

/**
 * SubmenuSearch represents the model behind the search form about `app\models\Submenu`.
 */
class SubmenuSearch extends Submenu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sub', 'id_main', 'id_submain'], 'integer'],
            [['nama_sub', 'link_sub', 'aktif', 'adminsubmenu'], 'safe'],
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
        $query = Submenu::find();

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
            'id_sub' => $this->id_sub,
            'id_main' => $this->id_main,
            'id_submain' => $this->id_submain,
        ]);

        $query->andFilterWhere(['like', 'nama_sub', $this->nama_sub])
            ->andFilterWhere(['like', 'link_sub', $this->link_sub])
            ->andFilterWhere(['like', 'aktif', $this->aktif])
            ->andFilterWhere(['like', 'adminsubmenu', $this->adminsubmenu]);

        return $dataProvider;
    }
}
