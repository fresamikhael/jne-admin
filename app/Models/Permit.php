<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_permit',
        'tipe_perizinan',
        'lokasi',
        'spesifikasi',
        'alasan',
        'disposisi',
        'dokumen1',
        'dokumen2',
        'dokumen3',
        'approval_status',
        'complete_status',
        'skpd',
        'catatan',
        'bukti1',
        'bukti2'
    ];

    protected $table = 'permit';
}
