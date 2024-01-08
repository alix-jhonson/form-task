<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Search</h1>

        <pre>
    {{-- This line will be commented out --}}
    {{-- {{ var_dump(session()->all()) }} --}}
        </pre>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('no-results'))
            <div class="alert alert-success">
                {{ session('no-results') }}
            </div>
        @endif

        <form method="POST" action="{{ route('perform-search') }}">
    @csrf
    <div class="col-xl-4">
        <input type="text" name="searchTerm" class="form-control" placeholder="Enter user or company name . . .">
    </div>

    <!-- Search Button with Dropdown -->
    <div class="btn-group">
        <button type="submit" class="btn btn-primary">Search</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('form-task') }}">Add New</a>
        </div>
    </div>
</form>


    <!-- Check if search results are empty -->
    
        
    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

