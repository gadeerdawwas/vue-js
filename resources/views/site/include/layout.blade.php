<!DOCTYPE html>

<head>

@include('site.include.head')

</head>
<body>

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
    <register></register>
    <div class="panel-pop" id="lost-password">
		<h2>Login Now<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<form>
				<div class="form-inputs clearfix">
					<p>
						<label class="required">Username<span>*</span></label>
						<input type="text">
					</p>
					<p>
						<label class="required">E-Mail<span>*</span></label>
						<input type="email">
					</p>
					<p>
						<label class="required">Password<span>*</span></label>
						<input type="password" value="">
					</p>
					<p>
						<label class="required">Confirm Password<span>*</span></label>
						<input type="password" value="">
					</p>
				</div>
				<p class="form-submit">
					<input type="submit" value="Signup" class="button color small submit">
				</p>
			</form>
		</div>
	</div><!-- End lost-password -->



	<div id="header-top">
		<section class="container clearfix">
			<nav class="header-top-nav">
				<ul>

					<li><p  class="login-password">
                        <a href="#">Login Area</a>
                    </p></li>
					<li><a href="#" class="signup"><i class="icon-user"></i>signup</a></li>
                    <login></login>
				</ul>
			</nav>

		</section><!-- End container -->
	</div><!-- End header-top -->

    @include('site.include.header')



	@yield('content')
	@include('site.include.footer')
</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

<!-- js -->
@include('site.include.script')
<!-- End js -->

</body>

<!-- Mirrored from 2code.info/demo/html/ask-me-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2022 09:07:52 GMT -->
</html>
