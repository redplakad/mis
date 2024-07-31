<?php

namespace App\Imports;

use App\Models\MisSaving;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MisSavingImport implements ToModel, WithHeadingRow
{
    protected $datadate;

    public function __construct($datadate)
    {
        $this->datadate = $datadate;
    }

    public function model(array $row)
    {
        return new MisSaving([
            'DATADATE' => $this->datadate, // Menggunakan nilai datadate dari constructor
            'NO_REK' => $row['no_rek'],
            'CIF' => $row['cif'],
            'NAMA_NASABAH' => $row['nama_nasabah'],
            'ALAMAT' => $row['alamat'],
            'KD_PRD' => $row['kd_prd'],
            'KET_KD_PRD' => $row['ket_kd_prd'],
            'GOL' => $row['gol'],
            'SALDO_EFEKTIF' => str_replace(",", "", $row['saldo_efektif']),
            'SMP_TGL_CADANG' => $row['smp_tgl_cadang'],
            'NILAI_CADANG' => str_replace(",", "", $row['nilai_cadang']),
            'SLD_MINIMUM' => str_replace(",", "", $row['sld_minimum']),
            'SLD_TERSEDIA' => str_replace(",", "", $row['sld_tersedia']),
            'SLD_BLOKIR' => str_replace(",", "", $row['sld_blokir']),
            'TGL_MULAI_BLKR' => $row['tgl_mulai_blkr'],
            'PHK_TERKAIT' => $row['phk_terkait'],
            'TGL_PEMBUKAAN' => $row['tgl_pembukaan'],
            'SUKU_BGA' => $row['suku_bga'],
            'BUNGA' => $row['bunga'],
            'AO' => $row['ao'],
            'CAB_REK' => $row['cab_rek'],
            'TGL_TUTUP' => $row['tgl_tutup'],
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => '|'
        ];
    }
}
