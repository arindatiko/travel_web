<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id_menu
 * @property integer $id_kuliner
 * @property string $nama
 * @property string $harga
 * @property string $foto
 * @property string $deskripsi
 */
class Menu extends \yii\db\ActiveRecord
{
    public $file;
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
            [['file'], 'file','extensions' => 'png, jpg, jpeg', 'maxFiles' => 30, 'maxSize' => 512000, 'tooBig' => 'Limit is 500KB'],
            [['id_kuliner'], 'integer'],
            [['nama', 'harga', 'deskripsi'], 'required'],
            [['harga'], 'number'],
            [['foto', 'deskripsi'], 'string'],
            [['nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_menu' => 'Id Menu',
            'id_kuliner' => 'Id Kuliner',
            'nama' => 'Nama',
            'harga' => 'Harga',
            'foto' => 'Foto',
            'deskripsi' => 'Deskripsi',
        ];
    }

    public function getKuliner()
    {
        return $this->hasOne(Kuliner::className(), ['id_kuliner' => 'id_kuliner']);
    }
}
