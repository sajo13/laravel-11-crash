<x-layout heading="Jobs">
    
    <h1>This is Job Listing page</h1>

    @foreach ($jobs as $job)
        <li> 
            <a href="/jobs/{{ $job['id']}}"> <strong> Title: {{ $job['title']}} </strong> and salary: {{ $job['title']}} </a>
        </li> 
    @endforeach
</x-layout>