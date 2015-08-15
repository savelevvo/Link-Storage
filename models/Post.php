<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

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
class Post extends ActiveRecord
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
//            [['value', 'author_id', 'date'], 'required'],
            [['value'], 'required'],
            [['author_id', 'views'], 'integer'],
            //[['date'], 'safe'],
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

    public function beforeSave($insert = true)
    {
        if (parent::beforeSave($insert)) {
            $this->author_id = (Yii::$app->user->isGuest) ? null : Yii::$app->user->id;
            $this->date = date('Y-m-d h:m:s');
            $this->views = 0;
            return true;
        } else {
            return false;
        }
    }

}
