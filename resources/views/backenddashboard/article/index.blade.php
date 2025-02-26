@extends('backenddashboard.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Article Post
                <a href="{{ url('panel/blog/add') }}" class="btn btn-primary" style="float: right; margin-top:-12px">Add
                    New</a>
            </h5>

            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col">Created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($getRecord as $article)
                        <tr>
                            <th scope="row">{{ $article->id }}</th>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->description }}</td>
                            <td>28</td>
                            <td>2016-05-25</td>
                            <td>2016-05-25</td>
                            <td>2016-05-25</td>
                        </tr>
                    @empty
                        Data Not Found
                    @endforelse

                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
@endsection
