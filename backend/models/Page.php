<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id_halaman
 * @property string $judul
 * @property string $isi_halaman
 * @property string $tgl_posting
 * @property string $gambar
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'isi_halaman', 'tgl_posting', 'gambar'], 'required'],
            [['isi_halaman'], 'string'],
            [['tgl_posting'], 'safe'],
            [['judul', 'gambar'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_halaman' => 'Id Halaman',
            'judul' => 'Judul',
            'isi_halaman' => 'Isi Halaman',
            'tgl_posting' => 'Tgl Posting',
            'gambar' => 'Gambar',
        ];
    }
}
