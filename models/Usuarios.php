<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "crud".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $fecha
 * @property string $ciudad
 * @property string $estilo
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'crud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nombre', 'fecha', 'ciudad', 'estilo'], 'required'],
            [['id'], 'integer'],
            [['fecha'], 'safe'],
            [['nombre', 'estilo'], 'string', 'max' => 20],
            [['ciudad'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'fecha' => 'Fecha',
            'ciudad' => 'Ciudad',
            'estilo' => 'Estilo',
        ];
    }
}
