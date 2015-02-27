<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "banner".
 *
 * @property integer $id_banner
 * @property string $judul
 * @property string $url
 * @property string $gambar_banner
 * @property string $tgl_posting
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'url', 'tgl_posting'], 'required'],
            [['tgl_posting'], 'safe'],
			[['gambar_banner'], 'file', 'skipOnEmpty' => true],
            [['judul', 'url', 'gambar_banner'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_banner' => 'Id Banner',
            'judul' => 'Judul',
            'url' => 'Url',
            'gambar_banner' => 'Gambar Banner',
            'tgl_posting' => 'Tgl Posting',
        ];
    }
}
