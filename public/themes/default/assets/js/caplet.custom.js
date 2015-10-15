    $(function() {
			   
		//////////     MOBILE CHECK    //////////   
		var iOS = /(iPad|iPhone|iPod)/g.test( navigator.userAgent );
		var android = /mobile|android/i.test (navigator.userAgent);
		
		if(iOS || android){
			$("html").addClass("isMobile");
			if(iOS) { $(".form-control").css("-webkit-appearance","caret"); }
			$("select.input-sm,select.input-lg ").css("line-height","1.3");
		 }
		 
		 
		//////////     CAPLET COLOR    //////////
		var cepletColor=({ 
			"primary":"#0090d9",
			"info":"#B5D1D8",
			"success":"#2ECC71",
			"warning":"#FFCC33",
			"danger":"#E15258",
			"inverse":"#62707D",
			"theme":"#f35958",
			"theme-inverse":"#0aa699",
			"palevioletred":"#372b32" ,
			"green":"#99CC00",
			"lightseagreen":"#1ABC9B",
			"purple":"#736086",
			"darkorange":"#f9ba46",
			"pink":"#d13a7a"
		});
		$.inColor= function(value, obj) {
			var foundVal;
				$.each(obj, function(key, val) {
					if (value === key) {
						foundVal =  val;
						return;
					}
				});
			return foundVal;
		};
		$.fillColor= function(obj) {
			var inColor=$.inColor(obj.data("color") || obj.data("toolscolor") || obj.data("counter-color") , cepletColor);
			var codeColor= inColor || obj.data("color") || obj.data("toolscolor") || obj.data("counter-color") ;
			return codeColor;
		};
		$.rgbaColor=function( hex, opacity) {
		    var bigint = parseInt(hex.replace("#",""), 16),
				r = (bigint >> 16) & 255,
				g = (bigint >> 8) & 255,
				b = bigint & 255;
				if(opacity || opacity<=1){
		    			return "rgba("+r + "," + g + "," + b+","+ ( opacity || 1 )+")";
				}else{
					return "rgb("+r + "," + g + "," + b+")";
				}
		}
		
		var capletOverlay=$('<div id="caplet-overlay" />');
		$.overlay=function(opacity){
			capletOverlay.appendTo("#wrapper");
			capletOverlay.fadeTo( "slow" , opacity || 0.2 );
		}
		$.clearOverlay=function(){
			capletOverlay.fadeTo( "slow" , 0 ,function(){
				capletOverlay.remove();
			});
		}
		



		
		
		
		
		
		
		//////////     TEXTAREA  AUTO SIZE    //////////
		$('textarea[data-height="auto"]').autosize();
		 $(".widget-write-post textarea").limit({  limit: 20 });
		 
		//////////     SELETE PICKER    //////////
		$('.selectpicker').selectpicker();
		
		//////////     INPUT MAXLENGTH    //////////
		$("input[maxlength] , textarea[maxlength] ").each(function() {
			$(this).maxlength({ bornIn:"#main" }); 
		});
		

		

		
		//////////     TAB NEXT    //////////
		var $tabs = $('.tabbable li');
		$('#prevtab').on('click', function() {
			$tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
		});
		$('#nexttab').on('click', function() {
			$tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
		});
		
		
		$('#flot_view a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})



	

		//////////     PROGRESS BAR      //////////
		$('.progress-tooltip .progress-bar').progressbar({ display_text: 'tooltip' });
		$('.progress-bar').progressbar();
		



		//////////     HORIZONTAL FORM  AUTO GENERENT COLUMN       //////////
		$(".form-horizontal").each(function() {
			var form=$(this) ,data=$(this).data(), colClass= "col-"+( data.col || "md" ), coldiv="" ,
			colOffset=colClass+"-offset-", labelClass=colClass +"-"+( data.collabel || "2" );
			 if(data.collabel){
				 coldiv=12-parseInt(data.collabel);
			}
			var divClass=colClass +"-"+( coldiv || "10" );
			$(this).find(".form-group").each(function(i) {
				$div=$(this).find("div").eq(0);
				$label=$(this).find("label.control-label");
				if($(this).hasClass("offset")){
					$div.addClass(colOffset+(data.collabel || "2"));
				}
				 if(data.alignlabel){
					 $label.css("text-align",data.alignlabel);
				}
				 if(data.label){
					 form.addClass('labelcustomize');
					 $text=$label.html();
					 $label.html("").append('<span class="'+data.label+'">'+$text+'</span>');
					 $label.find("span.icon").css({"border-color": data.colorlabel || "#EEE" });
				}
				if(!$(this).hasClass("none")){
					$label.addClass(labelClass);
					$div.addClass(divClass);
				}
			});
			if(data.label=="icon"){
				form.append('<div class="icon '+labelClass+' '+data.alignlabel+'" />')
				form.find("div.icon").css({"border-color": data.colorlabel || "#EEE" });
			}
		});



		//////////     ICHECK     //////////
		  var createiCheck = (function() {
		  $('.iCheck').each(function(i) {
				var  data=$(this).data() , 
				 input=$(this).find("input") , 
				 li=$(this).find("li") ,
				 index="cp"+i , 
				 insert_text,
				 iCheckColor = [ "black", "red","green","blue","aero","grey","orange","yellow","pink","purple"],
				 callCheck=data.style || "flat";
			 if(data.color && data.style !=="polaris" && data.style !=="futurico" ){
					hasColor= jQuery.inArray(data.color, iCheckColor);
					if(hasColor !=-1 && hasColor < iCheckColor.length){
						callCheck=callCheck+"-"+data.color;
					}
			}
			input.each(function(i) {
				var self = $(this), label=$(this).next(), label_text=label.html();
				self.attr("id","iCheck-"+index+"-"+i);
				if(data.style=="line"){
					insert_text='<div class="icheck_line-icon"></div><span>'+label_text+'</span>';
					label.remove();
					self.iCheck({ checkboxClass: 'icheckbox_'+callCheck, radioClass: 'iradio_'+callCheck, insert:insert_text  });
				}else{
					label.attr("for","iCheck-"+index+"-"+i);
				}
			});
			if(data.style!=="line"){
				input.iCheck({ checkboxClass: 'icheckbox_'+callCheck, radioClass: 'iradio_'+callCheck });
			}else{
				li.addClass("line");
			}
		  });
		});
		createiCheck();
	
		  $('.iCheckColor li').click(function() {
		    var self = $(this);
		    if (!self.hasClass('active')) {
			 self.siblings().removeClass('active');
			 var color = self.attr('class');
			$('.iCheck').each(function(i) {
				$(this).data("color",color)		  
			});
			$('.iCheck input').iCheck('destroy');
				createiCheck();
				self.addClass('active');
		    };
		  });
	
		 $('.ios-switch .switch').each(function(i) {
				$(this).addClass("ios");
		});
		$('.ios').bootstrapSwitch('setOnLabel', '');
		$('.ios').bootstrapSwitch('setOffLabel', '');
	
	
		//////////     ICHECK     //////////
		$(".ios-switch input:checkbox").change(function(){
			var targetLabel=$(this).parents('li').find("label span")		;	
			if( $(this).is(':checked')){
				targetLabel.text("ON");
			}else{
				targetLabel.text("OFF");
			}
		});	  
	
		//////////     AJAX RECALL ICHECK     //////////
		$(".load-ajax-form").on('click', function () {
			$.ajax({
			    url: "data/icheckForm.php",
			    cache: false,
			    type: "POST",
			    dataType: 'html',
			    success: function (data) {
				    $("#showForm").html(data);
				    createiCheck();
			    }
			});
		});

	
	



		



    });
    
    