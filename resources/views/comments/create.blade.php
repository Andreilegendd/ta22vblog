@extends('partials.layout')
@section('title', 'Add Comment')
@section('content')
    <div class="container mx-auto">
        <div class="card bg-base-300 shadow-xl w-1/2 mx-auto">
            <div class="card-body">
                <h2 class="text-lg font-bold">Add a New Comment</h2>
                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Comment</span>
                        </div>
                        <textarea name="body" placeholder="Enter your comment" class="textarea textarea-bordered @error('body') textarea-error @enderror w-full" rows="3" required>{{ old('body') }}</textarea>
                        <div class="label">
                            @error('body')
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </label>

                    <label class="form-control w-full mt-4">
                        <div class="label">
                            <span class="label-text">Attach to Post</span>
                        </div>
                        <select name="post_id" class="select select-bordered w-full" required>
                            @foreach ($posts as $post)
                                <option value="{{ $post->id }}">
                                    {{ $post->title }}
                                </option>
                            @endforeach
                        </select>
                    </label>

                    <button type="submit" class="btn btn-primary mt-4">Add Comment</button>
                </form>
            </div>
        </div>
    </div>
@endsection
