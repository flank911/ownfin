<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "operations".
 *
 * @property integer $id
 * @property integer $uid
 * @property string $date
 * @property double $summ
 * @property integer $cat_id
 * @property string $comment
 */
class Operations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'cat_id'], 'integer'],
            [['date'], 'safe'],
            [['summ'], 'number'],
            [['comment'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'date' => 'Date',
            'summ' => 'Summ',
            'cat_id' => 'Cat ID',
            'comment' => 'Comment',
        ];
    }
}
