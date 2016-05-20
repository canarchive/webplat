<?php
$formContent = $this->render('_form_import', ['model' => $model, 'import' => true]);

echo $this->render('@app/views/common/change', ['formContent' => $formContent]);
