<?php


class Notification {
    const webDev = "Belajar web development php.";
}

interface study
{
    public function personalStudy();
}

class school implements study
{
    public function personalStudy()
    {
        echo Notification::webDev;
    }
}

$school = new school();
$school->personalStudy();