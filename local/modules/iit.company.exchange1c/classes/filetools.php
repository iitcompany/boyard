<?php
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

namespace IITCompany\Exchange1C;

use IITCompany\Exchange1C\Service\Array2XML;

class FileTools
{
    public $uploadPath = '/upload/exchange1c/import_files/';
    public $uploadCurrentPath;
    public $fileFormat = '';
    public $fileNamePrefix = 'export_1c_';
    public $fileExport;
    public $entityType = '';
    public $LAST_ERROR;

    public function __construct($entityType = '', $fileFormat = 'xml')
    {
        if ($fileFormat) {
            $this->fileFormat = $fileFormat;
        }
        if ($entityType) {
            $this->entityType = strtolower($entityType);
            $this->fileNamePrefix = $this->fileNamePrefix . $this->entityType . date('_d_m_y_H_');
            $this->uploadCurrentPath = $this->uploadPath . $this->entityType . '/';
        } else {
            $this->LAST_ERROR = 'Не указан тип сущности';
            return false;
        }
        $this->prepareData();
    }

    protected function prepareData()
    {
        $this->fileExport = $this->fileNamePrefix . substr(md5(date('H_i_s')), 0, rand(5, 8)) . '.' . $this->fileFormat;
    }

    public function createExportFile($array = [])
    {
        $arContent = '';
        switch ($this->fileFormat) {
            case 'xml':
                $xmlGenerator = new Array2XML();
                $arContent = $xmlGenerator->convert($array);
                break;
            case 'json':
                $arContent = json_encode($array, JSON_UNESCAPED_UNICODE);
                break;
        }
        if (file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/' . $this->fileExport, $arContent)) {
            return $this->fileExport;
        }
        $this->LAST_ERROR = 'Ошибка создания файла';
        return false;
    }

    public function forceDownloadExportFile()
    {
        $filePath = $_SERVER['DOCUMENT_ROOT'] . '/' . $this->fileExport;

        if (file_exists($filePath)) {
            if (ob_get_level()) {
                ob_end_clean();
            }
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filePath));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filePath));
            readfile($filePath);
            exit;
        } else {
            $this->LAST_ERROR = 'Ошибка открытия файла';
            return false;
        }
    }

}
