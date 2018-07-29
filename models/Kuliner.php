<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kuliner".
 *
 * @property integer $id_kuliner
 * @property integer $id_user
 * @property string $nama
 * @property string $alamat
 * @property string $no_telp
 * @property string $posisi_lat
 * @property string $posisi_lng
 * @property string $harga_tiket_parkir_motor
 * @property string $harga_tiket_parkir_mobil
 * @property string $harga_tiket_parkir_bus
 * @property string $foto
 * @property string $deskripsi
 * @property string $fasilitas
 * @property string $jam_buka
 * @property string $jam_tutup
 * @property string $akses
 * @property string $harga_atas
 */
class Kuliner extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kuliner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file'], 'file','extensions' => 'png, jpg, jpeg', 'maxFiles' => 30, 'maxSize' => 512000, 'tooBig' => 'Limit is 500KB'],
            [['id_user', 'nama', 'alamat', 'foto', 'deskripsi', 'harga_atas'], 'required'],
            [['id_user'], 'integer'],
            [['posisi_lat', 'posisi_lng', 'harga_tiket_parkir_motor', 'harga_tiket_parkir_mobil', 'harga_tiket_parkir_bus', 'harga_atas'], 'number'],
            [['foto', 'deskripsi', 'fasilitas', 'akses'], 'string'],
            [['nama'], 'string', 'max' => 100],
            [['alamat'], 'string', 'max' => 250],
            [['no_telp'], 'string', 'max' => 20],
            [['jam_buka', 'jam_tutup'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kuliner' => 'Id Kuliner',
            'id_user' => 'Id User',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'posisi_lat' => 'Posisi Lat',
            'posisi_lng' => 'Posisi Lng',
            'harga_tiket_parkir_motor' => 'Tiket Parkir Motor',
            'harga_tiket_parkir_mobil' => 'Tiket Parkir Mobil',
            'harga_tiket_parkir_bus' => 'Tiket Parkir Bus',
            'foto' => 'Foto',
            'deskripsi' => 'Deskripsi',
            'fasilitas' => 'Fasilitas',
            'jam_buka' => 'Jam Buka',
            'jam_tutup' => 'Jam Tutup',
            'akses' => 'Akses',
            'harga_atas' => 'Harga Atas',
        ];
    }

    public function getMenu()
    {
        return $this->hasMany(Menu::className(), ['id_kuliner' => 'id_kuliner']);
    }
}
