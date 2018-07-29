<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rekomendasi_wisata".
 *
 * @property integer $id_rekomendasi
 * @property integer $id_user
 * @property integer $id_tujuan
 * @property string $jenis_layanan
 * @property integer $flag
 * @property string $waktu_pesan
 */
class RekomendasiWisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rekomendasi_wisata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_tujuan', 'flag'], 'integer'],
            [['jenis_layanan'], 'required'],
            [['waktu_pesan'], 'safe'],
            [['jenis_layanan'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_rekomendasi' => 'Id Rekomendasi',
            'id_user' => 'Id User',
            'id_tujuan' => 'Id Tujuan',
            'jenis_layanan' => 'Jenis Layanan',
            'flag' => 'Flag',
            'waktu_pesan' => 'Waktu Pesan',
        ];
    }
}
