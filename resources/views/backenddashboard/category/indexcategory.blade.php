@extends('backenddashboard.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Category
                <a href="{{ url('/addcategory') }}" class="btn btn-primary" style="float: right; margin-top:-12px">Add
                    New</a>
            </h5>

            @include('_message')
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
                    @forelse ($getRecord as $key => $category)
                        <tr>
                            <th scope="row">{{ $getRecord->firstItem() + $key }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ !empty($category->status) ? 'Active' : 'InActive' }}</td>
                            <td>2016-05-25</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('deletecategory', $category->id) }}" method="POST">
                                    <a href="{{ url('editcategory/' . $category->id) }}"
                                        class="btn btn-sm btn-warning mt-2">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger mt-2">HAPUS</button>
                                </form>
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
