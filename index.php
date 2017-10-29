<?php 
	include "header.php";
	include "left_panel.php";
	include "section_up.php";
?>
					<div id='page_Dashboard' class="page"  style="display: block;">
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
					<div id='page_Contact' class="page" style="display: none;">
						
					</div>
					<div id="page_Message" class="page" style="display: none;">
					
					</div>
					<div id="page_Inbox" class="page" style="display: none;">
					
					</div>
					<div id="page_Outbox" class="page" style="display: none;">
					
					</div>
					<div id="page_Broadcast" class="page" style="display: none;">
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
												<input type="text" class="form-control" id="broadcast_number" name="broadcast_number">
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
									<tr  id="noDataBrdcst">
										<td>No data</td>
										<td>No data</td>
										<td>No data</td>
										<td>No data</td>
										<td>No data</td>
									</tr>
									</tbody>
								</table>
							</div>
						</section>
						<!-- end: page -->
					</div>
					<div id="page_Schedule" class="page" style="display: none;">
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
					
					</div>
					<div id="page_API" class="page" style="display: none;">
					
					</div>
					<div id="page_Account" class="page" style="display: none;">
						
					</div>
					<div id="page_Support" class="page" style="display: none;">
						
					</div>
					<input type="hidden" id="global_status"> <!--Status nya bisa di pakai smua kondisi-->
					<input type="text" id="page_status_Contact">
					<input type="text" id="page_status_Message">
					<input type="text" id="page_status_Inbox">
					<input type="text" id="page_status_Outbox">
					<input type="text" id="page_status_Broadcast">
					<input type="text" id="page_status_Schedule">
					<input type="text" id="page_status_Credit">
					<input type="text" id="page_status_API">
					<input type="text" id="page_status_Account">
					<input type="text" id="page_status_Support">
					<input type="hidden" id="statTblContact">
					<input type="hidden" id="statTblInbox">
					<input type="hidden" id="statTblOutbox">
					<input type="hidden" id="statTblCredit">
					<input type="text" id="sumCntct">
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
		<script src="assets/javascripts/pages/examples.timeline.js"></script>
		<script src="assets/javascripts/ui-elements/examples.modals.js"></script>
		 
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
		<script src="assets/vendor/jquery-appear/jquery-appear.js"></script> <!--untuk timeline-->
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
	
	

		<script type="text/javascript">
			function loadPage(x,page){
				$('.page').css("display", "none");
	    		$('.menu_class').removeClass('nav-expanded nav-active');
	    		$('#global_status').val('');

				$('#page_'+page).css("display", "block");
    			$('.menu_'+x).addClass('nav-expanded nav-active');
    			$('#head_text').text(page);
    			if($('#page_status_'+page).val() == ''){
				// $('#modalAnim').modal('toggle');
					if(page != 'Broadcast' && page != 'Dashboard' && page != 'Schedule'){
						$("#page_"+page).load("page/page_"+page+".html", function(){
							// $('#modalAnim').modal('hide');
							console.log(page);
						});
					}
					$('#page_status_'+page).val('1');
				}
    			if(x==1){
					tableContact();
				}else if(x==2){
					
				}else if(x==3){
					tableInbox();
				}else if(x==4){
					tableOutbox();
				}else if(x==7){
					tableCredit();
				}
			}
			function tableCredit(){
				if($('#statTblInbox').val() != 1){
					$('#statTblInbox').val(1);
					$.post("arphi_json.php",
						{
							type : 'credit'
						},
						function (data, status){
							if (data != ''){
								var obj = JSON.parse(data);
								var res = "";
								var res2 = "";
								for (var i = 0; i < obj.Data.length; i++) {
									var no = i +1;
									var id = "'"+obj.Data[i].id_credit+"','"+i+"'";
									if(obj.Data[i].status == 'Belum Transfer'){
										var res = '<tr class="gradeX">'+
												'<td>'+obj.Data[i].price_transfer+'</td>'+
												'<td>'+obj.Data[i].credit+'</td>'+
												'<td>'+obj.Data[i].logtime+'</td>'+
												'<td id="'+i+'"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" onclick="getConfirmed('+id+')"><i class="'+obj.Data[i].icon+'"></i> '+obj.Data[i].status+'</button></td>'+
											'</tr>';
									}else{
										var res = '<tr class="gradeX">'+
												'<td>'+obj.Data[i].price_transfer+'</td>'+
												'<td>'+obj.Data[i].credit+'</td>'+
												'<td>'+obj.Data[i].logtime+'</td>'+
												'<td id="'+i+'"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="'+obj.Data[i].icon+'"></i> '+obj.Data[i].status+'</button></td>'+
											'</tr>';
									}
									$("#TableCredit").append(res);
								}
							}
						}
					);
				}
			}
			function tableInbox(){
				if($('#statTblInbox').val() != 1){
					// $('#noDataInbox').html("");
					$('#statTblInbox').val(1);
					$.post("arphi_json.php",
						{
							type : 'inbox'
						},
						function (data, status){
							if (data != ''){
								var obj = JSON.parse(data);
								var res = "";
								var res2 = "";
								for (var i = 0; i < obj.Data.length; i++) {
									var no = i +1;
									var res = '<tr class="gradeX">'+
												'<td>'+obj.Data[i].contact_name+'</td>'+
												'<td>'+obj.Data[i].number+'</td>'+
												'<td>'+obj.Data[i].text_message+'</td>'+
												'<td>'+obj.Data[i].logtime+'</td>'+
											'</tr>';
									$("#TableInbox").append(res);
								}
							}
						}
					);
				}
			}
			function tableOutbox(){
				if($('#statTblOutbox').val() != 1){
					// $('#noDataInbox').html("");
					$('#statTblOutbox').val(1);
					$.post("arphi_json.php",
						{
							type : 'outbox'
						},
						function (data, status){
							if (data != ''){
								var obj = JSON.parse(data);
								var res = "";
								var res2 = "";
								for (var i = 0; i < obj.Data.length; i++) {
									var no = i +1;
									var res = '<tr class="gradeX">'+
												'<td>'+obj.Data[i].contact_name+'</td>'+
												'<td>'+obj.Data[i].no_hp+'</td>'+
												'<td>'+obj.Data[i].text_message+'</td>'+
												'<td>'+obj.Data[i].typesms+'</td>'+
												'<td>'+obj.Data[i].dari+'</td>'+
												'<td>'+obj.Data[i].logtime+'</td>'+
											'</tr>';
									$("#TableOutbox").append(res);
								}
							}
						}
					);
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
							if (data != ''){
								var obj = JSON.parse(data);
								var res = "";
								var res2 = "";
								$('#sumCntct').val(obj.Data.length);
								console.log(obj.Data.length);
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
                	$('#broadcast_number').val($("#broadcast_number").val().replace(x+':'+y+"#",""));
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
									$('#noDataBrdcst').html('');
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
									var id = "'"+temp[5]+"','"+temp[6]+"'";
									var res = '<tr class="gradeX">'+
												'<td>'+temp[0]+'</td>'+
												'<td>'+temp[1]+'</td>'+
												'<td>'+temp[3]+'</td>'+
												'<td id="'+temp[6]+'"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary" onclick="getConfirmed('+id+')"><i class="'+temp[4]+'"></i> '+temp[2]+'</button></td>'+
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
				var des_num = $('#destination_number').val();
				console.log(des_num);
				$.post("arphi_ajax.php",
					{
						id : des_num,
						type : 'cekNo'
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
			function cekContact(){//mengecek apakah contact sudah ada apa belum
				var contact_name = $('#contact_name').val();
				var contact_num = $('#contact_num').val();
				$.post("arphi_ajax.php",
					{
						type : 'cekContact',
						contact_name : contact_name,
						contact_num : contact_num
					},
					function (data, status){
						console.log(data);
						if (data == ''){
							console.log('nyobak');
							$('#createContact').prop('disabled', false);
							$('.resConNum').text('* Belum tedaftar');
						}else{
							$('.resConNum').text('* Maaf No / Nama Sudah terdaftar4');
							$('#createContact').prop('disabled', true);
						}
					}
				);
			}
			function createContact(){
				var contact_name = $('#contact_name').val();
				var contact_num = $('#contact_num').val();
				var no = parseFloat($('#sumCntct').val());
				var sumCntct = parseFloat(no + 1);
				console.log(sumCntct);
				// var new_sumCntct = sumCntct+1;
				$.post("arphi_ajax.php",
					{
						type : 'createContact',
						contact_name : contact_name,
						contact_num : contact_num
					},
					function (data, status){
						console.log(data);
						if (data == 1){
							console.log('Berhasil');
							var res = '<tr class="gradeX">'+
										'<td>'+sumCntct+'</td>'+
										'<td>'+contact_name+'</td>'+
										'<td>'+contact_num+'</td>'+
									'</tr>';
							$('#sumCntct').val(sumCntct);
							$("#resTblContact").append(res);
							reset();
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
			function sentSupport(){
				var type_support = $('#type_support').val();
				var desc = $('#desc_support').val();
				if(type_support != ''){
					$.post("arphi_ajax.php",
						{
							type : 'sentSupport',
							type_support : type_support,
							desc : desc
						},
						function (data, status){
							if (data != '1'){
								alert(type_support);
							}
						}
					);
				}else{
					alert('Maaf type harus dipilih terlebih dahulu!');
				}
			}
			function reset(){
				$('#destination_number').val('');
				$('#message').val('');
				$('#global_status').val('');
				$('#schedule_message').val('');
				$('#schedule_number').val('');
				$('#desc_support').val('');
				$('.resContactName').text('To : ....');
				$('#typeBank').removeAttr('checked');
				$('#contact_name').val('');
				$('#contact_num').val('');
				$('.resConNum').text('');
				$('#creditType').val('');
			}
		</script>
	</body>
</html>