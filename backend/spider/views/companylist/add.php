<?php
$addMul = isset($addMul) ? $addMul : false;
$formContent = $this->render('_form', ['model' => $model, 'addMul' => $addMul]);

echo $this->render('@app/views/common/change', ['formContent' => $formContent]);
