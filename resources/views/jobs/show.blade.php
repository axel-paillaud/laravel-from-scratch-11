<x-layout>
  <x-slot:heading>Job page</x-slot:heading>
  <h2 class="font-bold">{{ $job['title'] }}</h2>
  <p> Salary is: {{ $job['salary'] }}</p>
  <p class="mt-6">
    <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
  </p>
</x-layout>
