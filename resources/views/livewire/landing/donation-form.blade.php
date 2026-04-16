<div class="landing-card p-6 sm:p-8">
    <form wire:submit="submit" class="space-y-6">
        {{ $this->form }}

        <button type="submit" class="w-full rounded-full bg-primary-500 px-6 py-4 text-base font-black text-white shadow-xl shadow-primary-500/25 transition hover:bg-primary-600">
            {{ __('إتمام التبرع') }}
        </button>

        @if ($submitted)
            <div class="rounded-2xl border border-primary-200 bg-primary-50 px-4 py-3 text-sm font-medium text-primary-700 dark:border-primary-900/50 dark:bg-primary-950/30 dark:text-primary-200">
                {{ __('تم تجهيز النموذج بنجاح. هذه واجهة عرض فقط بانتظار ربط بوابة الدفع.') }}
            </div>
        @endif
    </form>
</div>
