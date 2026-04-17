@php $title = __('Family Report') . ' — ' . $family->code; @endphp
@include('pdf.reports.partials.header', ['title' => $title])

{{-- ── Family Basic Info ────────────────────────────────────── --}}
<div class="section">
    <div class="section-title">{{ __('Family Information') }}</div>
    <table class="info-table" cellspacing="0" cellpadding="0">
        <tr>
            <td class="info-label">{{ __('Code') }}</td>
            <td class="info-value">{{ $family->code }}</td>
            <td class="info-label">{{ __('Primary Contact') }}</td>
            <td class="info-value">{{ $family->primary_contact_name }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Contact Phone') }}</td>
            <td class="info-value">{{ $family->primary_contact_phone }}</td>
            <td class="info-label">{{ __('Secondary Phone') }}</td>
            <td class="info-value">{{ $family->secondary_contact_phone ?? '—' }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('State') }}</td>
            <td class="info-value">{{ $family->state?->name ?? '—' }}</td>
            <td class="info-label">{{ __('City') }}</td>
            <td class="info-value">{{ $family->city?->name ?? '—' }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Neighborhood') }}</td>
            <td class="info-value">{{ $family->neighborhood?->name ?? '—' }}</td>
            <td class="info-label">{{ __('Address') }}</td>
            <td class="info-value">{{ $family->address ?? '—' }}</td>
        </tr>
        <tr>
            <td class="info-label">{{ __('Housing Status') }}</td>
            <td class="info-value">{{ $family->housing_status?->getLabel() }}</td>
            <td class="info-label">{{ __('Status') }}</td>
            <td class="info-value">{{ $family->status?->getLabel() }}</td>
        </tr>
        @if($family->notes)
        <tr>
            <td class="info-label">{{ __('Notes') }}</td>
            <td class="info-value" colspan="3">{{ $family->notes }}</td>
        </tr>
        @endif
    </table>
</div>

{{-- ── Family Members ───────────────────────────────────────── --}}
@if($options->includeMembers && $family->familyMembers->isNotEmpty())
<div class="section">
    <div class="section-title">{{ __('Family Members') }} ({{ $family->familyMembers->count() }})</div>
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
            @foreach($family->familyMembers as $i => $member)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->relation_to_head?->getLabel() }}</td>
                <td>{{ $member->gender?->getLabel() }}</td>
                <td>{{ $member->birth_date?->format('Y/m/d') ?? '—' }}</td>
                <td>{{ $member->health_status?->getLabel() }}</td>
                <td>{{ $member->nationality?->name ?? '—' }}</td>
                <td>{{ $member->diseases->pluck('name')->join('، ') ?: '—' }}</td>
                <td>{{ $member->employment_status?->getLabel() }}</td>
                <td>{{ number_format($member->monthly_income, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif

{{-- ── Charity Cases ────────────────────────────────────────── --}}
@if($options->includeCharityCases && $family->charityCases->isNotEmpty())
<div class="section">
    <div class="section-title">{{ __('Charity Cases') }} ({{ $family->charityCases->count() }})</div>
    @foreach($family->charityCases as $case)
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
@if($options->includeDocuments && $family->documents->isNotEmpty())
<div class="section">
    <div class="section-title">{{ __('Documents') }} ({{ $family->documents->count() }})</div>
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
            @foreach($family->documents as $doc)
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

{{-- ── Donation Targets ─────────────────────────────────────── --}}
@if($options->includeDonations && $family->donationTargets->isNotEmpty())
<div class="section">
    <div class="section-title">{{ __('Donation Targets') }} ({{ $family->donationTargets->count() }})</div>
    <table class="data-table" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Goal') }}</th>
                <th>{{ __('Collected') }}</th>
                <th>{{ __('Status') }}</th>
                <th>{{ __('Starts At') }}</th>
                <th>{{ __('Ends At') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($family->donationTargets as $target)
            <tr>
                <td>{{ $target->title }}</td>
                <td>{{ number_format($target->goal_amount, 2) }}</td>
                <td>{{ number_format($target->collected_amount, 2) }}</td>
                <td>{{ $target->status?->getLabel() }}</td>
                <td>{{ $target->starts_at?->format('Y/m/d') ?? '—' }}</td>
                <td>{{ $target->ends_at?->format('Y/m/d') ?? '—' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif

@include('pdf.reports.partials.footer')
