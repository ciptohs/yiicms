<?php

namespace app\models;

use Yii;
use app\models\UploadForm;
use yii\web\UploadedFile;
/**
 * This is the model class for table "download".
 *
 * @property integer $id_download
 * @property string $judul
 * @property string $nama_file
 * @property string $tgl_posting
 * @property integer $hits
 */
class Download extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'download';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul','tgl_posting'], 'required'],
            [['tgl_posting'], 'safe'],
            [['hits'], 'integer'],
			[['nama_file'],'file','skipOnEmpty'=>true],
            [['judul'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_download' => 'Id Download',
            'judul' => 'Judul',
            'nama_file' => 'Nama File',
            'tgl_posting' => 'Tgl Posting',
            'hits' => 'Hits',
        ];
    }
}
