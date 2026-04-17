@php $title = __('Member Report') . ' — ' . $member->name; @endphp
@include('pdf.reports.partials.header', ['title' => $title])

{{-- ── Member Identity ──────────────────────────────────────── --}}
<div class="section">
    <div class="section-title">{{ __('Member Information') }}</div>
    <table class="info-table" cellspacing="0" cellpadding="0">
        <tr>
            <td class="info-label">{{ __('Name') }}</td>
            <td class="info-value">{{ $member->name }}</td>
            <td class="info-label">{{ __('Family') }}</td>
            <td class="info-value">{{ $member->family?->primary_contact_name }} ({{ $member->family?->code }})</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Relation To Head') }}</td>
            <td class="info-value">{{ $member->relation_to_head?->getLabel() }}</td>
            <td class="info-label">{{ __('Gender') }}</td>
            <td class="info-value">{{ $member->gender?->getLabel() }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Birth Date') }}</td>
            <td class="info-value">{{ $member->birth_date?->format('Y/m/d') ?? '—' }}</td>
            <td class="info-label">{{ __('Marital Status') }}</td>
            <td class="info-value">{{ $member->marital_status?->getLabel() }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('National ID') }}</td>
            <td class="info-value">{{ $member->national_id ?? '—' }}</td>
            <td class="info-label">{{ __('Phone') }}</td>
            <td class="info-value">{{ $member->phone ?? '—' }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Nationality') }}</td>
            <td class="info-value">{{ $member->nationality?->name ?? '—' }}</td>
            <td class="info-label">{{ __('Education') }}</td>
            <td class="info-value">{{ $member->education_status?->getLabel() }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Employment') }}</td>
            <td class="info-value">{{ $member->employment_status?->getLabel() }}</td>
            <td class="info-label">{{ __('Monthly Income') }}</td>
            <td class="info-value">{{ number_format($member->monthly_income, 2) }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Health Status') }}</td>
            <td class="info-value">{{ $member->health_status?->getLabel() }}</td>
            <td class="info-label">{{ __('Diseases') }}</td>
            <td class="info-value">
                @if($member->diseases->isNotEmpty())
                    @foreach($member->diseases as $disease)
                        {{ $disease->name }}{{ $disease->is_chronic ? ' (' . __('Chronic') . ')' : '' }}{{ !$loop->last ? '، ' : '' }}
                    @endforeach
                @else
                    —
                @endif
            </td>
        </tr>
        @if($member->notes)
        <tr>
            <td class="info-label">{{ __('Notes') }}</td>
            <td class="info-value" colspan="3">{{ $member->notes }}</td>
        </tr>
        @endif
    </table>
</div>

{{-- ── Family Address ───────────────────────────────────────── --}}
<div class="section">
    <div class="section-title">{{ __('Family Address') }}</div>
    <table class="info-table" cellspacing="0" cellpadding="0">
        <tr>
            <td class="info-label">{{ __('State') }}</td>
            <td class="info-value">{{ $member->family?->state?->name ?? '—' }}</td>
            <td class="info-label">{{ __('City') }}</td>
            <td class="info-value">{{ $member->family?->city?->name ?? '—' }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Neighborhood') }}</td>
            <td class="info-value">{{ $member->family?->neighborhood?->name ?? '—' }}</td>
            <td class="info-label">{{ __('Address') }}</td>
            <td class="info-value">{{ $member->family?->address ?? '—' }}</td>
        </tr>
    </table>
</div>

@include('pdf.reports.partials.footer')
