<?php
    namespace app\Services;
    
    class File
    {
        private $fileName;
        private $filePath;
        private $fileExt;
        private $fileHeader;
        
        public function __construct(string $name, string $fileHeader, string $path, string $ext)
        {
            $this->fileName = $name;
            $this->filePath = $path;
            $this->fileExt = $ext;
            $this->fileHeader = $fileHeader;
        }
    }