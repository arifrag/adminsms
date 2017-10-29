<?php 
	include "header.php";
	include "left_panel.php";
	include "section_up.php";
?>
					<div id='page_dashboard' class="page"  style="display: none;">
						<div class="row">
							<div class="col-md-8">
								<div class="panel panel-featured-danger panel-featured-bottom">
									<div class="panel-body text-center">
										<img src="assets/images/!happy-face.png" height="120" class="img-circle">
										<h1>Selamat Datang, ARIF RAGIL!</h1>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<section class="panel" onclick="window.location.href='pesanan.html'">
									<div class="panel-body bg-danger">
										<div class="widget-summary widget-summary-md">
											<div class="widget-summary-col widget-summary-col-icon">
												<div class="summary-icon bg-primary">
													<i class="fa fa-inbox"></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<div class="info">
														<h2>Pesan Masuk 20</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section class="panel" onclick="window.location.href='pesan.html'">
									<div class="panel-body bg-danger">
										<div class="widget-summary widget-summary-md">
											<div class="widget-summary-col widget-summary-col-icon">
												<div class="summary-icon bg-primary">
													<i class="fa fa-send"></i>
												</div>
											</div>
											<div class="widget-summary-col">
												<div class="summary">
													<div class="info">
														<h2>Pesan Keluar 10</h2>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id='page_contact' class="page" style="display: none;">
						<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Default</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md">
											<button id="addToTable" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
										</div>
									</div>
								</div>
								<input type="hidden" id="statTblContact">
								<table class="table table-bordered table-striped mb-none" id="datatable-default2">
									<thead>
										<tr>
											<th>No</th>
											<th>Contact Name</th>
											<th>No Contact</th>
										</tr>
									</thead>
									<tbody id="resTblContact">
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
					</div>
					<div id="page_message" class="page" style="display: none;">
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Create a Message</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="form-group">
										<label class="col-sm-1 control-label">Input</label>
										<div class="col-sm-2">
											<input class="form-control" id="destination_number" name="destination_number" onblur="cekNo();">
										</div>
										<span class="resContactName">To : ...</span>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Write a Message</label>
										<div class="col-sm-2">
											<textarea class="form-control" id="message" name="message"></textarea> 
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-4">
											<button type="button" onclick="sent();" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-send-o"></i> Sent</button>
											<button type="button" onclick="reset();" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-refresh"></i> Reset</button>
										</div>
									</div>
								</div>
							</div>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th width="25">Contact Name</th>
											<th width="10">No HP</th>
											<th width="50%">Message</th>
											<th width="10">Sent From</th>
											<th width="5">Date Time</th>
										</tr>
									</thead>
									<tbody id="TableSent">
										<tr class="gradeX">
											<td>ARIF RAGIL</td>
											<td>089623199126</td>
											<td>sajkhdasjkhdkjas lasjkdh ksaj dasjlkd alskdh alsj dajs sjdhfsjhd sjdf sljkdhf sjkdf hsjkdf hksjd fjskd fskdjf ksjd fkjsd f sjdfh sjdfh skdjf sjdfh sjldf hsjdf sjld fljsdf hljsd fjsd fjsd fjsd hfljkj sd ksjdh ksj kjsh dkj</td>
											<td>WEB</td>
											<td>07:20 20/11/2016</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
					</div>
					<div id="page_inbox" class="page" style="display: none;">
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">INBOX</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-xs-none" id="datatable-default">
									<thead>
										<tr>
											<th width="10%">Contact Name</th>
											<th width="10%">No Contact</th>
											<th width="50%">Message</th>
											<th width="10%">Date Time</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
											<td>ARIF RAGIL</td>
											<td>089623199126</td>
											<td>Hai Gil</td>
											<td>07:20 20/11/2016</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
					</div>
					<div id="page_outbox" class="page" style="display: none;">
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Outbox</h2>
							</header>
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-xs-none" id="datatable-default">
									<thead>
										<tr>
											<th width="10%">Contact Name</th>
											<th width="10%">No Contact</th>
											<th width="50%">Message</th>
											<th width="10%">Date Time</th>
										</tr>
									</thead>
									<tbody>
										<tr class="gradeX">
											<td>ARIF RAGIL</td>
											<td>089623199126</td>
											<td>Hai Gil</td>
											<td>07:20 20/11/2016</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
					</div>
					<div id="page_broadcast" class="page" style="display: none;">
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Create a Broadcast</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label class="col-sm-2 control-label">Input</label>
											<div class="col-sm-6">
												<button type="button" class="mb-xs mt-xs mr-xs btn btn-success btn-block modal-with-zoom-anim" href="#modalAnim" onclick="tableContact()">Search Contact</button>
												<input type="hidden" class="form-control" id="broadcast_number" name="broadcast_number">
												<ul class="list-unstyled m-none" id="tempBrdcst">
												</ul>
											</div>	
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Write a Message</label>
											<div class="col-md-6">
												<textarea class="form-control" id="broadcast_message" name="broadcast_message"></textarea> 
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-12">
												<button type="button" onclick="sentBroadcast();" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-send-o"></i> Sent</button>
												<button type="button" onclick="reset();" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-refresh"></i> Reset</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th width="25">Contact Name</th>
											<th width="10">No HP</th>
											<th width="50%">Message</th>
											<th width="10">Sent From</th>
											<th width="5">Date Time</th>
										</tr>
									</thead>
									<tbody id="TableBroadcast">
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
					</div>
					<div id="page_schedule" class="page" style="display: none;">
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Create a Schedule</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label class="col-sm-2 control-label">Input</label>
											<div class="col-sm-2">
												<input type="text" class="form-control" id="schedule_number"  name="schedule_number" onblur="cekNo(this.value);">
											</div>	
											<div class="col-sm-2">
										<span class="resContactName">To : ...</span>
											</div>
										</div>
										<div class="form-group">
										<label class="col-sm-2 control-label">Schedule</label>
											<div class="col-sm-2">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</span>
													<input type="text" id="dateSchedule" data-plugin-datepicker="" class="form-control">

												</div>
											</div>	
											<div class="col-sm-2">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-clock-o"></i>
													</span>
													<input type="text" id="timeSchedule" data-plugin-timepicker="" class="form-control" data-plugin-options="{ &quot;showMeridian&quot;: false }">
												</div>
											</div>	
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Write a Message</label>
											<div class="col-md-6">
												<textarea class="form-control" id="schedule_message" name="schedule_message"></textarea> 
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-12">
												<button type="button" onclick="sentSchedule();" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-send-o"></i> Sent</button>
												<button type="button" onclick="reset();" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-refresh"></i> Reset</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th width="25">Contact Name</th>
											<th width="10">No HP</th>
											<th width="50%">Message</th>
											<th width="10">Sent From</th>
											<th width="5">Date Time</th>
										</tr>
									</thead>
									<tbody id="TableSchedule">
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
					</div>
					<div id="page_Credit" class="page" style="display: none;">
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Buy Credit</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label class="col-sm-2 control-label">Type Credit</label>
											<div class="col-sm-4">
												<select class="form-control" id="creditType" name="creditType">
													<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pilih Credit</option>
													<option value="1">Credit : 1400 | Harga : 100.000</option>
													<option value="2">Credit : 2900 | Harga : 200.000</option>
													<option value="3">Credit : 4200 | Harga : 300.000</option>
													<option value="4">Credit : 5700 | Harga : 400.000</option>
													<option value="5">Credit : 10000 | Harga : 700.000</option>
												</select>
											</div>	
										</div>
										<div class="form-group">
										<label class="col-sm-2 control-label">Bank</label>
											<div class="col-sm-4">
												<div class="checkbox-custom checkbox-primary">
													<input type="checkbox" id="typeBank">
													<label for="typeBank">BCA</label>
												</div>
												
											</div>	
										</div><div class="form-group">
										<label class="col-sm-2 control-label">Penting</label>
											<div class="col-sm-6">
												<blockquote class="info">
													<p>Invoice akan kami kirim ke alamat email dan no Hp yang telah terdaftar sebelumnya. 3 digit terakhir Ex. <span class="highlight">012</span> pada invoice dibutuhkan untuk kami memverifikasi transfer Anda. Apabila transfer selesai, harap konfirmasi dengan menekan button di bawah.</p>
													<small>Hubungi <cite title="Magazine X">Admin Support</cite>, jika terdapat keluhan. Terimakasih</small>
												</blockquote>
											</div>	
										</div>
										<div class="form-group">
											<div class="col-sm-12">
												<button type="button" onclick="sentCredit();" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-send-o"></i> Sent</button>
												<button type="button" onclick="reset();" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-refresh"></i> Reset</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
									<thead>
										<tr>
											<th width="10%">Harga</th>
											<th width="10%">Credit</th>
											<th width="10%">Date Time</th>
											<th width="10%">Status</th>
										</tr>
									</thead>
									<tbody id="TableCredit">
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->
					</div>
					<div id="page_API" class="page" style="display: none;">
					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">API CODE</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="tabs">
											<ul class="nav nav-tabs">
												<li class="active">
													<a href="#original" data-toggle="tab"><i class="fa fa-pencil-square-o"></i>Original</a>
												</li>
												<li>
													<a href="#broadcast" data-toggle="tab"><i class="fa fa-fighter-jet"></i> Broadcast</a>
												</li>
												<li>
													<a href="#schedule" data-toggle="tab"><i class="fa fa-list-alt"></i>Schedule</a>
												</li>
											</ul>
											<div class="tab-content">
												<div id="original" class="tab-pane active">
													<p>PHP CODE</p>
													<textarea class="form-control" rows="10" id="codemirror_js_code" name="code_js" data-plugin-codemirror data-plugin-options='{ "mode": "text/javascript" }'>
														$type = 'orgnl9283'; //unchanged
														$no_hp = 'contact_number1';
														$message = 'Type your message';
														$usr_api = 'your_usr_api';
														$pass_api = 'your_pass_api';
														$curl = curl_init();
														curl_setopt_array($curl, array(
														  CURLOPT_URL => "http://localhost/porto/arphi_json.php",
														  CURLOPT_RETURNTRANSFER => true,
														  CURLOPT_ENCODING => "",
														  CURLOPT_MAXREDIRS => 10,
														  CURLOPT_TIMEOUT => 30,
														  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
														  CURLOPT_CUSTOMREQUEST => "POST",
														  CURLOPT_POSTFIELDS => "type=$type&no_hp=$no_hp&message=$message&usr_api=$usr_api&pass_api=$pass_api",
														  CURLOPT_HTTPHEADER => array(
														    "content-type: application/x-www-form-urlencoded",
														    "f: coba"
														  ),
														));

														$response = curl_exec($curl);
														$error = curl_error($curl);

														curl_close($curl);

														if ($error) {
														  echo "cURL Error #:" . $error;
														} else {
														  echo $response;
														}
													</textarea>
												</div>
												<div id="broadcast" class="tab-pane">
													<p>PHP CODE</p>
													<textarea class="form-control" rows="10" id="codemirror_js_code" name="code_js" data-plugin-codemirror data-plugin-options='{ "mode": "text/javascript" }'>
														$type = 'brdcst8329'; //unchanged
														$no_hp = 'contact_number1#contact_number2#contact_number3#contact_number4#contact_number5#contact_number6#contact_number7#contact_number8#contact_number9';
														$message = 'Type your message';
														$usr_api = 'your_usr_api';
														$pass_api = 'your_pass_api';
														$curl = curl_init();
														curl_setopt_array($curl, array(
														  CURLOPT_URL => "http://localhost/porto/arphi_json.php",
														  CURLOPT_RETURNTRANSFER => true,
														  CURLOPT_ENCODING => "",
														  CURLOPT_MAXREDIRS => 10,
														  CURLOPT_TIMEOUT => 30,
														  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
														  CURLOPT_CUSTOMREQUEST => "POST",
														  CURLOPT_POSTFIELDS => "type=$type&no_hp=$no_hp&message=$message&usr_api=$usr_api&pass_api=$pass_api",
														  CURLOPT_HTTPHEADER => array(
														    "content-type: application/x-www-form-urlencoded",
														    "f: coba"
														  ),
														));

														$response = curl_exec($curl);
														$error = curl_error($curl);

														curl_close($curl);

														if ($error) {
														  echo "cURL Error #:" . $error;
														} else {
														  echo $response;
														}
													</textarea>
												</div>
												<div id="schedule" class="tab-pane">
													<p>PHP CODE</p>
													<textarea class="form-control" rows="10" id="codemirror_js_code" name="code_js" data-plugin-codemirror data-plugin-options='{ "mode": "text/javascript" }'>
														$type = 'schdle4565'; //unchanged
														$no_hp = 'contact_number1';
														$message = 'Type your message';
														$schedule = 'Time Schedule'; //Ex :2016-12-30 10:41:10
														$usr_api = 'your_usr_api';
														$pass_api = 'your_pass_api';
														$curl = curl_init();
														curl_setopt_array($curl, array(
														  CURLOPT_URL => "http://localhost/porto/arphi_json.php",
														  CURLOPT_RETURNTRANSFER => true,
														  CURLOPT_ENCODING => "",
														  CURLOPT_MAXREDIRS => 10,
														  CURLOPT_TIMEOUT => 30,
														  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
														  CURLOPT_CUSTOMREQUEST => "POST",
														  CURLOPT_POSTFIELDS => "type=$type&no_hp=$no_hp&message=$message&schedule=$schedule&usr_api=$usr_api&pass_api=$pass_api",
														  CURLOPT_HTTPHEADER => array(
														    "content-type: application/x-www-form-urlencoded",
														    "f: coba"
														  ),
														));

														$response = curl_exec($curl);
														$error = curl_error($curl);

														curl_close($curl);

														if ($error) {
														  echo "cURL Error #:" . $error;
														} else {
														  echo $response;
														}
													</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					<!-- end: page -->
					</div>
					<div id="page_API" class="page" style="display: block;">
						<div class="row">
							<div class="col-md-4 col-lg-3">

								<section class="panel">
									<div class="panel-body">
										<div class="thumb-info mb-md">
											<img src="assets/images/avatar/male.png" class="rounded img-responsive" alt="John Doe">
											<div class="thumb-info-title">
												<span class="thumb-info-inner">Arif Ragil</span>
												<span class="thumb-info-type">Reguler</span>
											</div>
										</div>

										<div class="widget-toggle-expand mb-md">
											
											<div class="widget-content-collapsed">
												<div class="progress progress-xs light">
													<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
													</div>
												</div>
											</div>
											<div class="widget-content-expanded">
												<ul class="simple-todo-list">
													<li class="completed">Phone : 089623199126</li>
													<li class="completed">Email : gil.arifragil@gmail.com</li>
												</ul>
											</div>
										</div>

										<hr class="dotted short">


										<div class="social-icons-list">
										<h6 class="text-muted">Please Like Us</h6>
											<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fa fa-facebook"></i><span>Facebook</span></a>
											<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fa fa-twitter"></i><span>Twitter</span></a>
											<a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
										</div>

									</div>
								</section>
							</div>
							<div class="col-md-8 col-lg-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>

										<h2 class="panel-title">
											<span class="label label-primary label-sm text-weight-normal va-middle mr-sm">198</span>
											<span class="va-middle">Last Message</span>
										</h2>
									</header>
									<div class="panel-body">
										<div class="content">
											<ul class="simple-user-list">
												<li>
													<figure class="image rounded">
														<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
													</figure>
													<span class="title">089623199126</span>
													<span class="message truncate">Lorem ipsum dolor sLorem ipsum dolor sLorem ipsum dolor sLorem ipsum dolor sLorem ipsum dolor sLorem ipsum dolor sLorem ipsum dolor sLorem ipsum dolor sLorem ipsum dolor s</span>
												</li>
												<li>
													<figure class="image rounded">
														<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
													</figure>
													<span class="title">Joseph Junior</span>
													<span class="message truncate">Lorem ipsum dolor sit.</span>
												</li>
												<li>
													<figure class="image rounded">
														<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
													</figure>
													<span class="title">Joe Junior</span>
													<span class="message truncate">Lorem ipsum dolor sit.</span>
												</li>
												<li>
													<figure class="image rounded">
														<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
													</figure>
													<span class="title">Joseph Doe Junior</span>
													<span class="message truncate">Lorem ipsum dolor sit.</span>
												</li>
											</ul>
											<hr class="dotted short">
											<div class="text-right">
												<a class="text-uppercase text-muted" href="#">(View All)</a>
											</div>
										</div>
									</div>
									<div class="panel-footer">
										<div class="input-group input-search">
											<input type="text" class="form-control" name="q" id="q" placeholder="type contact or number...">
											<span class="input-group-btn">
												<button class="btn btn-default" type="button" onclick="alert('masuk')"><i class="fa fa-search"></i>
												</button>
											</span>
										</div>
									</div>
								</section>
							</div>
							<div class="col-md-12 col-lg-3">
								<h4 class="mb-md">Your Information</h4>
								<ul class="simple-card-list mb-xlg">
									<li class="primary">
										<h3><i class="fa fa-cc"></i>  488</h3>
										<p>Credit</p>
									</li>
									<li class="primary">
										<h3><i class="fa fa-check"></i> 234</h3>
										<p>Sent Message</p>
									</li>
									<li class="primary">
										<h3><i class="fa fa-inbox"></i> 16</h3>
										<p>Nullam quris ris</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<input type="hidden" id="global_status"> <!--Status nya bisa di pakai smua kondisi-->
					<h5 class="text-center">
						Copyright &copy; 2017. <a href="#">arif ragil pamungkas</a><br>
						Created With Bismillah <i class="fa fa-heart"></i>
					</h5>

				</section>
			</div>
		</section>
		<!-- Modal Animation -->
		<div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
			<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">Are you sure?</h2>
				</header>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped mb-none">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>No Handphone</th>
								</tr>
							</thead>
							<tbody id="tableContactBrdcst">
							</tbody>
						</table>
					</div>
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-12 text-right">
							<button class="btn btn-primary modal-confirm">Confirm</button>
							<button class="btn btn-default modal-dismiss">Cancel</button>
						</div>
					</div>
				</footer>
			</section>
		</div>
		
	<!-- Vendor -->
		 <script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		 
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/select2/js/select2.js"></script>
		<script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		<!-- BUAT CODE -->
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/codemirror/lib/codemirror.js"></script>
		<script src="assets/vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="assets/vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="assets/vendor/codemirror/mode/xml/xml.js"></script>
		<script src="assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="assets/vendor/codemirror/mode/css/css.js"></script>
		<!-- END PENTING -->
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		<!-- TIME PICKER -->
		<script src="assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

		<!-- Examples -->
		<script src="assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>
		<!-- NOTOFICATIONS -->
		<script src="assets/vendor/pnotify/pnotify.custom.js"></script>
		<script src="assets/javascripts/ui-elements/examples.notifications.js"></script>

		<!-- PENTING -->
		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>

		<script type="text/javascript">
			function loadPage(x,page){
				$('.page').css("display", "none");
	    		$('.menu_class').removeClass('nav-expanded nav-active');
	    		$('#global_status').val('');

				$('#page_'+page).css("display", "block");
    			$('.menu_'+x).addClass('nav-expanded nav-active');
    			if(x==1){
					tableContact();
				}else if(x==2){
				}else if(x==3){
				}else if(x==3){
				}else if(x==5){
				}
			}
			function tableContact(){
				if($("#statTblContact").val() != 1){
					$("#resTblContact").html("");
					$("#statTblContact").val(1);
					$.post("arphi_json.php",
						{
							type : 'contact'
						},
						function (data, status){
							if (status == 'success'){
								var obj = JSON.parse(data);
								var res = "";
								var res2 = "";
								for (var i = 0; i < obj.Data.length; i++) {
									var no = i +1;
									var res = '<tr class="gradeX">'+
												'<td>'+no+'</td>'+
												'<td>'+obj.Data[i].contact_name+'</td>'+
												'<td>'+obj.Data[i].contact_no+'</td>'+
											'</tr>';
											var vrbl = "'"+obj.Data[i].contact_name+"','"+obj.Data[i].contact_no+"','"+obj.Data.length+"'";
									var res2 = '<tr class="gradeX">'+
												'<td>'+
													'<input type="checkbox" id="'+obj.Data[i].contact_no+'" class="todo-check" onchange="getDataBrdcst('+vrbl+');">'+
													
												'</div></td>'+
												'<td>'+obj.Data[i].contact_name+'</td>'+
												'<td>'+obj.Data[i].contact_no+'</td>'+
											'</tr>';
									$("#resTblContact").append(res);
									$("#tableContactBrdcst").append(res2);
								}
							}
						}
					);
				}
			}
			function getDataBrdcst(x,y,z) {
				if($('#'+y).is(':checked')){
                	$('#broadcast_number').val($("#broadcast_number").val()+x+':'+y+'#');
                }else{
                	$('#broadcast_number').val($("#broadcast_number").val().replace(y+"#",""));
                }
               	$('#tempBrdcst').html('');
                var dataRcv = $('#broadcast_number').val();
               	temp = dataRcv.split("#");
               	for(var i = 0; i < temp.length; i++){
               		data = temp[i].split(":");
               		if(data[0] !=""){
	               		res = "<li>"+data[0]+","+data[1]+"</li>";
	               		$('#tempBrdcst').append(res);
	               	}
               	}
            }
			function sentBroadcast() {
				var data = $('#broadcast_number').val();
				var message = $('#broadcast_message').val();
				temp=data.split("#");
				$.post("arphi_ajax.php",
					{
						broadcast_number : data,
						message : message,
						type : 'broadcast'
					},
					function (data, status){
						if (data == '1'){
							for (var i = 0; i < temp.length; i++){
								data = temp[i].split(":");
								var res = '<tr class="gradeX">'+
											'<td>'+data[0]+'</td>'+
											'<td>'+data[1]+'</td>'+
											'<td>'+message+'</td>'+
											'<td>WEB</td>'+
											'<td>07:20 20/11/2016</td>'+
										'</tr>';
								if(data[0] != ""){
									$("#TableBroadcast").append(res);
								}
							}
						}
					}
				);
				$('#broadcast_number').val('');
				$('#broadcast_message').val('');
				$('.todo-check').removeAttr('checked');
				$('#tempBrdcst').html('');
			}
			function sentSchedule(){
				var contact_name = $('#global_status').val();
				if(contact_name != ''){
					var des_num = $('#schedule_number').val();
					var message = $('#schedule_message').val();
					var date = $('#dateSchedule').val();
					var time = $('#timeSchedule').val();
					$.post("arphi_ajax.php",
						{
							type : 'scheduleMessage',
							des_num : des_num,
							message : message,
							contact_name : contact_name,
							date : date,
							time : time
						},
						function (data, status){
							if (data == '1'){
								alert('Berhasil Dikirim');
								var res = '<tr class="gradeX">'+
											'<td>'+contact_name+'</td>'+
											'<td>'+des_num+'</td>'+
											'<td>'+message+'</td>'+
											'<td>WEB</td>'+
											'<td>'+time+' '+date+'</td>'+
										'</tr>';
								$("#TableSchedule").prepend(res);
								reset();
							}
						}
					);
				}else{
					alert('Maaf no harus terdaftar terlebih dahulu!');
				}
			}
			function sentCredit(){
				var data = $('#creditType').val();
				if(data != ""){
					if($('#typeBank').is(':checked')){
					$.post("arphi_ajax.php",
							{
								type : 'sentCredit',
								id : data
							},
							function (data, status){
								if (data != ''){
									alert('Berhasil Dikirim');
									temp = data.split('#');
									var id = "'"+temp[6]+"','"+temp[5]+"'";
									var res = '<tr class="gradeX">'+
												'<td>'+temp[0]+'</td>'+
												'<td>'+temp[1]+'</td>'+
												'<td>'+temp[3]+'</td>'+
												'<td id="'+temp[5]+'"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" onclick="getConfirmed('+id+')"><i class="'+temp[4]+'"></i> '+temp[2]+'</button></td>'+
											'</tr>';
									$("#TableCredit").prepend(res);
									reset();
								}
							}
						);
					}else{
						alert('Maaf pilih Bank terlebih dahulu!');
					}
				}else{
					alert('Maaf pilih Type Credit terlebih dahulu!');
				}
			}
			function getConfirmed(x,y){
				$.post("arphi_ajax.php",
							{
								type : 'getConfirmed',
								id : x
							}
						);
				$('#'+y).html('<button type="button" class="mb-xs mt-xs mr-xs btn btn-warning"></i>Waiting Response..</button></td>');
			}
			function cekNo(x){
				var des_num = x;
				$.post("arphi_ajax.php",
					{
						type : 'cekNo',
						id : des_num
					},
					function (data, status){
						if (data != ''){
							$('.resContactName').text('To : '+data);
							$('#global_status').val(data);
						}else{
							$('.resContactName').text('Nama belum terdaftar di contact');
							$('#global_status').val('');
						}
					}
				);
			}
			function sent(){
				var contact_name = $('#global_status').val();
				if(contact_name != ''){
					var des_num = $('#destination_number').val();
					var message = $('#message').val();
					$.post("arphi_ajax.php",
						{
							type : 'sentMessage',
							des_num : des_num,
							message : message
						},
						function (data, status){
							if (data != ''){
								alert('Berhasil Dikirim');
								var res = '<tr class="gradeX">'+
											'<td>'+contact_name+'</td>'+
											'<td>'+des_num+'</td>'+
											'<td>'+message+'</td>'+
											'<td>WEB</td>'+
											'<td>08:20 20/11/2016</td>'+
										'</tr>';
								$("#TableSent").prepend(res);
								reset();
							}
						}
					);
				}else{
					alert('Maaf no harus terdaftar terlebih dahulu!');
				}
			}
			function reset(){
				$('#destination_number').val('');
				$('#message').val('');
				$('#global_status').val('');
				$('#schedule_message').val('');
				$('#schedule_number').val('');
				$('.resContactName').text('To : ....');
				$('#typeBank').removeAttr('checked');
			}
		</script>
	</body>
</html>