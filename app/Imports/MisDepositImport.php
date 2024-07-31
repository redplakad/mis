<?php

namespace App\Imports;

use App\Models\MisDeposit;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MisDepositImport implements ToModel, WithHeadingRow
{
    protected $datadate;

    public function __construct($datadate)
    {
        $this->datadate = $datadate;
    }

    public function model(array $row)
    {
        return new MisDeposit([
            'DATADATE' => $this->datadate, // Menggunakan nilai datadate dari constructor
            'CAB' => $row['cab'],
            'NO_REK' => $row['no_rek'],
            'CIF' => $row['cif'],
            'NAMA_NASABAH' => $row['nama_nasabah'],
            'ALAMAT' => $row['alamat'],
            'KD_PRD' => $row['kd_prd'],
            'KET_KD_PRD' => $row['ket_kd_prd'],
            'GOL' => $row['gol'],
            'NO_BILYET' => $row['no_bilyet'],
            'BGA' => $row['bga'],
            'TGL_MULAI' => $row['tgl_mulai'],
            'TGL_AKHIR' => $row['tgl_akhir'],
            'NILAI_EFEKTIF' => $row['nilai_efektif'],
            'NILAI_NOMINAL' => $row['nilai_nominal'],
            'STAT' => $row['stat'],
            'JK_WAKTU' => $row['jk_waktu'],
            'TGL_AWAL_CADANG' => $row['tgl_awal_cadang'],
            'TGL_AKH_CADANG' => $row['tgl_akh_cadang'],
            'NILAI_CADANG' => $row['nilai_cadang'],
            'KD_PHK_TERKAIT' => $row['kd_phk_terkait'],
            'KD_BYR_BGA' => $row['kd_byr_bga'],
            'KD_ROLL_OVER' => $row['kd_roll_over'],
            'KD_NOMINAL' => $row['kd_nominal'],
            'NO_REK_NOM' => $row['no_rek_nom'],
            'KD_BUNGA' => $row['kd_bunga'],
            'NO_REK_BGA' => $row['no_rek_bga'],
            'TGL_RO' => $row['tgl_ro'],
            'BGA_JATEM' => $row['bga_jatem'],
            'NOMINAL_JATEM' => $row['nominal_jatem']
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => '|'
        ];
    }
}
