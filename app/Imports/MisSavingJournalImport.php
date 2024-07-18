<?php

namespace App\Imports;

use App\Models\MisSavingJournal;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MisSavingJournalImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new MisSavingJournal([
            'KD_CAB' => $row['kd_cab'],
            'TANGGAL' => $row['tanggal'],
            'NOREK_BUBES' => $row['norek_bubes'],
            'DATA_POSTING' => $row['data_posting'],
            'NO_TX' => $row['no_tx'],
            'NO_REKENING' => $row['no_rekening'],
            'NAMA_NASABAH' => $row['nama_nasabah'],
            'KDTX' => $row['kdtx'],
            'DEBET' => $row['debet'],
            'KREDIT' => $row['kredit'],
            'KETERANGAN' => $row['keterangan'],
            'JAM_TX' => $row['jam_tx'],
            'USER_TX' => $row['user_tx'],
            'CAB_OTORISASI' => $row['cab_otorisasi'],
            'USER_OTORISASI' => $row['user_otorisasi'],
        ]);
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => '|'
        ];
    }
}
