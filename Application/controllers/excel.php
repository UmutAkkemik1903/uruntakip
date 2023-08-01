<?php
class excel extends controller
{
    public function export()
    {
        require_once 'Classes/PHPExcel.php';
        $Excel = new PHPExcel();
        $TumUrunler = $this->model('urunlerModel')->listView();
        $Excel->getActiveSheet()->setTitle('Sayfa1');
        $Excel->getActiveSheet()->setCellValue('A1','Mal No');
        $Excel->getActiveSheet()->setCellValue('B1','Barkot');
        $Excel->getActiveSheet()->setCellValue('C1','Ürün Adı');
        $Excel->getActiveSheet()->setCellValue('D1','SKT');

        $arttır = 2;
        foreach ($TumUrunler as $key => $value)
        {

            $Excel->getActiveSheet()->setCellValue('A'.$arttır,$value['mal_no']);
            $Excel->getActiveSheet()->setCellValue('B'.$arttır,$value['barkot']);
            $Excel->getActiveSheet()->setCellValue('C'.$arttır,$value['urun_adi']);
            $Excel->getActiveSheet()->setCellValue('D'.$arttır,$value['skt']);
            $arttır++;
        }
        $kaydet = PHPExcel_IOFactory::createWriter($Excel,'Excel2007');
        $rastAd = rand(1,9000).".xlsx";
        $kaydet->save($rastAd);

        helper::flashData("statu","Ürün Başarı İle İndirildi");
        helper::redirect(SITE_URL."/urunler/index");
    }

    public function importForm()
    {
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/import');
        $this->render('site/footer');
    }

    public function import()
    {

        $tmp_name = $_FILES['file']['tmp_name'];
        require_once 'Classes/PHPExcel.php';
        $Excel = new PHPExcel();
        $objPHPExcel = PHPExcel_IOFactory::load($tmp_name);
        foreach ($objPHPExcel->getWorksheetIterator() AS $worksheet)
        {
            $worksheetTitle = $worksheet->getTitle();
            $highestRow = $worksheet->getHighestRow(); // exceldeki satırlar
            $highestColumn = $worksheet->getHighestColumn(); // exceldeki sütünlar
            $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

            for ($row = 2; $row <= $highestRow; ++$row)
            {

                $cell = $worksheet->getCellByColumnAndRow(0,$row);
                $mal_no = $cell->getValue();

                $cell2 = $worksheet->getCellByColumnAndRow(1,$row);
                $barkot = $cell2->getValue();

                $cell3 = $worksheet->getCellByColumnAndRow(2,$row);
                $urunadi = $cell3->getValue();


                $cell4 = $worksheet->getCellByColumnAndRow(3,$row);
                $skt = $cell4->getValue();

                $this->model('urunlerModel')->createExcel($mal_no,$barkot,$urunadi,$skt);


            }
        }
        helper::flashData("statu","Ürün Başarı İle Aktarıldı");
        helper::redirect(SITE_URL."/excel/importForm");

    }
}