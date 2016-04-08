<div class="row-fluid">
    <div class="span12">
        <div class="dataTables_info" id="DataTables_Table_0_info">
            <?php foreach ($operations as $operation) { ?>
            <input name="submit" type="submit" class="button" value="<?= $operation['operationName']; ?>" onClick="document.myform.action='<?= $menuInfos['appMenus']['delete']['url']; ?>?action=deleteMul';return confirm('<?= Yii::t('admin-common', 'Delete Selected Infos Confirm'); ?>')">
            <input type="submit" class="button" name="dosubmit" value="排序" />
        </div>
    </div>
</div>
<script>

</script>
