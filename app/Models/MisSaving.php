<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisSaving extends Model
{
    use HasFactory;

    protected $table = 'mis_saving';

    protected $fillable = [
        'DATADATE',
        'NO_REK',
        'CIF',
        'NAMA_NASABAH',
        'ALAMAT',
        'KD_PRD',
        'KET_KD_PRD',
        'GOL',
        'SALDO_EFEKTIF',
        'SMP_TGL_CADANG',
        'NILAI_CADANG',
        'SLD_MINIMUM',
        'SLD_TERSEDIA',
        'SLD_BLOKIR',
        'TGL_MULAI_BLKR',
        'PHK_TERKAIT',
        'TGL_PEMBUKAAN',
        'SUKU_BGA',
        'BUNGA',
        'AO',
        'CAB_REK',
        'TGL_TUTUP'
    ];
}
?>
