<div class="rounded-[1.45rem] bg-white p-4 sm:p-5 dark:bg-gray-950/95">
    <form wire:submit="submit" class="space-y-5">
        {{ $this->form }}

        <button type="submit" class="w-full rounded-full bg-primary-500 px-6 py-3.5 text-sm font-semibold text-white shadow-lg shadow-primary-500/20 transition hover:bg-primary-600 dark:bg-primary-500 dark:hover:bg-primary-400">
            {{ __('Complete donation') }}
        </button>

        @if ($submitted)
            <div class="rounded-2xl border border-primary-200 bg-primary-50 px-4 py-3 text-sm font-medium text-primary-700 dark:border-primary-900/50 dark:bg-primary-950/30 dark:text-primary-200">
                {{ __('The form is ready successfully. This is a preview interface until the payment gateway is connected.') }}
            </div>
        @endif
    </form>
</div>
