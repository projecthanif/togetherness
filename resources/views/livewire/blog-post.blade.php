<div>
    <section @style('width:80%')>
        <section class="gj qp gr hj rp hr">
            @if($post !== null)
                <img
                    src="{{ $post->thumbnail === null ? asset('images/blog-01.png') : asset("/storage/{$post->thumbnail}") }} "
                    @style('width:100%; padding:10px; height:500px') />
                <div class="bb ze ki xn 2xl:ud-px-0">
                    <div class="tc sf yo zf kq">
                        <div
                            class="animate_top rounded-md shadow-solid-13 bg-white dark:bg-blacksection border border-stroke dark:border-strokedark p-7.5 md:p-10">
                            <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">{{ $post->title }}</h2>
                            {{ $post->content }}
                        </div>
                    </div>
                </div>
            @endif
        </section>
    </section>
</div>
