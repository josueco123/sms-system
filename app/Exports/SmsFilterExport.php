<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class SmsFilterExport implements FromArray
{
  
  protected $sms_list;

  public function __construct(array $sms_list)
  {
    $this->sms_list = $sms_list;
  }

  public function array(): array
  {
      return $this->sms_list;
  }
}