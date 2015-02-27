<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelamar".
 *
 * @property integer $id_pelamar
 * @property integer $id_karir
 * @property string $nama
 * @property string $email
 * @property string $alamat
 * @property string $telepon
 * @property string $file_cv
 * @property string $cretae_date
 * @property string $ip_addres
 */
class Pelamar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pelamar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_karir', 'nama', 'email', 'alamat', 'telepon', 'file_cv', 'cretae_date', 'ip_addres'], 'required'],
            [['id_karir'], 'integer'],
            [['alamat'], 'string'],
            [['cretae_date'], 'safe'],
            [['nama', 'file_cv'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100],
            [['telepon', 'ip_addres'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pelamar' => 'Id Pelamar',
            'id_karir' => 'Id Karir',
            'nama' => 'Nama',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'file_cv' => 'File Cv',
            'cretae_date' => 'Cretae Date',
            'ip_addres' => 'Ip Addres',
        ];
    }
}
