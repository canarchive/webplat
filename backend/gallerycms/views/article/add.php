<script language="JavaScript">
document.domain='alyee.biz';
</script>
<?php
$formContent = $this->render('_form', ['model' => $model]);

echo $this->render('@app/views/common/change', ['formContent' => $formContent]);
