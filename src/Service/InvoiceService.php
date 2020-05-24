<?php


namespace App\Service;


use App\Repository\InvoiceRepository;

class InvoiceService
{
    private $ir;

    public function __construct(InvoiceRepository $ir)
    {
        $this->ir = $ir;
    }

    public function generateNumber()
    {
        $lastRecord = $this->ir->findByLastRecord();
        $id = 1;
        if (null !== $lastRecord) {
            $id = $lastRecord->getId() + 1;
        }
        return $id . '/' . date('m/Y');
    }
}
