<!-- Blog Item -->
<div class="animate_top sg vk rm xm">
    <div class="c rc i z-1 pg">
        <img class="w-full" src="{{ $gallery->thumbnail === null ? asset('images/blog-01.png') : asset("/storage/{$gallery->thumbnail}") }}" alt="{{$gallery->title}}" />
    </div>

    <div class="yh">
         <div class="tc uf wf ag jq">
            <div class="tc wf ag">
                <p>{{$gallery->title ?? ''}}</p>
            </div>
        </div>
    </div>
</div>
