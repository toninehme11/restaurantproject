
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<x-app-layout>
<div class="container">
    <h1>Events</h1>

    <!-- Add Event Button -->
    <a href="{{ route('events.create') }}" class="btn btn-primary">Add Event</a>

    <!-- Events List -->
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Time</th>
                <th>Description</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->time }}</td>
                <td>{{ $event->description }}</td>
                <td style="width: 100px; height: 100px;">
                <img src="data:image/jpeg;base64,{{ base64_encode($event->image) }}" alt="event Image" style="width: 50px; height: 50px;">
                </td>
                <td>
                    <a href="{{ route('events.edit', ['event' => $event]) }}" class="btn btn-warning btn-sm" style="color: black;">Edit</a>
                </td>
                <td>
                <form action="{{ route('events.destroy', ['event' => $event]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" style="color: black;">Delete</button>
                </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-app-layout>