<?php

namespace common\models;

class SpreadModel extends BaseModel
{
    public static function getDb()
    {
        return \Yii::$app->dbSpread;
    }	

	protected function getAttachmentModel()
	{
		return new \spread\models\Attachment();
	}

	public function getDecorationInfo()
	{
		$info = \spread\decoration\models\Decoration::findOne($this->decoration_id);

		return $info;
	}

    public function exportDatas($datas)
	{
		if (empty($datas)) {
			return ['status' => '400', 'data empty'];
		}
		if (count($datas) > 10000) {
			return ['status' => '400', 'data over 10000'];
		}

        $objPHPExcel = new \PHPExcel\Spreadsheet();
        
        // Set document properties
        $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
        							 ->setLastModifiedBy("Maarten Balliauw")
        							 ->setTitle("Office 2007 XLSX Test Document")
        							 ->setSubject("Office 2007 XLSX Test Document")
        							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
        							 ->setKeywords("office 2007 openxml php")
        							 ->setCategory("Test result file");
        
        
		$i = 1;
		foreach ($datas as $data) {
            $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue('A' . $i, $data['name'])
                    ->setCellValue('B' . $i, $data['order']);
			$i++;
		}
        
        // Rename worksheet
        $objPHPExcel->getActiveSheet()->setTitle('Simple');
        
        
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
        
        
        // Redirect output to a client’s web browser (Excel2007)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="01simple.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');
        
        // If you're serving to IE over SSL, then the following may be needed
        header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
        header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header ('Pragma: public'); // HTTP/1.0
        
        $objWriter = \PHPExcel\IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;
	}	

	public function importDatas($file)
	{
        $objPHPExcel = \PHPExcel\IOFactory::load($file);
        $datas = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

		return $datas;
	}
}
