<x-layout>
  <x-slot:heading>Jobs page</x-slot:heading>
<ul>
    @foreach ($jobs as $job)
       <li><a href="/job/{{ $job['id'] }}">{{ $job['title'] }}</a></li>
    @endforeach
</ul>
</x-layout>
