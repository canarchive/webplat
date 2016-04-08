<?php

$controller = $this->context;
$menuInfos = $controller->menuInfos;
$updateUrl = isset($menuInfos['appMenus']['update']) ? $menuInfos['appMenus']['update']['url'] : '';

$modules = $model->getModuleInfos();
$displays = $model->getDisplayInfos();
?>
<thead>
    <tr>
        <th><?= $model->getAttributeLabel('name') . '( ' . $model->getAttributeLabel('id') . ' )'; ?></th>
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
		<td>
		    <input type="text" onchange="updateElemByAjax('<?= $updateUrl; ?>', <?= $info['id']; ?>, 'orderlist', this.value);" class="input-text-c" value="<?= $info['orderlist']; ?>" style="width:30px;" name="orderlist">
        </td>
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
