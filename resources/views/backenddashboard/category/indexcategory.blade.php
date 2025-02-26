@extends('backenddashboard.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Category
                <a href="{{ url('/addcategory') }}" class="btn btn-primary" style="float: right; margin-top:-12px">Add
                    New</a>
            </h5>

            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- $getRecord as $key => $artikelbaru --}}
                    @forelse ($getRecord as $key => $article)
                        <tr>
                            <th scope="row">{{ $getRecord->firstItem() + $key }}</th>
                            <td>{{ $article->name }}</td>
                            <td>{{ $article->slug }}</td>
                            <td>{{ !empty($article->status) ? 'Active' : 'InActive' }}</td>
                            <td>2016-05-25</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning mt-2">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger mt-2">HAPUS</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="100%">Records Not Found</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
@endsection
