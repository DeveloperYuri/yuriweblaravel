@extends('backenddashboard.layouts.app')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Article Post</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ url('/postarticle')}}" method="post">
                            {{ csrf_field() }}
                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>

                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Category *</label>
                                <select class="form-control" name="category_id" id="">
                                    <option value="">Select Category</option>
                                    @foreach ($getCategory as $value)
                                        <option value="{{ $value->id }}">{{ $value->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Description *</label>
                                <textarea class="form-control tinymce-editor" name="description" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Publish *</label>
                                <select class="form-control" name="is_publish">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
