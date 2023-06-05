@extends('site.include.layout')

@section('content')
<section class="container main-content">
    <div class="row">
        <div class="col-md-9">

            <div class="tabs-warp question-tab">

                <div class="tab-inner-warp">
                    <div class="tab-inner">
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This is my first Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-poll">
                            <h2>
                                <a href="single_question_poll.html">This Is My Second Poll Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Third Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fourth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fifth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Sixth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My seventh Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Eighth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                    </div>
                </div>
                <div class="tab-inner-warp">
                    <div class="tab-inner">
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This is my first Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-poll">
                            <h2>
                                <a href="single_question_poll.html">This Is My Second Poll Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Third Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fourth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fifth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Sixth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My seventh Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Eighth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                    </div>
                </div>
                <div class="tab-inner-warp">
                    <div class="tab-inner">
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This is my first Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-poll">
                            <h2>
                                <a href="single_question_poll.html">This Is My Second Poll Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Third Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fourth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fifth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Sixth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My seventh Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Eighth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                    </div>
                </div>
                <div class="tab-inner-warp">
                    <div class="tab-inner">
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This is my first Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-poll">
                            <h2>
                                <a href="single_question_poll.html">This Is My Second Poll Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Third Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fourth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Fifth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Sixth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My seventh Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="{{ asset('asset/images/demo/avatar.png') }}"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                        <article class="question question-type-normal">
                            <h2>
                                <a href="single_question.html">This Is My Eighth Question</a>
                            </h2>
                            <a class="question-report" href="#">Report</a>
                            <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                            <div class="question-author">
                                <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="asset/images/demo/admin.jpg"></a>
                            </div>
                            <div class="question-inner">
                                <div class="clearfix"></div>
                                <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                <div class="question-details">
                                    <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                    <span class="question-favorite"><i class="icon-star"></i>5</span>
                                </div>
                                <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                <span class="question-view"><i class="icon-user"></i>70 views</span>
                                <div class="clearfix"></div>
                            </div>
                        </article>
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

@endsection
