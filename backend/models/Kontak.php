<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kontak".
 *
 * @property integer $id_hubungi
 * @property string $nama
 * @property string $email
 * @property string $subjek
 * @property string $pesan
 * @property string $tanggal
 */
class Kontak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kontak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'email', 'subjek', 'pesan', 'tanggal'], 'required'],
            [['pesan'], 'string'],
            [['tanggal'], 'safe'],
            [['nama'], 'string', 'max' => 50],
            [['email', 'subjek'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_hubungi' => 'Id Hubungi',
            'nama' => 'Nama',
            'email' => 'Email',
            'subjek' => 'Subjek',
            'pesan' => 'Pesan',
            'tanggal' => 'Tanggal',
        ];
    }
}
