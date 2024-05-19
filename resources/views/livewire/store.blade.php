<div>
    <!-- ===== Gallery Start ===== -->
    <section class="ji gp uq">
        <div class="bb ye ki xn vq jb jo">
            <div class="wc qf pn xo zf iq" @style('margin-left:30px;margin-right:30px')>
                @if(!empty($galleries))
                    @foreach($galleries as $gallery)
                        @include('components.layouts.gallery')
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- ===== Gallery End ===== -->
</div>
