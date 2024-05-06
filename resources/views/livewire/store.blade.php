<div>
    <!-- ===== Blog Start ===== -->
    <section class="ji gp uq">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Store` }">
            <div class="animate_top bb ze rj ki xn vq">
                <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
                </h2>
            </div>
        </div>
        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
            <div class="wc qf pn xo zf iq">
                @for ($i = 0; $i < 6; $i++)
                    @include('components.layouts.gallery')
                @endfor
            </div>
        </div>
    </section>
    <!-- ===== Blog End ===== -->

</div>
