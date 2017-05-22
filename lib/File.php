<?php

class File {
    var $path = null;
    var $file = null;

    public function __construct($path, $file)
    {
        $this->path = $path;
        $this->file = $file;
    }

}