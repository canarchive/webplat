<?php

$controller = $this->context;
$menuInfos = $controller->menuInfos;

$modules = $menuModel->getModuleInfos();
$displays = $menuModel->getDisplayInfos();
?>
<thead>
    <tr>
        <th><?= $menuModel->getAttributeLabel('name') . '( ' . $menuModel->getAttributeLabel('id') . ' )'; ?></th>
        <th width='60px'><input type='checkbox' value='' id='check_box' onclick='selectall("menu_ids[]");' /></th>
        <th><?= $menuModel->getAttributeLabel('code'); ?></th>
        <th><?= $menuModel->getAttributeLabel('module'); ?></th>
        <th><?= $menuModel->getAttributeLabel('display'); ?></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($infos as $info) { ?>
    <tr id='node-<?= $info['id']; ?>' class="<?= $info['parentNode']; ?>">
        <td style='padding-left:30px;'><?= $info['name'] . '( ' . $info['id'] . ' )'; ?></td>
		<td><input type='checkbox' name='menu_ids[]' class="checkbox_ids" value='<?= $info['code']; ?>' level="<?= $info['level']; ?>" onclick="javascript:checknode(this);" <?php if (in_array($info['code'], $permissionKeys)) { echo 'checked'; } ?>/></td>
        <td align='center'><?= $info['code']; ?></td>
        <td align='center'><?= $modules[$info['module']]; ?></td>
        <td align='center'><?= $displays[$info['display']]; ?></td>
    </tr>
    <?php } ?>
</tbody>
