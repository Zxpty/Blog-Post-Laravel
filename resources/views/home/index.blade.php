@extends('/layouts/main')
@push('css-dependencies')
    <link rel="stylesheet" type="text/css" href="/assets/css/home/home.css">
@endpush
@section('content-home')
    @auth
        <div class="main__post" id="main__post">
            <input id="input__modal" type="text" name="title" placeholder="Let's go a make a post ...">
            <button>Post</button>
        </div>
        <div id="modal__post" class="modal">
            <div class="modal__content">
                <h3>New Post</h3>
                <form action="/home" method="POST">
                    @csrf
                    <label for="title">Make a Title:</label>
                    <input type="text" name="title" placeholder="Let's go a make a post ...">
                    <label for="body">Write a description:</label>
                    <textarea name="body" placeholder="body content..."></textarea>
                    <button>Post</button>
                </form>
            </div>
        </div>

        <div class="main__card__post">
            @foreach ($posts as $post)
                <div class="card__post">
                    <div class="card__user">
                        <p class="name">{{ $post->user->name }}</p>
                        <div class="card__options">
                            <p class="date">{{ $post['created_at'] }}</p>
                            <div id="options__card"><i class="fa-solid fa-ellipsis options"></i></div>
                            <div class="card__options__open" id="card__options__open">
                                <div id="edit__modal"><span>Edit</span></div>
                                <div class="modal" id="modal__edit__post">
                                    <div class="modal__content">
                                        <h3>Edit Post</h3>
                                        <form action="/home" method="POST">
                                            @csrf
                                            <label for="title">Make a Title:</label>
                                            <input type="text" name="title" placeholder="Let's go a make a post ...">
                                            <label for="body">Write a description:</label>
                                            <textarea name="body" placeholder="body content..."></textarea>
                                            <button>Post</button>
                                        </form>
                                    </div>
                                </div>
                                <div>
                                    <form id="deleteCards" action="/delete-post/{{ $post->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <span id="deleteBtn" style="cursor: pointer; color: red;">Delete</span>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card__content">
                        <h3>{{ $post['title'] }}</h3>
                        <p>{{ $post['body'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endauth
@endsection

@push('script-dependencies')
<script src="/assets/js/home.js" defer></script>
@endpush
