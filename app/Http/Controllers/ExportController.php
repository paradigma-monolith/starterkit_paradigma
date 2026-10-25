<?php

namespace App\Http\Controllers;

use App\Exports\AuditLogsExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Activitylog\Models\Activity;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportController extends Controller
{
    /**
     * Export system audit logs to Excel spreadsheet (.xlsx).
     */
    public function exportExcel(): BinaryFileResponse
    {
        return Excel::download(new AuditLogsExport, 'audit-logs-' . date('Y-m-d') . '.xlsx');
    }

    /**
     * Export system audit logs to CSV file (.csv).
     */
    public function exportCsv(): BinaryFileResponse
    {
        return Excel::download(new AuditLogsExport, 'audit-logs-' . date('Y-m-d') . '.csv', \Maatwebsite\Excel\Excel::CSV);
    }

    /**
     * Export system audit logs to formatted PDF report (.pdf).
     */
    public function exportPdf(): Response
    {
        $activities = Activity::with('causer')->latest()->take(100)->get();
        $pdf = Pdf::loadView('exports.audit-logs-pdf', [
            'activities' => $activities,
            'generatedAt' => now(),
        ]);

        return $pdf->download('audit-logs-' . date('Y-m-d') . '.pdf');
    }

    /**
     * Download or stream the comprehensive Manual Book PDF.
     */
    public function exportManualBookPdf(): Response
    {
        $pdf = Pdf::loadView('docs.manual-book-pdf', [
            'generatedAt' => now(),
        ])
        ->setPaper('a4', 'portrait')
        ->setOption(['isRemoteEnabled' => true, 'isHtml5ParserEnabled' => true]);

        return $pdf->download('MANUAL_BOOK_STARTERKIT_PARADIGMA.pdf');
    }
}
