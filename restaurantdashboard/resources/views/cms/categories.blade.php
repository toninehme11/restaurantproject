    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  
  
  <x-app-layout>

    <div class="container mt-4">
        <h1 class="mb-4">Add Category</h1>
        <!-- Add Category Form -->
        <form id="addCategoryForm" action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="categories">Category Name</label>
                <input type="text" class="form-control" id="name" name="categories" required>
            </div>
            <button type="submit" class="btn btn-primary" style="color: black;">Add</button>
        </form>
        <hr>
        <h2>Categories</h2>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->categories }}</td>
                    <td>
                        <form action="{{ route('categories.destroy', ['category' => $category]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm deleteCategory" data-id="{{ $category->id }}" style="color: black;">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/category.js') }}"></script>
</x-app-layout>
