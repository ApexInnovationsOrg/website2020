@extends('layout')

@section('content')
<div class="container em2 translucentWhiteBackground medPadTop">
			<div class="col-md-12"><h1>Contact Us</h1></div>

			<!-- Technical Support -->
			<div class="col-md-12 medPadBot">
				<h2><strong>Technical Support</strong></h2>
				<p>
					Having trouble logging in? Course not loading? Need a copy of your certificate(s)? Something else?
					Click
					<strong class="inline-need-help-trigger text-danger"
						><span class="visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
							>NEED HELP?</span
						><i class="fa fa-question-circle visible-xs-inline-block text-danger"></i
					></strong>
					at the bottom of the screen. Using this feature provides the Apex support team with vital
					information related to your issue and allows us to better serve and assist you.
				</p>
				<p>Hours: 24 hours a day, 7 days a week</p>
				<br>
				<div class="valign-wrapper smPadBot">
					<a href="FAQs.php?tech=1">View frequently asked questions</a>
					<i class="fa fa-external-link smPadLeft text-danger"></i>
				</div>

				<div id="quickStartGuides" class="row smPadTop smPadBot">
					<label class="tiny">Quick Start Guides</label>
				</div>
			</div>

			<hr />

			<!-- Customer Service -->
			<div class="col-md-12 medPadBot">
				<h2><strong>Customer Service</strong></h2>
				<p>
					For questions concerning clinical compliance, sales, or general information, please contact customer
					service.
				</p>
				<p>Toll Free: 866-294-4599 ext. 112</p>
				<p>Fax: 425-740-8506</p>
				<p>Hours: Monday - Friday 8:00am - 4:00pm CST</p>
			</div>

			<hr />

			<!-- Sales -->
			<div class="col-md-12 medPadBot">
				<h2><strong>Sales</strong></h2>
				<p>
					Organizations have the benefit of bulk pricing discounts. To find out more about organizational
					pricing, please give us a call.
				</p>
				<p>
					Email:
					<strong><a href="mailto:sales@apexinnovations.com">Sales</a></strong> (sales@apexinnovations.com)
				</p>
				<p>Toll Free: 866-294-4599 ext. 112</p>
			</div>

			<hr />

			<!-- Sales -->
			<div class="col-md-12 medPadBot">
				<h2><strong>Mailing Address</strong></h2>
				<p>Apex Innovations</p>
				<p>3909 Ambassador Caffery Pkwy</p>
				<p>Building K</p>
				<p>Lafayette, LA 70503</p>
			</div>

			<hr />

			<div class="col-md-8 col-sm-12 col-md-offset-2 medPadBot note">
				<label class="tiny"
					>We have regularly scheduled maintenance on our servers from 12:00 AM to 12:15 AM CST every night
					and 9:00 PM to 11:00 PM CST every Sunday night.</label
				>
			</div>
		</div>
@endsection