<template>
   	<div class="panel-pop" id="signup">
		<h2>Register Now<i class="icon-remove"></i></h2>
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
	</div><!-- End signup -->

</template>
<script>

    export default {
       data(){
         return {
              post: {},
            }
       },
    }

</script>
