<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "submenu".
 *
 * @property integer $id_sub
 * @property string $nama_sub
 * @property string $link_sub
 * @property integer $id_main
 * @property integer $id_submain
 * @property string $aktif
 * @property string $adminsubmenu
 */
class Submenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'submenu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_main', 'id_submain', 'adminsubmenu'], 'required'],
            [['id_main', 'id_submain'], 'integer'],
            [['aktif', 'adminsubmenu'], 'string'],
            [['nama_sub'], 'string', 'max' => 50],
            [['link_sub'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sub' => 'Id Sub',
            'nama_sub' => 'Nama Sub',
            'link_sub' => 'Link Sub',
            'id_main' => 'Id Main',
            'id_submain' => 'Id Submain',
            'aktif' => 'Aktif',
            'adminsubmenu' => 'Adminsubmenu',
        ];
    }
}
