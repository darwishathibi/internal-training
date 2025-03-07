<?php

namespace App\Services;

interface IQrCodeService
{
    public function generateQrCode($data);
}