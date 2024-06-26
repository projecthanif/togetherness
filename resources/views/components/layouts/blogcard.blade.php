<!-- Blog Item -->
<div class="animate_top sg vk rm xm">
    <div class="c rc i z-1 pg">
        <img class="w-full"
            src="{{ $blog->thumbnail === null ? asset('images/blog-01.png') : asset("/storage/{$blog->thumbnail}") }} ">

        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
            <a href="/blog/{{ $blog->slug }}" class="vc ek rg lk gh sl ml il gi hi">Read More</a>
        </div>
    </div>

    <div class="yh">
        <div class="tc uf wf ag jq">
            <div class="tc wf ag">
                <img src="images/icon-man.svg" alt="User" />
                <p>Musharof Chy</p>
            </div>
            <div class="tc wf ag">
                <img src="images/icon-calender.svg" alt="Calender" />
                <p>25 Dec, 2025</p>
            </div>
        </div>
        <h4 class="ek tj ml il kk wm xl eq lb">
            <a href="">{{ $blog->title }}</a>
        </h4>
    </div>
</div>
