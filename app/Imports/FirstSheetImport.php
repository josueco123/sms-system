<?php

namespace App\Imports;


use Maatwebsite\Excel\Concerns\{ToArray,WithStartRow,WithValidation};

class FirstSheetImport implements ToArray,WithStartRow,WithValidation
{
    private $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function startRow(): int
    {
        return 2;
    }

    public function array(array $rows)
    {
        foreach ($rows as $row) {
            $this->data[] = array('phone' => $row[0], 'message' => $row[1]);
        }
    }

    public function getArray(): array
    {
        return $this->data;
    }

    public function rules(): array{
        return [
          '0' => 'required',
          '1' => 'required'
        ];
      }
}