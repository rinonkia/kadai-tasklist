@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    <h1>タスク一覧</h1>
    
    @if (count($user->tasks) > 0)
        <div class="col-sm-6">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>ステータス</th>
                        <th>タスク</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->tasks as $task)
                        <tr>
                            <td>{!! link_to_route('tasks.show' ,$task->id, [ 'id' => $task->id ]) !!}</td>
                            <td>{{ $task->status }}</td>
                            <td>{{ $task->content }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

    <div class="col-xs-12">
    {!! link_to_route('tasks.create', '新規タスクの追加', null, ['class' => 'btn btn-primary']) !!}
    </div>
    
@endsection