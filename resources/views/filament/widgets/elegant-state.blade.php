@php
    use Filament\Support\Enums\IconPosition;
    use Filament\Widgets\View\Components\StatsOverviewWidgetComponent\StatComponent\DescriptionComponent;
    use Filament\Widgets\View\Components\StatsOverviewWidgetComponent\StatComponent\StatsOverviewWidgetStatChartComponent;
    use Illuminate\View\ComponentAttributeBag;

    $chartColor = $getChartColor() ?? 'primary';
    $descriptionColor = $getDescriptionColor() ?? 'primary';
    $descriptionIcon = $getDescriptionIcon();
    $descriptionIconPosition = $getDescriptionIconPosition();
    $url = $getUrl();
    $tag = $url ? 'a' : 'div';
    $chartDataChecksum = $generateChartDataChecksum();

    $color = $getColor() ?? 'primary';

    $descriptionColorClass = match ($descriptionColor) {
        'gray' => 'text-gray-500 dark:text-gray-400',
        'success' => 'text-success-600 dark:text-success-400',
        'warning' => 'text-warning-600 dark:text-warning-400',
        'danger' => 'text-danger-600 dark:text-danger-400',
        'info' => 'text-info-600 dark:text-info-400',
        'primary' => 'text-primary-600 dark:text-primary-400',
        default => 'text-primary-600 dark:text-primary-400',
    };

    $iconColorClass = match ($color) {
        'gray' => 'text-gray-600 dark:text-gray-300',
        'success' => 'text-success-600 dark:text-success-400',
        'warning' => 'text-warning-600 dark:text-warning-400',
        'danger' => 'text-danger-600 dark:text-danger-400',
        'info' => 'text-info-600 dark:text-info-400',
        'primary' => 'text-primary-600 dark:text-primary-400',
        default => 'text-primary-600 dark:text-primary-400',
    };

    $cardClasses = match ($color) {
        'gray' => 'border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-900',
        'success' => 'border-success-200 bg-success-50/70 dark:border-success-900/50 dark:bg-success-950/20',
        'warning' => 'border-warning-200 bg-warning-50/70 dark:border-warning-900/50 dark:bg-warning-950/20',
        'danger' => 'border-danger-200 bg-danger-50/70 dark:border-danger-900/50 dark:bg-danger-950/20',
        'info' => 'border-info-200 bg-info-50/70 dark:border-info-900/50 dark:bg-info-950/20',
        'primary' => 'border-primary-200 bg-primary-50/70 dark:border-primary-900/50 dark:bg-primary-950/20',
        default => 'border-primary-200 bg-primary-50/70 dark:border-primary-900/50 dark:bg-primary-950/20',
    };

    $iconBoxClasses = match ($color) {
        'gray' => 'bg-gray-100 ring-gray-200 dark:bg-gray-800 dark:ring-gray-700',
        'success' => 'bg-success-100 ring-success-200 dark:bg-success-900/40 dark:ring-success-800',
        'warning' => 'bg-warning-100 ring-warning-200 dark:bg-warning-900/40 dark:ring-warning-800',
        'danger' => 'bg-danger-100 ring-danger-200 dark:bg-danger-900/40 dark:ring-danger-800',
        'info' => 'bg-info-100 ring-info-200 dark:bg-info-900/40 dark:ring-info-800',
        'primary' => 'bg-primary-100 ring-primary-200 dark:bg-primary-900/40 dark:ring-primary-800',
        default => 'bg-primary-100 ring-primary-200 dark:bg-primary-900/40 dark:ring-primary-800',
    };

    $accentClasses = match ($color) {
        'gray' => 'bg-gray-500/70 dark:bg-gray-400/70',
        'success' => 'bg-success-500/80 dark:bg-success-400/80',
        'warning' => 'bg-warning-500/80 dark:bg-warning-400/80',
        'danger' => 'bg-danger-500/80 dark:bg-danger-400/80',
        'info' => 'bg-info-500/80 dark:bg-info-400/80',
        'primary' => 'bg-primary-500/80 dark:bg-primary-400/80',
        default => 'bg-primary-500/80 dark:bg-primary-400/80',
    };
