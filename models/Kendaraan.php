<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kendaraan".
 *
 * @property integer $id_jenis
 * @property string $merk
 * @property string $jenis
 * @property string $type
 * @property string $bahan_bakar
 * @property string $harga_bahan_bakar
 */
class Kendaraan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kendaraan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['merk', 'jenis', 'type', 'bahan_bakar', 'id_user'], 'required'],
            // [['harga_bahan_bakar'], 'number'],
            [['merk', 'jenis', 'type'], 'string', 'max' => 50],
            [['bahan_bakar'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jenis' => 'Id Jenis',
            'merk' => 'Merk',
            'jenis' => 'Jenis',
            'type' => 'Type',
            'bahan_bakar' => 'Bahan Bakar',
            // 'harga_bahan_bakar' => 'Harga Bahan Bakar',
        ];
    }
}
