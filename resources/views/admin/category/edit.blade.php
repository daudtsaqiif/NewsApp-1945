@extends('admin.parent')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit category</h5>

            <!-- General Form Elements -->
            <form>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">category name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submit Button</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>

    </div>
@endsection