@endphp

<{!! $tag !!}
@if ($url)
    {{ \Filament\Support\generate_href_html($url, $shouldOpenUrlInNewTab()) }}
@endif
{{
    $getExtraAttributeBag()->class([
        'fi-wi-stats-overview-stat group relative overflow-hidden rounded-xl border transition duration-200',
        'shadow-xs hover:shadow-sm',
        'p-4',
        $cardClasses,
    ])
}}
>
<div class="absolute inset-y-0 start-0 w-1 {{ $accentClasses }}"></div>

<div class="flex items-start justify-between gap-3">
    <div class="min-w-0 flex-1">
        <div class="mb-1">
                <span class="fi-wi-stats-overview-stat-label text-[11px] font-medium uppercase tracking-wide text-gray-500 dark:text-gray-400">
                    {{ $getLabel() }}
                </span>
        </div>

        <div class="fi-wi-stats-overview-stat-value text-2xl font-semibold leading-none text-gray-950 dark:text-white">
            {{ $getValue() }}
        </div>

        @if ($description = $getDescription())
            <div
                    {{ (new ComponentAttributeBag)
                        ->color(DescriptionComponent::class, $descriptionColor)
                        ->class([
                            'fi-wi-stats-overview-stat-description mt-2 flex items-center gap-1.5 text-xs',
                        ]) }}
            >
                @if ($descriptionIcon && in_array($descriptionIconPosition, [IconPosition::Before, 'before']))
                    {{ \Filament\Support\generate_icon_html(
                        $descriptionIcon,
                        attributes: (new \Illuminate\View\ComponentAttributeBag)->class(['h-3.5 w-3.5', $descriptionColorClass])
                    ) }}
                @endif

                <span class="font-medium {{ $descriptionColorClass }}">
                        {{ $description }}
                    </span>

                @if ($descriptionIcon && in_array($descriptionIconPosition, [IconPosition::After, 'after']))
                    {{ \Filament\Support\generate_icon_html(
                        $descriptionIcon,
                        attributes: (new \Illuminate\View\ComponentAttributeBag)->class(['h-3.5 w-3.5', $descriptionColorClass])
                    ) }}
                @endif
            </div>
        @endif
    </div>

    @if ($getIcon())
        <div class="shrink-0">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg ring-1 {{ $iconBoxClasses }}">
                {{ \Filament\Support\generate_icon_html(
                    $getIcon(),
                    attributes: (new \Illuminate\View\ComponentAttributeBag)->class(['h-5 w-5', $iconColorClass])
                ) }}
            </div>
        </div>
    @endif
</div>

@if ($chart = $getChart())
    <div x-data="{ statsOverviewStatChart() {} }" class="mt-3">
        <div
                x-load
                x-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('stats-overview/stat/chart', 'filament/widgets') }}"
                x-data="statsOverviewStatChart({
                    dataChecksum: @js($chartDataChecksum),
                    labels: @js(array_keys($chart)),
                    values: @js(array_values($chart)),
                })"
                {{
                    (new ComponentAttributeBag)
                        ->color(StatsOverviewWidgetStatChartComponent::class, $chartColor)
                        ->class([
                            'fi-wi-stats-overview-stat-chart rounded-md',
                            'h-12 overflow-hidden',
                        ])
                }}
        >
            <canvas x-ref="canvas"></canvas>

            <span
                    x-ref="backgroundColorElement"
                    class="fi-wi-stats-overview-stat-chart-bg-color"
            ></span>

            <span
                    x-ref="borderColorElement"
                    class="fi-wi-stats-overview-stat-chart-border-color"
            ></span>
        </div>
    </div>
@endif
</{!! $tag !!}>