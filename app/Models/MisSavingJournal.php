<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisSavingJournal extends Model
{
    use HasFactory;

    protected $table = 'mis_saving_journal';

    protected $fillable = [
        'KD_CAB',
        'TANGGAL',
        'NOREK_BUBES',
        'DATA_POSTING',
        'NO_TX',
        'NO_REKENING',
        'NAMA_NASABAH',
        'KDTX',
        'DEBET',
        'KREDIT',
        'KETERANGAN',
        'JAM_TX',
        'USER_TX',
        'CAB_OTORISASI',
        'USER_OTORISASI',
    ];
}
