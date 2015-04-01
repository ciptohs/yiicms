<?php

namespace app\models;

use Yii;

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
            [['jdl_album','set_as', 'album_seo', 'gbr_album'], 'required'],
            [['aktif'], 'string'],
            [['jdl_album', 'album_seo', 'gbr_album'], 'string', 'max' => 100]
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
        ];
    }
}
