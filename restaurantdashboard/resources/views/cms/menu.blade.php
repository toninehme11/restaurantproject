@vite(['resources/css/app.css', 'resources/js/app.js'])
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<x-app-layout>
    <div class="container">
        <!-- Add Menu Item Button -->
        <h1>Add Menu Items</h1>
        <br>
        <a href="{{ route('menu.create') }}" class="btn btn-primary">Add Menu Item</a>
        <br><br>
        <!-- Menu Items List -->
        <h2>Menu Items</h2>
        <br>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menuItems as $menuItem)
                <tr>
                    <td>{{ $menuItem->name }}</td>
                    <td>{{ $menuItem->price }}</td>
                    <td>{{ $menuItem->description }}</td>
                    <td>{{ $menuItem->category }}</td>
                    <td>
                        @if ($menuItem->image)
                            <img src="data:image/jpeg;base64,{{ base64_encode($menuItem->image) }}" alt="Menu Item Image" style="width: 50px; height: 50px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('menu.edit', ['menu' => $menuItem]) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('menu.destroy', ['menu' => $menuItem]) }}" method="POST">
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



