<?php

namespace App\Imports;

use App\Models\MisLoan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MisLoanImport implements ToModel, WithHeadingRow
{
    protected $datadate;

    public function __construct($datadate)
    {
        $this->datadate = $datadate;
    }

    public function model(array $row)
    {
        return new MisLoan([
            'DATADATE' => $this->datadate, // Menggunakan nilai datadate dari constructor
            'CAB' => $row['cab'],
            'NOMOR_REKENING' => $row['nomor_rekening'],
            'NO_CIF' => $row['no_cif'],
            'NAMA_NASABAH' => $row['nama_nasabah'],
            'ALAMAT' => $row['alamat'],
            'KODE_KOLEK' => $row['kode_kolek'],
            'JML_HRI_PKK' => $row['jml_hri_pkk'],
            'JML_HARI_BGA' => $row['jml_hari_bga'],
            'JML_HARI_TUNGGAKAN' => $row['jml_hari_tunggakan'],
            'KD_PRD' => $row['kd_prd'],
            'KET_KD_PRD' => $row['ket_kd_prd'],
            'NOMOR_PERJANJIAN' => $row['nomor_perjanjian'],
            'NO_AKSEP' => $row['no_aksep'],
            'TGL_PK' => $row['tgl_pk'],
            'TGL_AWAL_FAS' => $row['tgl_awal_fas'],
            'TGL_AKHIR_FAS' => $row['tgl_akhir_fas'],
            'TGL_AWAL_AKSEP' => $row['tgl_awal_aksep'],
            'TGL_AKH_AKSEP' => $row['tgl_akh_aksep'],
            'PLAFOND_AWAL' => $row['plafond_awal'],
            'BAKI_DEBET' => $row['baki_debet'],
            'LONGGAR_TARIK' => $row['longgar_tarik'],
            'BGA' => $row['bga'],
            'TUNGGAKAN_POKOK' => $row['tunggakan_pokok'],
            'TUNGGAKAN_BUNGA' => $row['tunggakan_bunga'],
            'BGA_JTH_TEMPO' => $row['bga_jth_tempo'],
            'SMP_TGL_CADANG' => $row['smp_tgl_cadang'],
            'NILAI_CADANG' => $row['nilai_cadang'],
            'ANGSURAN_TOTAL' => $row['angsuran_total'],
            'TGL_PROSES_DENDA' => $row['tgl_proses_denda'],
            'AKUM_DENDA_PKK' => $row['akum_denda_pkk'],
            'AKUM_DENDA_BGA' => $row['akum_denda_bga'],
            'PRD_AMORT' => $row['prd_amort'],
            'PRDK_AMORT' => $row['prdk_amort'],
            'FLAG' => $row['flag'],
            'TGL_AMORT' => $row['tgl_amort'],
            'NILAI_BIAYA_PROVISI' => $row['nilai_biaya_provisi'],
            'AMORTISASI_PRD' => $row['amortisasiprd'],
            'SISA_AMORT_PROV' => $row['sisa_amort_prov'],
            'TAGIH_BIAYA_PROV' => $row['tagih_biaya_prov'],
            'NILAI_BIAYA_ADM' => $row['nilai_biaya_adm'],
            'AMORT_ADM_PRD' => $row['amort_admprd'],
            'SISA_AMORT_ADM' => $row['sisa_amort_adm'],
            'BYA_ASURANSI' => $row['bya_asuransi'],
            'BYA_NOTARIS' => $row['bya_notaris'],
            'PKK_JATEM' => $row['pkk_jatem'],
            'BGA_JATEM' => $row['bga_jatem'],
            'REK_BYR_PKK_BGA' => $row['rek_byr_pkk_bga'],
            'SLD_REK_DB' => $row['sld_rek_db'],
            'KD_INSTANSI' => $row['kd_instansi'],
            'NM_INSTANSI' => $row['nm_instansi'],
            'REK_BENDAHARA' => $row['rek_bendahara'],
            'SFT_KRD' => $row['sft_krd'],
            'GOL_KRD' => $row['gol_krd'],
            'JNS_KRD' => $row['jns_krd'],
            'SKTR_EKNM' => $row['sktr_eknm'],
            'ORNTS' => $row['ornts'],
            'NO_HP' => $row['no_hp'],
            'POKOK_PINJAMAN' => $row['pokok_pinjaman'],
            'TITIPAN_EFEKTIF' => $row['titipan_efektif'],
            'JANGKA_WAKTU' => $row['jangka_waktu'],
            'REK_PENCAIRAN' => $row['rek_pencairan'],
            'NO_REKENING_LAMA' => $row['no_rekening_lama'],
            'CIF_LAMA' => $row['cif_lama'],
            'KODE_GROUP' => $row['kode_group'],
            'KET_GROUP' => $row['ket_group'],
            'TGL_LAHIR' => $row['tgl_lahir'],
            'NIK' => $row['nik'],
            'NIP' => $row['nip'],
            'NILAI_BYA_TRANS' => $row['nilai_bya_trans'],
            'AMORT_TRANS_PRD' => $row['amort_transprd'],
            'SISA_AMORT_TRANS' => $row['sisa_amort_trans'],
            'AO' => $row['ao'],
            'CAB_REK' => $row['cab_rek'],
            'KELURAHAN' => $row['kelurahan'],
            'KECAMATAN' => $row['kecamatan'],
            'CADANGAN_PPAP' => $row['cadangan_ppap'],
            'TEMPAT_BEKERJA' => $row['tempat_bekerja'],
            'TGL_AKHIR_BAYAR' => $row['tgl_akhir_bayar'],
            'PIHAK_TERKAIT' => $row['pihak_terkait'],
            'JENIS_JAMINAN' => $row['jenis_jaminan'],
            'NILAI_LEGALITAS' => $row['nilai_legalitas'],
            'RESTRUKTUR_KE' => $row['restruktur_ke'],
            'TGL_VALID_KOLEK' => $row['tgl_valid_kolek'],
            'TGL_MACET' => $row['tgl_macet'],

        ]);
    }
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => '|'
        ];
    }
}
