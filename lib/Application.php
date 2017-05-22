<?php
require('File.php');

class Application {
    var $defaultMediaPath = 'media';
    var $layout = 'layout';
    var $templatesFolder = 'templates';
    var $files = [];

    public function __construct()
    {

    }
    
    public function run()
    {
        $path = $this->defaultMediaPath;
        $files = scandir($path);
        foreach($files as $file) {
            $pattern = '/^\..*/';
            $isFilefound = preg_match($pattern, $file);
            var_dump($isFilefound);
            if($isFilefound) {
                echo "$file not found";
            } else {
                echo "$file File found";
                $this->files[] = new File($path, $file);
            }
        }

        $this->_renderLayout();
    }

    public function _renderLayout()
    {
        include($this->templatesFolder . '/' . $this->layout . '.php');
    }

}