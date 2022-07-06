@extends('layouts.admin')

@section('content')
<div class="container my-4">

  <section class="d-flex justify-content-between align-items-center">
    <h1 class="d-inline">Posts List </h1>
    <a class="btn btn-success" href="{{ route('admin.posts.create') }}">ADD</a>
  </section>

  
  <table class="table my-5">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">More</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post )

      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>
          <a class="btn btn-primary" href=" {{ route('admin.posts.show', $post)  }}">SHOW</a>
          <a class="btn btn-secondary" href="{{ route('admin.posts.edit', $post)  }}">EDIT</a>

          <form class = "d-inline"
                onsubmit = "return confirm('Do you confirm the deletion of the ## {{ $post->title }} ## post?')"
                action = "#" method="POST">
            @csrf
            @method ('DELETE')

            <button class="btn btn-danger">DELETE</button>
          </form>

        </td>
      </tr>
        
      @endforeach
      
    </tbody>
  </table>

  {{ $posts->links() }}

</div>
@endsection
