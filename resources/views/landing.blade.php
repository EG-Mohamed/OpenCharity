<x-app>
    <x-landing.hero />
    <x-landing.about />
    <x-landing.statistics :stats="$stats" />
    {{--    <x-landing.services :case-types="$caseTypes" :assistance-types="$assistanceTypes" />--}}
    <x-landing.active-cases :targets="$targets" />
    <x-landing.donation :targets="$targets" />
    <x-landing.testimonials />
</x-app>