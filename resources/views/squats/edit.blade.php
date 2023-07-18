<h2>Update Kilometers</h2>

<form action="{{ route('squats.update', $squat) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit" name="increment">+1 km</button>
    <button type="submit" name="decrement">-1 km</button>
</form>