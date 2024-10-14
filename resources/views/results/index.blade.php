@props(['query' => ''])
<x-layout>
    <div class="space-y-10">
        <x-page-heading>Results for: {{ $query }}</x-page-heading>
        <section class="text-center pt-6">
            <div>Refine search:<div>

            <x-form action="/search" method=GET class="mt-6">
                <x-form.input name=query type="text" placeholder="Web Developer..." :value=$query class="px-5 py-4" />
            </x-form>
        </section>

        <section>

            <div class="space-y-6">
                {{-- @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach --}}

                {{-- different directive with 'no result' page --}}
                @each('components.job-card-wide', $jobs, 'job', 'results.no-results')
            </div>
        </section>
    </div>
</x-layout>
