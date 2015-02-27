<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use app\models\UploadForm;
/**
 * This is the model class for table "gallery".
 *
 * @property integer $id_gallery
 * @property integer $id_album
 * @property string $jdl_gallery
 * @property string $gallery_seo
 * @property string $keterangan
 * @property string $gbr_gallery
 */
 
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_album','gallery_seo', 'keterangan',], 'required'],
            [['id_album'], 'integer'],
            [['keterangan'], 'string'],
			[['gbr_gallery'], 'file', 'skipOnEmpty' => false],
            [['jdl_gallery', 'gallery_seo'], 'string', 'max' => 100]
        ];
    }
	public function getAlbum_rel()
	{
		return $this->hasOne(Album::className(), ['id_album' => 'id_album']);
	}
	public function getNama_album() {

		return $this->album_rel->jdl_album;
	
	}
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gallery' => 'Id Gallery',
            'id_album' => 'Id Album',
            'jdl_gallery' => 'Jdl Gallery',
            'gallery_seo' => 'Gallery Seo',
            'keterangan' => 'Keterangan',
            'gbr_gallery' => 'Gbr Gallery',
        ];
    }
}
