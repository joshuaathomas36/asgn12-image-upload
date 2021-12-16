<?php
    require_once 'db-functions.php';
    require_once 'db-credentials.php';
    require_once 'upload-image.class.php';

    $database = db_connect();
    UploadImage::set_database($database);