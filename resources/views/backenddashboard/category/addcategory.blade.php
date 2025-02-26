@extends('backenddashboard.layouts.app')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Category</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ url('/postcategory')}}" method="post">
                            {{ csrf_field() }}
                            <div class="col-12">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="" required>
                            </div>

                            <div class="col-12">
                                <label for="inputState" class="form-label">Status</label>
                                <select id="inputState" class="form-select" name="status">
                                    <option selected>Choose..</option>
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
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
