<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kamar".
 *
 * @property integer $id_kamar
 * @property integer $id_penginapan
 * @property string $nama
 * @property integer $banyak_kamar
 * @property integer $kapasitas
 * @property string $fasilitas
 * @property string $harga
 * @property string $foto
 */
class Kamar extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kamar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['file'], 'file','extensions' => 'png, jpg, jpeg', 'maxFiles' => 30, 'maxSize' => 512000, 'tooBig' => 'Limit is 500KB'],
            [['id_penginapan', 'banyak_kamar', 'kapasitas'], 'integer'],
            [['nama', 'kapasitas', 'harga', 'foto'], 'required'],
            [['fasilitas', 'foto'], 'string'],
            [['harga'], 'number'],
            [['nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kamar' => 'Id Kamar',
            'id_penginapan' => 'Id Penginapan',
            'nama' => 'Nama',
            'banyak_kamar' => 'Banyak Kamar',
            'kapasitas' => 'Kapasitas',
            'fasilitas' => 'Fasilitas',
            'harga' => 'Harga',
            'foto' => 'Foto',
        ];
    }

    public function getPenginapan()
    {
        return $this->hasOne(Penginapan::className(), ['id_penginapan' => 'id_penginapan']);
    }
}
