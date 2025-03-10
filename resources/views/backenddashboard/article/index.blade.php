@extends('backenddashboard.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Article Post
                <a href="{{ url('addarticle') }}" class="btn btn-primary" style="float: right; margin-top:-12px">Add
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
                    @forelse ($getRecord as $key => $article)
                        <tr>
                            <th scope="row">{{ $getRecord->firstItem() + $key }}</th>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->category_name }}</td>
                            @if (Auth::user()->is_admin == 1)
                                <td>{{ $value->user_name }}</td>
                            @endif
                            <td>2016-05-25</td>
                            <td>2016-05-25</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="" method="POST">
                                    <a href=""
                                        class="btn btn-sm btn-warning mt-2">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger mt-2">HAPUS</button>
                                </form>
                            </td>
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
