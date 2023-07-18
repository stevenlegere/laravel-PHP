<h1>Squat Tracker</h1>

<ul>
    @foreach ($squats as $squat)
        <li>Date: {{ $squat->date }} - Kilometers: {{ $squat->kilometers }}</li>
    @endforeach
</ul>

<form action="{{ route( route('squats.store') }}" method="POST">
    @csrf
    <button type="submit">Add Squat Entry</button>
</form>