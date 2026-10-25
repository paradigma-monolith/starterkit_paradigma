<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Audit Trail & Aktivitas Sistem</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #1e293b;
            font-size: 11px;
            margin: 20px;
        }
        .header {
            border-bottom: 2px solid #4f46e5;
            padding-bottom: 12px;
            margin-bottom: 20px;
        }
        .title {
            font-size: 18px;
            font-weight: bold;
            color: #1e1b4b;
        }
        .subtitle {
            font-size: 10px;
            color: #64748b;
            margin-top: 4px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 7px 8px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
        }
        th {
            background-color: #f1f5f9;
            color: #334155;
            font-weight: 600;
            font-size: 10px;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .badge {
            display: inline-block;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 9px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .badge-created { background-color: #dcfce7; color: #15803d; }
        .badge-updated { background-color: #e0e7ff; color: #4338ca; }
        .badge-deleted { background-color: #fee2e2; color: #b91c1c; }
        .footer {
            margin-top: 30px;
            font-size: 9px;
            color: #94a3b8;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">Laporan Audit Trail & Aktivitas Sistem</div>
        <div class="subtitle">Dokumen Laporan Resmi &bull; Digenerate pada: {{ $generatedAt->format('d M Y, H:i:s') }}</div>
    </div>

    <table>
        <thead>
            <tr>
                <th style="width: 5%;">ID</th>
                <th style="width: 35%;">Deskripsi</th>
                <th style="width: 15%;">Event</th>
                <th style="width: 15%;">Model</th>
                <th style="width: 15%;">Pelaku</th>
                <th style="width: 15%;">Waktu</th>
            </tr>
        </thead>
        <tbody>
            @forelse($activities as $act)
                <tr>
                    <td>{{ $act->id }}</td>
                    <td><strong>{{ $act->description }}</strong></td>
                    <td>
                        <span class="badge badge-{{ $act->event ?? 'updated' }}">
                            {{ $act->event ?? 'action' }}
                        </span>
                    </td>
                    <td>{{ class_basename($act->subject_type) ?: '-' }}</td>
                    <td>{{ $act->causer ? $act->causer->name : 'System' }}</td>
                    <td>{{ $act->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center; color: #94a3b8; padding: 20px;">
                        Belum ada data aktivitas sistem yang tercatat.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="footer">
        Dicetak secara otomatis oleh Mesin Ekspor DomPDF &bull; Master Starter Kit
    </div>
</body>
</html>
