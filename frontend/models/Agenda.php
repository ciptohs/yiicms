<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property integer $id_agenda
 * @property string $tema
 * @property string $tema_seo
 * @property string $isi_agenda
 * @property string $tempat
 * @property string $pengirim
 * @property string $tgl_mulai
 * @property string $tgl_selesai
 * @property string $tgl_posting
 * @property string $jam
 * @property string $username
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tema', 'tema_seo', 'isi_agenda', 'tempat', 'pengirim', 'tgl_mulai', 'tgl_selesai', 'tgl_posting', 'jam', 'username'], 'required'],
            [['isi_agenda'], 'string'],
            [['tgl_mulai', 'tgl_selesai', 'tgl_posting'], 'safe'],
            [['tema', 'tema_seo', 'tempat', 'pengirim'], 'string', 'max' => 100],
            [['jam', 'username'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_agenda' => 'Id Agenda',
            'tema' => 'Tema',
            'tema_seo' => 'Tema Seo',
            'isi_agenda' => 'Isi Agenda',
            'tempat' => 'Tempat',
            'pengirim' => 'Pengirim',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_selesai' => 'Tgl Selesai',
            'tgl_posting' => 'Tgl Posting',
            'jam' => 'Jam',
            'username' => 'Username',
        ];
    }
}
