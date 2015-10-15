<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta information -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Title-->
<title>SIT Openhouse 2015</title>
<!-- CSS Stylesheet-->
<?php echo HTML::style('themes/default/assets/css/bootstrap/bootstrap.min.css');?>
<?php echo HTML::style('themes/default/assets/css/bootstrap/bootstrap-themes.css');?>
<?php echo HTML::style('themes/default/assets/css/style.css');?>

<style>
#validate-wizard{
	width:550px;
	margin:auto;
}
.icheckbox_line-blue, .iradio_line-blue{
	background-color: #ADD7F0;	
}

.iradio_line-blue.disabled{
	background-color: #ccc;
}

@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
	#validate-wizard{
		width:290px;
	}
}

</style>

</head>
<body class="full-lg">
<div id="wrapper">

<div id="loading-top">
		<div id="canvas_loading"></div>
		<span>Checking...</span>
</div>

<div id="main">
		<div class="real-border">
				<div class="row">
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
						<div class="col-xs-1"></div>
				</div>
		</div>
		<div class="container">
				<div class="row">
						<div class="col-lg-12">
						
								<div class="account-wall">

									<section class="align-lg-center">
										<div class="site-logo"></div>
										<br>
									</section>

								<?php  echo Form::open(array('url' => 'save', 'class' => 'wizard-step shadow', 'id' => 'validate-wizard')) ?>
												<ul class="align-lg-center" style="display:none">
														<li><a href="#step1" data-toggle="tab">1</a></li>
														<li><a href="#step2" data-toggle="tab">2</a></li>
														<li><a href="#step3" data-toggle="tab">3</a></li>
												</ul>
												<div class="progress progress-stripes progress-sm" style="margin:0">
														<div class="progress-bar" data-color="theme"></div>
												</div>
												<div class="tab-content">
														<div class="tab-pane fade" id="step1" parsley-validate parsley-bind> 
															<h3>ข้อมูลผู้เข้าร่วมกิจกรรม SIT Openhouse 2015</h3><br>
															<div class="form-group row">
																<div class="col-md-6">
																	<label class="control-label">ชื่อ</label>
																	<input type="text" class="form-control" id="fullname" name="name" placeholder="Your full name" parsley-error-message="กรุณากรอกกรอกชื่อ" parsley-required="true">
																</div>
																<div class="col-md-6">
																	<label class="control-label">นามสกุล</label>
																	<input type="text" class="form-control"  name="surname" placeholder="Your last name" parsley-error-message="กรุณากรอกกรอกนามสกุล" parsley-required="true">
																</div>
															</div>
															<div class="form-group row">
																<div class="col-md-6">
																	<label class="control-label">เพศ</label>
																	<select class="selectpicker form-control show-tick" name="sex" parsley-required="true" parsley-error-container="div#study-sex-error" parsley-error-message="กรุณากรอกเลือกเพศ">
																		<option value="1" data-icon="fa fa-male"> ชาย</option>
																		<option value="2" data-icon="fa fa-female"> หญิง </option>
																	</select>
																	<div id="study-sex-error"></div>
																</div>
																<div class="col-md-6">
																	<label>เบอร์โทรศัพท์</label>
																<div class="input-icon"> <i class="fa fa-phone ico"></i>
																	<input class="form-control " type="text" name="mobile" placeholder="Your mobile number" parsley-error-message="กรุณากรอกกรอกเบอร์โทรศัพท์ที่ติดต่อได้" parsley-required="true" parsley-type="phone">
																</div>
																</div>
															</div>
															
															<div class="form-group">
																<label>อีเมล์</label>
																<div class="input-icon"> <i class="fa fa-envelope-o ico"></i>
																	<input class="form-control " type="text" name="email" placeholder="Your email" parsley-error-message="กรุณากรอกกรอกอีเมล์ให้ถูกต้อง" parsley-required="true" parsley-type="email">
																</div>
															</div>
															<div class="form-group">
																<label>ที่อยู่</label>
																	<textarea class="form-control" data-height="auto" name="address" placeholder="Your address"></textarea>
																</div>
															<div class="form-group">
																<label>โรงเรียน</label>
																<select  class="selectpicker form-control  show-tick" name="school" data-size="10" data-live-search="true" title="Your school" parsley-error-container="div#select-school-error" parsley-error-message="กรุณากรอกเลือกโรงเรียนที่ศึกษาอยู่" parsley-required="true">
																	<?php foreach ($school as $key => $item): ?>
																	<option value="<?php echo $key; ?>"><?php echo object_get($item, 'school_name'); ?></option>
																	
																	<?php endforeach; ?>					
																</select>
																<div id="select-school-error"></div>
															</div>
															

															<div class="form-group row">
																<div class="col-md-6">
																	<label>ระดับชั้น</label>
																	<select  class="selectpicker form-control show-tick" parsley-required="true" parsley-error-container="div#select-com-error" name="school_grade" parsley-error-message="กรุณากรอกเลือกระดับชั้น">
																		<option value="">เลือกระดับชั้นที่กำลังศึกษาอยู่</option>
																		<option value="1"> ม.1 </option>
																		<option value="2"> ม.2 </option>
																		<option value="3"> ม.3 </option>
																		<option value="4"> ม.4 </option>
																		<option value="5"> ม.5 </option>
																		<option value="6"> ม.6 </option>						
																	</select>
																	<div id="select-com-error"></div>
																</div>
																<div class="col-md-6">
																	<label>แผนการเรียน</label>
																	<select class="selectpicker form-control show-tick" name="study_plan" parsley-required="true" parsley-error-container="div#study-plan-error" parsley-error-message="กรุณากรอกเลือกแผนการเรียนให้ถุกต้อง">
																		<option value="">เลือกแผนการเรียนที่กำลังศึกษาอยู่</option>
																		<option value="99">ยังไม่ได้เลือกแผนการเรียน่</option>
																		<option value="1"> วิทย์ - คณิต </option>
																		<option value="2"> ศิลป์ - ภาษา </option>
																		<option value="2"> ศิลป์ - คำนวณ </option>
																	</select>
																	<div id="study-plan-error"></div>
																</div>
															</div>




														</div>
														<div class="tab-pane fade" id="step2" parsley-validate parsley-bind>
																<h3>กิจกรรมใน SIT Open House 2015</h3><br>
																
																<div class="form-group">
																	<lable class="control-label">การแสดงผลงานโครงงานนักศึกษาชั้นปีที่4 (Senior Project)</lable>
																	<ul class="iCheck"  data-style="line" data-color="blue" id="g-senior-project">
																		<li>
																			<input type="radio" name="senior_project" value="1">
																			<label>รอบที่ 1 09.30 - 10.30</label>
																		</li>
																		<li>
																			<input type="radio" name="senior_project" value="2">
																			<label>รอบที่ 2 10.30 - 11.30</label>
																		</li>	
																		<li>
																			<input type="radio" name="senior_project" value="3">
																			<label>รอบที่ 3 13.30 - 14.30</label>
																		</li>	
																		<li>
																			<input type="radio" name="senior_project" value="4">
																			<label>รอบที่ 4 14.30 - 15.30</label>
																		</li>										
																	</ul>
																</div>
																<div class="form-group">
																	<lable class="control-label">Workshop ความรู้ทางด้านไอที</lable>
																	<ul class="iCheck"  data-style="line" data-color="blue" id="g-workshop">
																		<li>
																			<input type="radio" name="workshop_1" value="11">
																			<label>ห้องที่ 1 รอบที่ 1 09.30 - 12.00</label>
																		</li>
																		<li>
																			<input type="radio" name="workshop_1" value="12">
																			<label>ห้องที่ 1 รอบที่ 2 13.30 - 16.30</label>
																		</li>	
																		<li>
																			<input type="radio" name="workshop_2" value="21">
																			<label>ห้องที่ 2 รอบที่ 1 09.30 - 11.30</label>
																		</li>	
																		<li>
																			<input type="radio" name="workshop_2" value="22">
																			<label>ห้องที่ 2 รอบที่ 2 13.30 - 16.30</label>
																		</li>										
																	</ul>
																	
																</div>
																<div class="form-group">
																	<lable class="control-label">เสวนาเพื่อการศึกษาต่อในหลักสูตร</lable>
																	<ul class="iCheck"  data-style="line" data-color="blue" id="g-saminar">
																		<li>
																			<input type="radio" name="seminar" value="1">
																			<label>รอบที่ 1 11.30 - 12.00</label>
																		</li>
																		<li>
																			<input type="radio" name="seminar" value="2">
																			<label>รอบที่ 2 15.30 - 16.30</label>
																		</li>	
																											
																	</ul>
																	
																</div>
																
														</div>
														<div class="tab-pane fade align-lg-center" id="step3">
																<br><h3>ขอบคุณที่ให้ความสนใจเข้าร่วมกิจกรรม นะคะ  <span></span> .....</h3><br>
																<span> ประกาศรายชื่อผู้มีสิทธิ์เข้าร่วมกิจกรรมภายในวันที่ 10 พฤศจิกายน 2558</span><br>&nbsp;<br>&nbsp;
														</div>
														
														<footer class="row">
															<div class="col-sm-12">
																	<section class="wizard">
																			<button type="button"  class="btn  btn-default previous pull-left"> <i class="fa fa-chevron-left"></i></button>
																			<button type="button"  class="btn btn-primary next pull-right">Next </button>
																	</section>
															</div>
														</footer>
												</div>
										<?php echo Form::close(); ?>
									

								</div>	
								<!-- //account-wall-->
								
						</div>
						<!-- //col-sm-6 col-md-4 col-md-offset-4-->
				</div>
				<!-- //row-->
		</div>
		<!-- //container-->
		
