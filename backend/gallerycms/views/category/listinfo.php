<?php

$treeContent = $this->render('_listinfo', ['model' => $model, 'infos' => $infos]);

echo $this->render('@app/views/common/listinfo_tree', ['treeContent' => $treeContent]);
