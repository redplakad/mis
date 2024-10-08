<!DOCTYPE html>
<html>
<head>
    <title>Upload CSV for MIS Saving Journal</title>
</head>
<body>
    <!-- Pesan Sukses -->
    @if(session('success'))
        <div style="color: green;">
            <strong>Success!</strong> {{ session('success') }}
        </div>
    @endif

    <!-- Pesan Error Umum -->
    @if(session('error'))
        <div style="color: red;">
            <strong>Error!</strong> {{ session('error') }}
        </div>
    @endif

    <!-- Pesan Kesalahan Validasi -->
    @if($errors->any())
        <div style="color: red;">
            <strong>Errors:</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Unggah CSV -->
    <form action="{{ route('import.saving_journal') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Choose CSV file to import:</label>
            <input type="file" class="form-control-file" id="file" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Import</button>
    </form>
</body>
</html>
