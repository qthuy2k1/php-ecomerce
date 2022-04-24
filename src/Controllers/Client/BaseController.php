<?php

namespace App\Controllers\Client;

class BaseController
{

    const VIEW_FOLDER_NAME = 'src/Views';
    const MODEL_FOLDER_NAME = 'src/Models';
    /**
     * Description: 
     *  + path name: folderName.fileName
     *  + Get folderName and fileName after 'Views' folder
     */
    protected function view($viewPath, array $data = [])
    {

        foreach ($data as $key => $val) {
            $$key = $val;
        }

        return require(self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php');
    }

    protected function loadModel($modelPath)
    {
        return require(self::MODEL_FOLDER_NAME . '/' . str_replace('.', '/', $modelPath) . '.php');
    }
}
