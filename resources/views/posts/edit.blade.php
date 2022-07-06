@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-8 offset-2">
                
                <section class = "d-flex justify-content-between align-items-center">
                    <h2 class="mb-3 d-inline">Post selected</h2>
                    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">BACK</a>
                </section>

                <div class="row my-4 border border-dark rounded p-2">

                    <div class="col-4 col-lg-2 d-flex justify-content-start align-items-center">
                        
                    </div>

                    <div class="col-8 col-lg-10 d-flex flex-column justify-content-center align-items-start">
                        <h3>{{ $post->title }}</h3>
                        <p class="my-2 p-1 rounded">{{ $post->content }}</p>
                    </div>

                </div>

                <form action="{{ route('admin.posts.update', $post )}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Post Title</label>
                        <input type="text" id="title"
                            value="{{$post->title}}"
                            name="title" 
                            class="form-control @error('title') is-invalid @enderror"
                            placeholder="Post Title"
                            value="{{old('title',$post->title)}}">

                        @error('title')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Post Content</label>
                        <input type="text" id="content" 
                            value="{{$post->content}}"
                            name="content" 
                            class="form-control @error('content') is-invalid @enderror"
                            placeholder="Post Content"
                            value="{{old('content',$post->content)}}" >

                        @error('content')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        
                    </div>

                    {{-- <div class="mb-3">
                        <label for="image" class="form-label">URL Image</label>
                        <input type="text" id="image" 
                            value="{{$comic->image}}"
                            name="image" 
                            class="form-control @error('image') is-invalid @enderror"
                            placeholder="URL Image"
                            value="{{old('image',$comic->image)}}" >
                        @error('image')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div> --}}

                    <button type="submit" class="btn btn-success">SAVE</button>
                </form>
            </div>
        </div>

    </div>
@endsection