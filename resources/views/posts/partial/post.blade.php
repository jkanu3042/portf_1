@include('users.partial.avatar', ['user' => $post->user])
<div class="media-body">
    <h4 class="media-heading">
        <a href="{{ route('posts.show', $post->id) }}">
            {{ $post->title }}
        </a>
    </h4>

    <p class="text-muted meta__article">
        <a href="{{ gravatar_profile_url($post->user->email) }}">
            <i class="fa fa-user"></i> {{ $post->user->name }}
        </a>

        <small>
            / {{ $post->created_at->diffForHumans() }}
        <!--•-->
        </small>
    </p>
</div>