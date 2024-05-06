<div>
    <!-- ===== Blog Start ===== -->
    <section class="ji gp uq">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Latest Blogs & News`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
            <div class="animate_top bb ze rj ki xn vq">
                <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                </h2>
                <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
            </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
            <div class="wc qf pn xo zf iq">
                @foreach ($blogs as $blog)
                    @include('components.layouts.blogcard', ['blog' => $blog])
                @endforeach
            </div>
        </div>
        {{-- {{ $blogs->links('vendor.livewire.custom-pagination') }} --}}
    </section>
    <!-- ===== Blog End ===== -->

</div>
