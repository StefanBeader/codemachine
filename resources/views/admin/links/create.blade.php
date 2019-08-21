@extends('layouts.admin')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h1>Create Link</h1>
                <form class="mt-5" method="POST" action="{{ URL::to('links') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               id="title"
                               aria-describedby="titleHelp"
                               placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text"
                               name="icon"
                               class="form-control"
                               id="icon"
                               aria-describedby="iconHelp"
                               placeholder="Enter Icon Class">
                    </div>
                    <div class="form-group">
                        <label for="icon">Url</label>
                        <input type="text"
                               name="url"
                               class="form-control"
                               id="url"
                               aria-describedby="urlHelp"
                               placeholder="Enter Url">
                    </div>

                    <button type="submit" class="btn btn-primary mt-5">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection