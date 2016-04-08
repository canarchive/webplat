<?php

$controller = $this->context;
$menuInfos = $controller->menuInfos;

$modules = $model->getModuleInfos();
$displays = $model->getDisplayInfos();
?>
<thead>
    <tr>
        <th><?= $model->getAttributeLabel('name') . '( ' . $model->getAttributeLabel('id') . ' )'; ?></th>
        <th width='60px'><input type='checkbox' value='' id='check_box' onclick='selectall("mulIds[]");' /></th>
        <th><?= $model->getAttributeLabel('orderlist'); ?></th>
        <th><?= $model->getAttributeLabel('code'); ?></th>
        <th><?= $model->getAttributeLabel('module'); ?></th>
        <th><?= $model->getAttributeLabel('controller'); ?></th>
        <th><?= $model->getAttributeLabel('method'); ?></th>
        <th><?= $model->getAttributeLabel('display'); ?></th>
        <th></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($infos as $info) { ?>
    <tr id='node-<?= $info['id']; ?>' class="<?= $info['parentNode']; ?>">
        <td style='padding-left:30px;'><?= $info['name'] . '( ' . $info['id'] . ' )'; ?></td>
        <td><input type='checkbox' name='mulIds[]' class="checkbox_ids" value='<?= $info['id']; ?>' /></td>
        <td align='center'><input name='listorders[<?= $info['id']; ?>]' type='text' style='width:30px;' value='<?= $info['orderlist']; ?>' class='input-text-c'></td>
        <td align='center'><?= $info['code']; ?></td>
        <td align='center'><?= $modules[$info['module']]; ?></td>
        <td align='center'><?= $info['controller']; ?></td>
        <td align='center'><?= $info['method']; ?></td>
        <td align='center'><?= $displays[$info['display']]; ?></td>
        <td>
        <?php
        foreach ($menuInfos['appMenus'] as $method => $appMenu) {
          if ($appMenu['display'] != 4) continue;
          $url = $appMenu['url'] . '?id=' . $info['id'];
          $urlDelete = 'javascript:confirmurl("' . $url . '", "' . Yii::t('admin-common', 'Confirm delete') . '( ' . $info['name'] . ' )?");';
          $menuUrl = $method == 'delete' ? $urlDelete : $url;
          echo "<a href='{$menuUrl}'>{$appMenu['name']}</a> ";
        }
        ?>
        </td>
    </tr>
    <?php } ?>
</tbody>
