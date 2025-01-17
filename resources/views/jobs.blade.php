<x-layout heading="Jobs">

    <h1>This is Job Listing page</h1>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id']}}" class="text-blue-500 hover:underline block px-4 py-6 border border-gray-200">

                    <div class="font-bold text-blue-500"> {{ $job->employer->name }}</div>
                    <strong> Title: {{ $job['title']}} </strong> and salary: {{ $job['title']}}
                </a>
            </li>
        @endforeach

            <div>
                {{ $jobs->links() }}
            </div>
    </div>
</x-layout>
