<?php
class FileUtility {
    public static function writeToFile($filename, $data) {
        $file = fopen($filename, 'w');
        if ($file === false) {
            throw new Exception("Unable to open file for writing.");
        }
        fwrite($file, $data);
        fclose($file);
    }

    public static function readFromFile($filename) {
        if (!file_exists($filename)) {
            throw new Exception("File does not exist.");
        }
        return file_get_contents($filename);
    }

    public static function openFile($filename) {
        $file = fopen($filename, 'r');
        if ($file === false) {
            throw new Exception("Unable to open file.");
        }
        return $file;
    }
}
