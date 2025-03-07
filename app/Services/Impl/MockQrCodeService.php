<?php

namespace App\Services\Impl;

class MockQrCodeService implements \App\Services\IQrCodeService
{
    public function generateQrCode($data)
    {
        echo "Hello, this is a mock QR code service. ";
    }
}