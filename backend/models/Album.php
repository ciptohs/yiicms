<?php

namespace app\models;

use Yii;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * This is the model class for table "album".
 *
 * @property integer $id_album
 * @property string $jdl_album
 * @property string $album_seo
 * @property string $gbr_album
 * @property string $aktif
 */
class Album extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'album';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jdl_album', 'album_seo'], 'required'],
            [['aktif'], 'string'],
			[['gbr_album'], 'file', 'skipOnEmpty' => true],
            [['jdl_album', 'album_seo'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_album' => 'Id Album',
            'jdl_album' => 'Jdl Album',
            'album_seo' => 'Album Seo',
            'gbr_album' => 'Gbr Album',
            'aktif' => 'Aktif',
            'set_as'=>'Set As',
        ];
    }
	public function getImageurl()
	{
	return \Yii::$app->request->BaseUrl.'picture/album/'.$this->gbr_album;
	}
}
