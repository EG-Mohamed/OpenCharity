@php $title = __('Member Report') . ' — ' . $member->name; @endphp
@include('pdf.reports.partials.header', ['title' => $title])

{{-- ── Member Identity ──────────────────────────────────────── --}}
<div class="section">
    <div class="section-title">{{ __('Member Information') }}</div>
    <table class="info-table" cellspacing="0" cellpadding="0">
        <tr>
            <td class="info-label">{{ __('Name') }}</td>
            <td class="info-value">{{ $member->name }}</td>
            <td class="info-label">{{ __('Relation To Head') }}</td>
            <td class="info-value">{{ $member->relation_to_head?->getLabel() }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Gender') }}</td>
            <td class="info-value">{{ $member->gender?->getLabel() }}</td>
            <td class="info-label">{{ __('Birth Date') }}</td>
            <td class="info-value">{{ $member->birth_date?->format('Y/m/d') ?? '—' }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Marital Status') }}</td>
            <td class="info-value">{{ $member->marital_status?->getLabel() }}</td>
            <td class="info-label">{{ __('Nationality') }}</td>
            <td class="info-value">{{ $member->nationality?->name ?? '—' }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('National ID') }}</td>
            <td class="info-value">{{ $member->national_id ?? '—' }}</td>
            <td class="info-label">{{ __('Phone') }}</td>
            <td class="info-value">{{ $member->phone ?? '—' }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Education') }}</td>
            <td class="info-value">{{ $member->education_status?->getLabel() }}</td>
            <td class="info-label">{{ __('Employment') }}</td>
            <td class="info-value">{{ $member->employment_status?->getLabel() }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Monthly Income') }}</td>
            <td class="info-value">{{ number_format($member->monthly_income, 2) }}</td>
            <td class="info-label">{{ __('Health Status') }}</td>
            <td class="info-value">{{ $member->health_status?->getLabel() }}</td>
        </tr>
        @if($member->diseases->isNotEmpty())
        <tr>
            <td class="info-label">{{ __('Diseases') }}</td>
            <td class="info-value" colspan="3">
                @foreach($member->diseases as $disease)
                    {{ $disease->name }}{{ $disease->is_chronic ? ' (' . __('Chronic') . ')' : '' }}{{ !$loop->last ? '، ' : '' }}
                @endforeach
            </td>
        </tr>
        @endif
        @if($member->notes)
        <tr>
            <td class="info-label">{{ __('Notes') }}</td>
            <td class="info-value" colspan="3">{{ $member->notes }}</td>
        </tr>
        @endif
    </table>
</div>

{{-- ── Family Details ───────────────────────────────────────── --}}
@if($options->includeFamilyDetails)
<div class="section">
    <div class="section-title">{{ __('Family Information') }}</div>
    <table class="info-table" cellspacing="0" cellpadding="0">
        <tr>
            <td class="info-label">{{ __('Code') }}</td>
            <td class="info-value">{{ $member->family?->code }}</td>
            <td class="info-label">{{ __('Primary Contact') }}</td>
            <td class="info-value">{{ $member->family?->primary_contact_name }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Contact Phone') }}</td>
            <td class="info-value">{{ $member->family?->primary_contact_phone }}</td>
            <td class="info-label">{{ __('Secondary Phone') }}</td>
            <td class="info-value">{{ $member->family?->secondary_contact_phone ?? '—' }}</td>
        </tr>
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
        <tr>
            <td class="info-label">{{ __('Housing Status') }}</td>
            <td class="info-value">{{ $member->family?->housing_status?->getLabel() }}</td>
            <td class="info-label">{{ __('Status') }}</td>
            <td class="info-value">{{ $member->family?->status?->getLabel() }}</td>
        </tr>
    </table>
</div>
@endif

{{-- ── Other Family Members ─────────────────────────────────── --}}
@if($options->includeOtherMembers && $member->family?->familyMembers->isNotEmpty())
@php $others = $member->family->familyMembers->where('id', '!=', $member->id); @endphp
@if($others->isNotEmpty())
<div class="section">
    <div class="section-title">{{ __('Other Family Members') }} ({{ $others->count() }})</div>
    <table class="data-table" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Relation') }}</th>
                <th>{{ __('Gender') }}</th>
                <th>{{ __('Birth Date') }}</th>
                <th>{{ __('Health') }}</th>
                <th>{{ __('Nationality') }}</th>
                <th>{{ __('Diseases') }}</th>
                <th>{{ __('Employment') }}</th>
                <th>{{ __('Income') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($others->values() as $i => $other)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $other->name }}</td>
                <td>{{ $other->relation_to_head?->getLabel() }}</td>
                <td>{{ $other->gender?->getLabel() }}</td>
                <td>{{ $other->birth_date?->format('Y/m/d') ?? '—' }}</td>
                <td>{{ $other->health_status?->getLabel() }}</td>
                <td>{{ $other->nationality?->name ?? '—' }}</td>
                <td>{{ $other->diseases->pluck('name')->join('، ') ?: '—' }}</td>
                <td>{{ $other->employment_status?->getLabel() }}</td>
                <td>{{ number_format($other->monthly_income, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endif

{{-- ── Charity Cases ────────────────────────────────────────── --}}
@if($options->includeCharityCases && $member->charityCases->isNotEmpty())
<div class="section">
    <div class="section-title">{{ __('Charity Cases') }} ({{ $member->charityCases->count() }})</div>
    @foreach($member->charityCases as $case)
    <div class="case-block">
        <div class="case-block-header">
            {{ $case->code }} — {{ $case->title }}
            &nbsp;·&nbsp; {{ $case->status?->getLabel() }}
            &nbsp;·&nbsp; {{ __('Priority') }}: {{ $case->priority?->getLabel() }}
        </div>
        <div class="case-block-body">
            <table class="info-table" cellspacing="0" cellpadding="0">
                <tr>
                    <td class="info-label">{{ __('Type') }}</td>
                    <td class="info-value">{{ $case->caseType?->name }}</td>
                    <td class="info-label">{{ __('Registered At') }}</td>
                    <td class="info-value">{{ $case->registered_at?->format('Y/m/d') ?? '—' }}</td>
                </tr>
                <tr>
                    <td class="info-label">{{ __('Requested Amount') }}</td>
                    <td class="info-value">{{ number_format($case->requested_amount, 2) }}</td>
                    <td class="info-label">{{ __('Approved Amount') }}</td>
                    <td class="info-value">{{ number_format($case->approved_amount, 2) }}</td>
                </tr>
            </table>

            @if($options->includeVisits && $case->visits->isNotEmpty())
            <div class="subsection-title">{{ __('Visits') }} ({{ $case->visits->count() }})</div>
            <table class="data-table" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>{{ __('Type') }}</th>
                        <th>{{ __('Status') }}</th>
                        <th>{{ __('Scheduled At') }}</th>
                        <th>{{ __('Visited At') }}</th>
                        <th>{{ __('Summary') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($case->visits as $visit)
                    <tr>
                        <td>{{ $visit->visit_type?->getLabel() }}</td>
                        <td>{{ $visit->status?->getLabel() }}</td>
                        <td>{{ $visit->scheduled_at?->format('Y/m/d') ?? '—' }}</td>
                        <td>{{ $visit->visited_at?->format('Y/m/d') ?? '—' }}</td>
                        <td>{{ $visit->summary ?? '—' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif

            @if($options->includeAssistanceSchedules && $case->assistanceSchedules->isNotEmpty())
            <div class="subsection-title">{{ __('Assistance Schedules') }} ({{ $case->assistanceSchedules->count() }})</div>
            <table class="data-table" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>{{ __('Type') }}</th>
                        <th>{{ __('Date') }}</th>
                        <th>{{ __('Amount') }}</th>
                        <th>{{ __('Frequency') }}</th>
                        <th>{{ __('Status') }}</th>
                        <th>{{ __('Funding') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($case->assistanceSchedules as $schedule)
                    <tr>
                        <td>{{ $schedule->assistanceType?->name }}</td>
                        <td>{{ $schedule->scheduled_date?->format('Y/m/d') ?? '—' }}</td>
                        <td>{{ number_format($schedule->amount, 2) }}</td>
                        <td>{{ $schedule->frequency?->getLabel() }}</td>
                        <td>{{ $schedule->status?->getLabel() }}</td>
                        <td>{{ $schedule->funding_status?->getLabel() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endif

{{-- ── Documents ────────────────────────────────────────────── --}}
@if($options->includeDocuments && $member->family?->documents->isNotEmpty())
<div class="section">
    <div class="section-title">{{ __('Documents') }} ({{ $member->family->documents->count() }})</div>
    <table class="data-table" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Type') }}</th>
                <th>{{ __('Category') }}</th>
                <th>{{ __('Issued At') }}</th>
                <th>{{ __('Expires At') }}</th>
                <th>{{ __('Verified') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($member->family->documents as $doc)
            <tr>
                <td>{{ $doc->title }}</td>
                <td>{{ $doc->type?->getLabel() }}</td>
                <td>{{ $doc->category?->getLabel() }}</td>
                <td>{{ $doc->issued_at?->format('Y/m/d') ?? '—' }}</td>
                <td>{{ $doc->expires_at?->format('Y/m/d') ?? '—' }}</td>
                <td>{{ $doc->is_verified ? __('Yes') : __('No') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif

@include('pdf.reports.partials.footer')
