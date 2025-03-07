<?php

namespace App\Services\Impl;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
    
class QrCodeService implements \App\Services\IQrCodeService
{
    public function generateQrCode($data)
    {
        return QrCode::generate('Make me into a QrCode!');
    }
}