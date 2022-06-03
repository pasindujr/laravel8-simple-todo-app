@extends('layout')

@section('main-content')

    <div>
        <div class="float-start">
            <h4 class="pb-3">My Tasks</h4>
        </div>
        <div class="float-end">
            <a href="{{ route('task.create') }}" class="btn btn-info">Create Task</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="card">
        <div class="card-header">
            First Task
            <span class="badge text-bg-warning">Time</span>
        </div>
        <div class="card-body">
            <div class="card-text">
                <div class="float-start">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae dignissimos eius iusto
                    laborum
                    maxime officia saepe tempora tempore. A architecto commodi consequatur, deleniti libero omnis?
                    Assumenda
                    illo provident temporibus.
                    <br>
                    <span class="badge text-bg-info">Todo</span>
                    <small>Last Updated - </small>
                </div>
                <div class="float-end">
                    <a href="{{ route('task.edit', 1) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('task.edit', 1) }}" class="btn btn-danger">Delete</a>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
@endsection
