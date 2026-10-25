<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Spatie\Activitylog\Models\Activity;

class AuditLogsExport implements FromCollection, WithHeadings
{
    /**
     * Return collection of audit log activities.
     */
    public function collection()
    {
        return Activity::with('causer')->latest()->take(100)->get()->map(function ($item) {
            return [
                'ID' => $item->id,
                'Deskripsi' => $item->description,
                'Event' => $item->event,
                'Model' => class_basename($item->subject_type),
                'Pelaku' => $item->causer ? $item->causer->name : 'System',
                'Tanggal' => $item->created_at->format('Y-m-d H:i:s'),
            ];
        });
    }

    /**
     * Table headings.
     */
    public function headings(): array
    {
        return [
            'ID',
            'Deskripsi',
            'Event',
            'Model Target',
            'Pelaku (Causer)',
            'Waktu Pencatatan',
        ];
    }
}
