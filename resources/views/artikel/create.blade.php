<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    .ck-editor__editable {
        min-height: 300px;
    }
</style>

<body>
    <div class="container">

        <h1 class="text-center mt-4 mb-4">Buat Artikel</h1>

        <a href="{{ route('artikel.store') }}" class="btn btn-success mb-3"><- Kembali </a>

        <form action="{{ route('artikel.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label class="font-weight-bold">IMAGE</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                <!-- error message untuk image -->
                @error('image')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label class="font-weight-bold">TITLE</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}" placeholder="Masukkan Judul Artikel">

                <!-- error message untuk title -->
                @error('title')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label class="font-weight-bold">DESCRIPTION</label>
                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                    rows="5" placeholder="Masukkan Description Artikel">{{ old('description') }}</textarea>

                <!-- error message untuk description -->
                @error('description')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <script>
        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('textarea'))

            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error('Error during initialization of the editor', error);
            });
    </script>

</body>

</html>