</div>
<!-- //main-->

		
</div>

<?php echo HTML::script('themes/default/assets/js/jquery.min.js');?>
<?php echo HTML::script('themes/default/assets/js/jquery.ui.min.js');?>
<?php echo HTML::script('themes/default/assets/plugins/bootstrap/bootstrap.min.js');?>

<!-- Modernizr Library For HTML5 And CSS3 -->
<?php echo HTML::script('themes/default/assets/js/modernizr/modernizr.js');?>

<!-- Library 10+ Form plugins-->
<?php echo HTML::script('themes/default/assets/plugins/form/form.js');?>

<!-- Library  5+ plugins for bootstrap -->
<?php echo HTML::script('themes/default/assets/plugins/pluginsForBS/pluginsForBS.js');?>

<!-- Library 10+ miscellaneous plugins -->
<?php echo HTML::script('themes/default/assets/plugins/miscellaneous/miscellaneous.js');?>

<!-- Library Themes Customize-->
<?php echo HTML::script('themes/default/assets/js/caplet.custom.js');?>
<script type="text/javascript">
$(document).ready(function() {
		   //Login animation to center 
			function toCenter(){
					var mainH=$("#main").outerHeight();
					var accountH=$(".account-wall").outerHeight();
					var marginT=(mainH-accountH)/2;
						   if(marginT>30){
							   $(".account-wall").css("margin-top",marginT-15);
							}else{
								$(".account-wall").css("margin-top",30);
							}
				}
				var toResize;
				$(window).resize(function(e) {
					clearTimeout(toResize);
					toResize = setTimeout(toCenter(), 500);
				});
				
			//Canvas Loading
			  var throbber = new Throbber({  size: 32, padding: 17,  strokewidth: 2.8,  lines: 12, rotationspeed: 0, fps: 15 });
			  throbber.appendTo(document.getElementById('canvas_loading'));
			  throbber.start();
			 

			 $('input').on('ifChecked', function(event){
  				var name = event.target.name;	
  				var value = event.target.value;
  				var id = event.target.value;

  				if(name == 'senior_project' && (value == 1 || value == 2 )){
  					//disable workshop 1
  					$("input[name^=workshop]").removeAttr("disabled");
  					$("input[name^=workshop]").filter("[value=11],[value=21]").removeAttr("checked").attr("disabled","");

  				}else if(name == 'senior_project' && (value == 3 || value == 4 )){
					$("input[name^=workshop]").removeAttr("disabled");
					$("input[name^=workshop]").filter("[value=12],[value=22]").removeAttr("checked").attr("disabled","");

  				}else if(name == 'workshop_1' && value == 11){
  					$("input[name^=workshop]").filter("[value=12],[value=21]").removeAttr("checked").attr("disabled","");
  				}else if(name == 'workshop_1' && value == 12){
  					$("input[name^=workshop]").filter("[value=11],[value=22]").removeAttr("checked").attr("disabled","");
  				}else if(name == 'workshop_2' && value == 21){
  					$("input[name^=workshop]").filter("[value=11],[value=22]").removeAttr("checked").attr("disabled","");
  				}else if(name == 'workshop_2' && value == 22){
  					$("input[name^=workshop]").filter("[value=12],[value=21]").removeAttr("checked").attr("disabled","");
  				}

  				$('input').iCheck('update');
			});
			


			$('#validate-wizard').bootstrapWizard({
					tabClass:"nav-wizard",
					onNext: function(tab, navigation, index) {
									var content=$('#step'+index);
									if(typeof  content.attr("parsley-validate") != 'undefined'){
										var $valid = content.parsley( 'validate' );
										
										if(index == 1){
											var study_plan = $("select[name=study_plan]").val();
											var school_grade = $("select[name=school_grade]").val();
											
											if(school_grade >= 4 && study_plan == 99 ){
												$valid = false;
												$("div#study-plan-error").html("<ul class=\"parsley-error-list\"><li class=\"required\" style=\"display: list-item;\">กรุณาเลือกแผนการเรียน.</li></ul>");

											}else if( school_grade <= 3 && school_grade != 0 && study_plan != 99){
												$valid = false;
												$("div#study-plan-error").html("<ul class=\"parsley-error-list\"><li class=\"required\" style=\"display: list-item;\">กรุณาเลือกแผนการเรียน.</li></ul>");
											}
							
										}
										if(!$valid){
											return false;
										}
									};
									
					// Set the name for the next tab
					$('#step3 h3').find("span").html($('#fullname').val());
					},
					onTabClick: function(tab, navigation, index) {
									$.notific8('Please click <strong>next button</strong> to wizard next step!! ',{ life:5000, theme:"danger" ,heading:" Wizard Tip :); "});
									return false;
					},
					onTabShow: function(tab, navigation, index) {
									tab.prevAll().addClass('completed');
									tab.nextAll().removeClass('completed');
									if(tab.hasClass("active")){
													tab.removeClass('completed');
									}
									var $total = navigation.find('li').length;
									var $current = index+1;
									var $percent = ($current/$total) * 100;
									$('#validate-wizard').find('.progress-bar').css({width:$percent+'%'});
									$('#validate-wizard').find('.wizard-status span').html($current+" / "+$total);
									
									toCenter();
									
									var main=$("#main");
									//scroll to top
									main.animate({
										scrollTop: 0
									}, 500);
									if($percent==100){
										main.addClass("slideDown");
										//setTimeout(function () { main.addClass("slideDown") }, 100);
										//setTimeout(function () { main.removeClass("slideDown") }, 3000);
										//setTimeout( "window.location.href='login.html'", 3500 );

										$.ajax({
                							url: $("#validate-wizard").attr("action"),
                							dataType: 'json',
                							type: 'post',
                							data: $("#validate-wizard").serialize(),
                							success: function( data ){
                    							if(data['status'] == 200){
                    								main.removeClass("slideDown");
                    								setTimeout( "window.location.href='http://www.sit.kmutt.ac.th/openhouse'", 1000 );
                    								
                    							}
							                },
							                error: function( jqXhr, textStatus, errorThrown ){
							                    console.log( errorThrown );
							                }
							            });
									}
									
					}
			});


});
</script>
</body>
</html>