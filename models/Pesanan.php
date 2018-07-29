<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesanan".
 *
 * @property integer $id_pesanan
 * @property integer $id_customer
 * @property integer $id_driver
 * @property string $posisi_lat
 * @property string $posisi_lng
 * @property string $waktu_pesan
 * @property string $waktu_acc
 * @property string $total_budget
 * @property integer $status
 * @property integer $status_selesai
 */
class Pesanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pesanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_customer', 'id_driver', 'status', 'status_selesai'], 'integer'],
            [['posisi_lat', 'posisi_lng', 'total_budget'], 'number'],
            [['waktu_pesan', 'waktu_acc'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pesanan' => 'Id Pesanan',
            'id_customer' => 'Id Customer',
            'id_driver' => 'Id Driver',
            'posisi_lat' => 'Posisi Lat',
            'posisi_lng' => 'Posisi Lng',
            'waktu_pesan' => 'Waktu Pesan',
            'waktu_acc' => 'Waktu Acc',
            'total_budget' => 'Total Budget',
            'status' => 'Status',
            'status_selesai' => 'Status Selesai',
        ];
    }
}
