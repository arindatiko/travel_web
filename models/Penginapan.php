<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penginapan".
 *
 * @property integer $id_penginapan
 * @property integer $id_user
 * @property string $nama
 * @property string $alamat
 * @property string $no_telp
 * @property string $posisi_lat
 * @property string $posisi_lng
 * @property string $foto
 * @property string $deskripsi
 * @property string $fasilitas
 * @property string $akses
 */
class Penginapan extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penginapan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file'], 'file','extensions' => 'png, jpg, jpeg', 'maxFiles' => 30, 'maxSize' => 512000, 'tooBig' => 'Limit is 500KB'],
            [['id_user'], 'integer'],
            [['nama', 'alamat', 'no_telp', 'posisi_lat', 'posisi_lng', 'foto', 'deskripsi', 'akses'], 'required'],
            [['posisi_lat', 'posisi_lng'], 'number'],
            [['foto', 'deskripsi', 'fasilitas', 'akses'], 'string'],
            [['nama'], 'string', 'max' => 100],
            [['alamat'], 'string', 'max' => 250],
            [['no_telp'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_penginapan' => 'Id Penginapan',
            'id_user' => 'Id User',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'posisi_lat' => 'Posisi Lat',
            'posisi_lng' => 'Posisi Lng',
            'foto' => 'Foto',
            'deskripsi' => 'Deskripsi',
            'fasilitas' => 'Fasilitas',
            'akses' => 'Akses',
        ];
    }
}
