
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<x-app-layout>


<div class="container mt-4">
<h1>Add Event</h1>

<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="form-group">
        <label for="time">Time</label>
        <input type="text" class="form-control" id="time" name="time" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>

    </div>

    <button type="submit" class="btn btn-primary" style="color: black;">Add Event</button>
</form>

</x-app-layout>