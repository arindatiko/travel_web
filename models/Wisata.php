 <?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wisata".
 *
 * @property integer $id_wisata
 * @property integer $id_user
 * @property string $nama
 * @property string $desa
 * @property string $kecamatan
 * @property string $tiket_masuk_dewasa
 * @property string $tiket_masuk_anak
 * @property string $biaya_parkir_motor
 * @property string $biaya_parkir_mobil
 * @property string $biaya_parkir_bus
 * @property string $foto
 * @property string $deskripsi
 * @property string $fasilitas
 * @property string $posisi_lat
 * @property string $posisi_lng
 * @property string $akses
 * @property string $jam_buka
 * @property string $jam_tutup
 * @property string $jenis
 * @property string $jam_datang
 */
class Wisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'wisata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file'], 'file','extensions' => 'png, jpg, jpeg', 'maxFiles' => 30, 'maxSize' => 512000, 'tooBig' => 'Limit is 500KB'],
            [['id_user'], 'integer'],
            [['nama', 'desa', 'kecamatan', 'foto', 'deskripsi', 'posisi_lat', 'posisi_lng', 'akses', 'jenis'], 'required'],
            [['tiket_masuk_dewasa', 'tiket_masuk_anak', 'biaya_parkir_motor', 'biaya_parkir_mobil', 'biaya_parkir_bus', 'posisi_lat', 'posisi_lng'], 'number'],
            [['foto', 'deskripsi', 'fasilitas', 'akses', 'jenis'], 'string'],
            // [['jam_datang'], 'safe'],
            [['nama'], 'string', 'max' => 100],
            [['desa'], 'string', 'max' => 250],
            [['kecamatan'], 'string', 'max' => 50],
            [['jam_buka', 'jam_tutup'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_wisata' => 'Id Wisata',
            'id_user' => 'Id User',
            'nama' => 'Nama',
            'desa' => 'Desa',
            'kecamatan' => 'Kecamatan',
            'tiket_masuk_dewasa' => 'Tiket Masuk Dewasa',
            'tiket_masuk_anak' => 'Tiket Masuk Anak',
            'biaya_parkir_motor' => 'Parkir Motor',
            'biaya_parkir_mobil' => 'Parkir Mobil',
            'biaya_parkir_bus' => 'Parkir Bus',
            'foto' => 'Foto',
            'deskripsi' => 'Deskripsi',
            'fasilitas' => 'Fasilitas',
            'posisi_lat' => 'Posisi Lat',
            'posisi_lng' => 'Posisi Lng',
            'akses' => 'Akses',
            'jam_buka' => 'Jam Buka',
            'jam_tutup' => 'Jam Tutup',
            'jenis' => 'Jenis',
            'jam_datang' => 'Jam Datang',
        ];
    }
}
