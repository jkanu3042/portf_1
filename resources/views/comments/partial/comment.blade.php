<div class="media item__comment " id="comment_{{ $comment->id }}">
    @include('users.partial.avatar', ['user' => $comment->user, 'size' => 32])

    <div class="media-body">
        <h5 class="media-heading">
            <a href="{{ gravatar_profile_url($comment->user->email) }}">
                {{ $comment->user->name }}
            </a>
            <small>
                {{ $comment->created_at->diffForHumans() }}
            </small>
            @can('update', $comment)
                <a href="{{route('comments.destroy', $comment->id)}}">
                    <i class="fa fa-trash-o"></i>
                    삭제
                </a>
            @endcan
        </h5>

        <div>
            {{ $comment->content }}
        </div>



        @if($currentUser)
            @include('comments.partial.create', ['parentId' => $comment->id])
        @endif



    </div>
</div>
