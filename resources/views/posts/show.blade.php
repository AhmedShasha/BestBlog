@extends('layouts.master')

@section('content')
    <div class="row mt-4 ml-4 border-5 border-primary">
        <div class="col-md-9 offset-md-2"></div>
        <div class="card mb-3" style="min-width: 18rem">

            <div class="card-body">
                <div class="card-title">
                    <h4> {{ $posts->title }}</h4>
                </div>
                <div class="card-text">
                    <img src="{{asset('storage/images/'. $posts->image)}}" alt="" width="100%" height="400px">
                </div>
                <div class="card-text">
                    {{ $posts->body }}
                </div>
                <hr>

                <small class="text-muted">
                    <p>{{ $posts->created_at }}</p>
                </small>
                <div class="text-muted">
                    <p>Created By : {{$posts->user->name}}</p>
                </div>

                @auth
                    @if (auth()->user()->id == $posts->user_id)
                        <a href="{{ '/posts/' . $posts->id . '/edit' }}" class="btn btn-primary float-left mr-2">Edit</a>
                        <form action="{{ route('posts.destroy', ['id' => $posts->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger float-left">Delete</button>
                        </form>
                    @endif
                @endauth

            </div>
        </div>
    </div>
@endsection
