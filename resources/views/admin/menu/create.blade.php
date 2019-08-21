@extends('layouts.admin')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Create Menu</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form class="mt-5" method="POST" action="{{ URL::to('menu') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Name</label>
                        <input type="text"
                               name="name"
                               class="form-control"
                               id="name"
                               aria-describedby="nameHelp"
                               placeholder="Enter Name">
                    </div>

                    <div class="mt-5">
                        <h2>Menu Links</h2>
                        <div>
                            <ul class="list-group menuLinksPool">
                            </ul>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-5">Save</button>
                </form>
            </div>
            <div class="col-6 mt-5">
                <h2>Links</h2>
                <ul class="list-group linksPool">
                    @foreach($links as $link)
                        <li class="list-group-item link"
                            id="link-{{ $link->id }}"
                            data-id="{{ $link->id }}"
                            draggable="true">{{ $link->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection