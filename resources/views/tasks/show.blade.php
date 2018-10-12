@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>{{ $task->id }}のタスク詳細ページ</h1>
    
    <div class="col-sm-3">
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <td>{{ $task->id }}</td>
            </tr>
                <tr>
                <th>ステータス</th>
                <td>{{ $task->status }}</td>
            </tr>
            <tr>
                <th>タスク</th>
                <td>{{ $task->content }}</td>
            </tr>
        </table>
    </div>

    <div class="col-sm-10">
    
        {!! link_to_route('tasks.edit', 'タスクの編集',['id' => $task->id], ['class' => 'btn btn-default']) !!}
        
        {!! Form::model($task, [ 'route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection