<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property string $id
 * @property string $value
 * @property string $author_id
 * @property string $date
 * @property string $views
 * @property string $descr
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value', 'author_id', 'date'], 'required'],
            [['author_id', 'views'], 'integer'],
            [['date'], 'safe'],
            [['value'], 'string', 'max' => 2048],
            [['descr'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Links',
            'author_id' => 'Author ID',
            'date' => 'Date',
            'views' => 'Views',
            'descr' => 'Description',
        ];
    }
}
