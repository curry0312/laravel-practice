<x-layout>
    <h1>Jobs List</h1>
    
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}</a>
    @endforeach
</x-layout>