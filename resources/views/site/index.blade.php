@extends('site.include.layout')

@section('content')
<section id="app" class="container main-content">
    <div class="row">
        <div class="col-md-9">

            <posts></posts>

            <div class="tabs-warp question-tab">

                <div class="tab-inner-warp">

                    <div class="tab-inner">
                        <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                    </div>
                </div>


            </div><!-- End page-content -->
        </div><!-- End main -->
        <aside class="col-md-3 sidebar">
            <div class="widget widget_stats">
                <h3 class="widget_title">Stats</h3>
                <div class="ul_list ul_list-icon-ok">
                    <ul>
                        <li><i class="icon-question-sign"></i>Questions ( <span>20</span> )</li>
                        <li><i class="icon-comment"></i>Answers ( <span>50</span> )</li>
                    </ul>
                </div>
            </div>



            <div class="widget widget_tag_cloud">
                <h3 class="widget_title">Tags</h3>
                <a href="#">projects</a>
                <a href="#">Portfolio</a>
                <a href="#">Wordpress</a>
                <a href="#">Html</a>
                <a href="#">Css</a>
                <a href="#">jQuery</a>
                <a href="#">2code</a>
                <a href="#">vbegy</a>
            </div>



        </aside><!-- End sidebar -->
    </div><!-- End row -->
</section><!-- End container -->
{{--  <script src="{{ asset('app.') }}" defer></script>  --}}
@endsection
