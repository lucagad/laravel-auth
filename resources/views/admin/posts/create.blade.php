@extends('layouts.admin')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-8 offset-2">

                <section class = "d-flex justify-content-between align-items-center">
                    <h2 class="mb-3 d-inline">Add a new Post</h2>
                    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">BACK</a>
                </section>

                <form action="{{ route('admin.posts.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">

                        <label for="title" class="form-label">Post Title</label>

                        <input type="text" 
                                id="title" 
                                name="title" 
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="Post Title"
                                value="{{old('title')}}">

                        @error('title')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror

                    </div>

                    <div class="mb-3">
                        
                        <label for="content" class="form-label">Comic Type</label>

                        <input type="text"
                                id="content" 
                                name="content" 
                                class="form-control @error('content') is-invalid @enderror"
                                placeholder="Post Content"
                                value="{{old('content')}}" >

                        @error('type')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror

                    </div>

                    {{-- <div class="mb-3">
                        <label for="image" class="form-label">URL Image</label>
                        <input type="text" 
                                id="image" 
                                name="image" 
                                class="form-control @error('image') is-invalid @enderror"
                                placeholder="URL Image"
                                value="{{old('image')}}" >
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