<?php

namespace app\models;

use Yii;

use yii\web\UploadedFile;
/**
 * This is the model class for table "artikel".
 *
 * @property integer $id_berita
 * @property integer $id_kategori
 * @property string $username
 * @property string $judul
 * @property string $judul_seo
 * @property string $headline
 * @property string $isi_berita
 * @property string $hari
 * @property string $tanggal
 * @property string $jam
 * @property string $gambar
 * @property integer $dibaca
 * @property string $tag
 */
class Artikel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artikel';
    }

    /**
     * @inheritdoc
     */
	 
    public function rules()
    {
        return [
            [['id_kategori', 'judul', 'isi_berita'], 'required'],
            [['id_kategori', 'dibaca'], 'integer'],
            [['headline', 'isi_berita'], 'string'],
            [['tanggal', 'jam'], 'safe'],
            [['username'], 'string', 'max' => 30],
			[['gambar'], 'file','skipOnEmpty' => true],
            [['judul', 'judul_seo', 'tag'], 'string', 'max' => 100],

        ];
    }
	//kategori relation
	public function getJenisKategori()
	{
		return $this->hasOne(Kategori::className(), ['id_kategori' => 'id_kategori']);
	}
	public function getKategori() {
		return $this->jenisKategori->nama_kategori;
	}
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'id_kategori' => 'Id Kategori',
            'username' => 'Username',
            'judul' => 'Judul',
            'judul_seo' => 'Judul Seo',
            'headline' => 'Headline',
            'isi_berita' => 'Isi Berita',
            'hari' => 'Hari',
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
            'gambar' => 'Gambar',
            'dibaca' => 'Dibaca',
            'tag' => 'Tag',
			'kategori'=>'Kategori'
        ];
    }
}
