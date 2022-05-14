@extends('Templates.template-1')
@section('content')
    <div class="list">
        <h1>To-do List</h1>
            <form action="">
                @csrf
                <input type="text" name="task" id="task">
                <input name="data" id="data" type="datetime-local">
                <input type="submit">
            </form>

            <div class="list-box">
                <div class="list-card">
                    <H3>AQUI VAI A TAREFA - AQUI VAI A DATA</H3>
                </div>
            </div>
    </div>
@endsection