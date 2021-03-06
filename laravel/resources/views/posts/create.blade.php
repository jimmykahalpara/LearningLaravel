@extends('layouts.app')


@section('title', 'Create the post')



@section('content')
    <div class="m-2">
        @if ($errors->any())
            <div>
                <ul class="text-danger">
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('posts.store') }}" method="post" id="create-form">
            @csrf
            @include('posts.partials.form')
            <div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('posts.index') }}">Show All Posts</a>
            </div>
        </form>
    </div>

    {!! JsValidator::formRequest('App\Http\Requests\StorePost', "#create-form") !!}

@endsection
