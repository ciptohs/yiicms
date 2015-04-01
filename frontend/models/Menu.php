<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id_main
 * @property string $nama_menu
 * @property string $link
 * @property string $aktif
 * @property string $adminmenu
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aktif', 'adminmenu'], 'string'],
            [['adminmenu'], 'required'],
            [['nama_menu'], 'string', 'max' => 50],
            [['link'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_main' => 'Id Main',
            'nama_menu' => 'Nama Menu',
            'link' => 'Link',
            'aktif' => 'Aktif',
            'adminmenu' => 'Adminmenu',
        ];
    }
}
