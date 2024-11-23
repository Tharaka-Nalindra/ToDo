@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="tdpage_title">Todo List</h1>
            </div>

            <div class="col-lg-12">

                <form method="POST" action="{{ route('todo.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label for="" class="form-label">Add Task</label>
                                <input type="text" class="form-control" id="tack" name="title">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="col-2 task_btn"> <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                </form>
            </div>
            <div class="clo-lg-12">
                <div class="table_recode">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Task</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $key => $mytask)
                                <tr>
                                    <th scope="row">{{ $key++ }}</th>
                                    <td>{{ $mytask->title }}</td>
                                    <td>
                                        @if ($mytask->Done == 0)
                                            <span class="badge bg-warning">Not Completed</span>
                                        @else
                                            <span class="badge bg-success">Completed</span>
                                        @endif
                                    </td>
                                    <td><a href="{{ route('todo.delete',$mytask->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                                    <td><a href="{{ route('todo.done',$mytask->id) }}" class="btn btn-success"><i class="fa-solid fa-check"></i></a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
    </div>
@endsection


@push('css')
    <style>
        .tdpage_title {
            padding-top: 1vh;
            font-size: 5rem;
            color: green;
            margin-bottom: 7vh;
        }

        .task_btn {
            margin-top: 31px;
        }
    </style>
@endpush
