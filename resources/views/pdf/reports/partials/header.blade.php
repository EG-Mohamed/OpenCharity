<html>
<head>
<meta charset="UTF-8">
<title>{{ $title }}</title>
<style>
body {
    font-family: cairo, sans-serif;
    font-size: 9.5pt;
    color: #1f2937;
    direction: rtl;
    line-height: 1.5;
    margin: 0;
    padding: 0;
}

/* ═══ PAGE HEADER ══════════════════════════════════════════════ */
.header-wrap {
    width: 100%;
    margin-bottom: 10pt;
}
.header-wrap td { vertical-align: middle; padding: 0; }

.header-logo img {
    width: 56pt;
    height: 56pt;
    object-fit: contain;
}

.header-org {
    padding-right: 8pt;
}
.header-org-name {
    font-size: 15pt;
    font-weight: bold;
    color: #af2c20;
    line-height: 1.2;
}
.header-org-sub {
    font-size: 8pt;
    color: #6b7280;
    margin-top: 1pt;
}

.header-right {
    text-align: left;
}
.header-right-title {
    font-size: 11pt;
    font-weight: bold;
    color: #1f2937;
    line-height: 1.3;
}
.header-right-date {
    font-size: 8pt;
    color: #6b7280;
    margin-top: 3pt;
}
.official-stamp {
    margin-top: 4pt;
    display: inline-block;
    border: 1pt solid #af2c20;
    color: #af2c20;
    font-size: 7.5pt;
    font-weight: bold;
    padding: 1.5pt 8pt;
    border-radius: 2pt;
}

.header-divider {
    width: 100%;
    border: none;
    border-top: 2pt solid #af2c20;
    margin: 0 0 8pt 0;
}

/* ═══ SECTION ══════════════════════════════════════════════════ */
.section { margin-bottom: 10pt; page-break-inside: avoid; }

.section-title {
    font-size: 9pt;
    font-weight: bold;
    color: #ffffff;
    background-color: #af2c20;
    padding: 4pt 8pt;
    margin-bottom: 4pt;
}

.subsection-title {
    font-size: 8.5pt;
    font-weight: bold;
    color: #af2c20;
    background-color: #f3f4f6;
    border-right: 3pt solid #af2c20;
    padding: 2.5pt 7pt;
    margin: 6pt 0 3pt;
}

/* ═══ INFO TABLE (key-value grid) ══════════════════════════════ */
.info-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 3pt;
    page-break-inside: avoid;
}
.info-table td {
    padding: 2.5pt 5pt;
    font-size: 9pt;
    vertical-align: top;
}
.info-label {
    font-weight: bold;
    color: #374151;
    white-space: nowrap;
    width: 20%;
    background-color: #f3f4f6;
    border: 0.4pt solid #d1d5db;
}
.info-value {
    color: #1f2937;
    width: 30%;
    border: 0.4pt solid #d1d5db;
}

/* ═══ DATA TABLE ═══════════════════════════════════════════════ */
.data-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 8.5pt;
    margin-bottom: 4pt;
    page-break-inside: avoid;
}
.data-table th {
    background-color: #3d3d3d;
    color: #ffffff;
    padding: 3.5pt 5pt;
    text-align: right;
    font-weight: bold;
    border: 0.4pt solid #2a2a2a;
    white-space: nowrap;
}
.data-table td {
    padding: 3pt 5pt;
    border: 0.4pt solid #d1d5db;
    vertical-align: top;
    color: #1f2937;
}
.data-table tr:nth-child(even) td { background-color: #f3f4f6; }

/* ═══ CASE BLOCK ════════════════════════════════════════════════ */
.case-block {
    border: 0.5pt solid #d1d5db;
    margin-bottom: 8pt;
    page-break-inside: avoid;
}
.case-block-header {
    background-color: #3d3d3d;
    padding: 4pt 8pt;
    font-weight: bold;
    font-size: 9pt;
    color: #ffffff;
    border-bottom: 0.5pt solid #2a2a2a;
}
.case-block-body { padding: 5pt 8pt; }

/* ═══ FOOTER ════════════════════════════════════════════════════ */
.report-footer {
    border-top: 0.5pt solid #d1d5db;
    padding-top: 5pt;
    margin-top: 12pt;
    font-size: 8pt;
    color: #9ca3af;
    width: 100%;
}
</style>
</head>
<body>

<table class="header-wrap" cellspacing="0" cellpadding="0">
    <tr>
        <td class="header-logo" style="width:64pt;">
            <img src="{{ rescue(fn() => \Illuminate\Support\Facades\Storage::url(setting('branding.logo')),public_path('images/logo.jpg')) }}" alt="logo" height="80" width="80">
        </td>
        <td class="header-right">
            <div class="header-right-title">{{ $title }}</div>
        </td>
    </tr>
</table>
<hr class="header-divider">
