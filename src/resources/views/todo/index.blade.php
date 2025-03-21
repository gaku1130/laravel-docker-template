@extends('layouts.base')
@section('content')
        <div class="row justify-content-center">
          <div class="col-md-8">
            <p class="text-left">
              <a class="btn btn-success" href="{{route('todo.create')}}">ToDoを追加</a>
            </p>
            <div class="card">
              <div class="card-header">
                ToDo一覧
              </div>
              <div class="list-group list-group-flush">
              @foreach ($todos as $todo)
                <div class="d-flex align-items-center justify-content-between p-2 border-bottom">
                  <div>
                    <div class="fw-bold">{{ $todo->content }}</div>
                    @if($todo->category)
                      <span class="badge bg-light text-dark border border-primary mt-1">{{ $todo->category }}</span>
                    @endif
                  </div>
                  <a href="{{ route('todo.show', $todo->id) }}" class="btn btn-info">詳細</a>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
        @endsection
      </div>
    </main>
  </div>
</body>
</html>