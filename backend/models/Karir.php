<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karir".
 *
 * @property integer $id_karir
 * @property string $judul
 * @property string $open_date
 * @property string $close_date
 * @property string $kualifikasi
 * @property string $experience
 * @property string $usia
 * @property string $jenis_kelamin
 * @property string $deskripsi
 * @property integer $hit
 * @property string $publish
 * @property string $create_date
 */
class Karir extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'karir';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul', 'open_date', 'close_date', 'kualifikasi', 'experience', 'usia', 'jenis_kelamin', 'deskripsi', 'hit', 'publish', 'create_date'], 'required'],
            [['open_date', 'close_date', 'create_date'], 'safe'],
            [['jenis_kelamin', 'deskripsi', 'publish'], 'string'],
            [['hit'], 'integer'],
            [['judul'], 'string', 'max' => 266],
            [['kualifikasi', 'experience', 'usia'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_karir' => 'Id Karir',
            'judul' => 'Judul',
            'open_date' => 'Open Date',
            'close_date' => 'Close Date',
            'kualifikasi' => 'Kualifikasi',
            'experience' => 'Experience',
            'usia' => 'Usia',
            'jenis_kelamin' => 'Jenis Kelamin',
            'deskripsi' => 'Deskripsi',
            'hit' => 'Hit',
            'publish' => 'Publish',
            'create_date' => 'Create Date',
        ];
    }
}
