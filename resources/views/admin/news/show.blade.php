@extends('admin.parent')
@section('content')
    <div class="row">
        <div class="card p-4">
            <h1 class="fs-3 card-title  ">
                title - <span class="badge fs-5 text-light bg-primary">category name</span>
            </h1>

            <div class="container">
                <p>
                    <img src="#" class="image-fluid  rounded" width="100%" alt="Responsive image" />
                </p>
            </div>

            <div class="container" readonly>
                <p>content</p>
            </div>

            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'), {
                        readOnly: true
                    })
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            </script>

            <div class="container">
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-primary mt-2">
                        <i class="bi bi-back"> Kembali</i>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
