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
                @for ($i = 0; $i < 6; $i++)
                    @include('components.layouts.blogcard')
                @endfor
            </div>
        </div>
    </section>
    <!-- ===== Blog End ===== -->

</div>
