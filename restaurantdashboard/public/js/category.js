// Assuming you have an event listener for form submission
$('#addCategoryForm').submit(function (e) {
    e.preventDefault(); // Prevent the default form submission

    // Get the form data
    var formData = {
        '_token': $('input[name=_token]').val(),
        'name': $('#name').val()
    };

    // Make an AJAX POST request
    $.ajax({
        type: 'POST',
        url: '{{ route('categories.store') }}',
        data: formData,
        success: function (data) {
            // Handle success (e.g., display a message and update the categories list)
        },
        error: function (data) {
            // Handle errors if needed
        }
    });
});
