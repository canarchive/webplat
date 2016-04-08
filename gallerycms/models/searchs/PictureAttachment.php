<?php

namespace gallerycms\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gallerycms\models\PictureAttachment as PictureAttachmentModel;

class PictureAttachment extends PictureAttachmentModel
{
    public function search($params)
    {
        $query = PictureAttachmentModel::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        return $dataProvider;
    }
}
