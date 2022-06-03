@extends('layout')

@section('main-content')

    <div>
        <div class="float-start">
            <h4 class="pb-3">Edit Tasks <span class="badge bg-info">{{ $task->title }}</span></h4>
        </div>
        <div class="float-end">
            <a href="{{ route('index') }}" class="btn btn-info">
                <i class="fa fa-arrow-left"></i>
                All Tasks</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="card card-body bg-light p-4">
        <form action="{{ route('task.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{ $task->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="exampleInputEmail1" name="description"
                          rows="5">{{ $task->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    @foreach($statuses as $status)
                        <option
                            value="{{ $status['value'] }}" {{ $task->status ===  $status['value'] ? 'selected':''}}>{{ $status['label'] }}</option>
                    @endforeach
                </select>
            </div>

            <a href="{{ route('index') }}" class="btn btn-secondary mr-2">
                <i class="fa fa-arrow-left"></i>
                Cancel</a>
            <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i>
                Update
            </button>
        </form>
    </div>

@endsection
