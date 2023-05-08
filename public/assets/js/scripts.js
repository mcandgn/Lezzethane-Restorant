$(window).load(function(){
    
    // ieCheck
    var ie = false;
    var aniButtonDuration = 350;
	 var defMh = 0, h = 0;
	 defMh = parseInt($('body').css('minHeight'));
     var MSIE = false;

     MSIE = ($.browser.msie) && ($.browser.version <= 8);
    
    if($.browser.msie && $.browser.version<9)
    {
        aniButtonDuration = 0;
        ie = true;
    }
    
    
    
   // start gallery /// 
    $('.gall_spinner').hide();
    setTimeout(function(){
        $('#bgStretch').bgStretch({
           align:'leftTop',
           autoplay: false,
           navs:$('.pagin').navs({})
        })
        .sImg({
            sleep: 1000,
            spinner:$('<div class="spinner"></div>').css({opacity:0}).stop().hide(3000)
        });
        img=0;
        var num=$('.pagin li').length-1;
        $('.arrowL>a').click(function(){
            if(bgstretch_animation_stopped==1) {
                bgstretch_animation_stopped=0;
                img=img-1;
                if (img<0) img=img+num+1;
                $.when($('#bgStretch img')).then(function(){
                    $('.pagin li a').eq(img).trigger('mouseenter').click();
                })
                return false;
            }
        });
        $('.arrowR>a').click(function(){
            if(bgstretch_animation_stopped==1) {
                bgstretch_animation_stopped=0;
                img=img+1;
                if (img>num) img=img-num-1;
                $.when($('#bgStretch img')).then(function(){
                    $('.pagin li a').eq(img).trigger('mouseenter').click();
                })
                return false;
                
            }
        });
    },0);


    $('.pagin>ul>li>a').hover(
        function(){
            if (!$(this).parent().hasClass('active'))
                if (!MSIE){
                    $(this).children('>span').stop().animate({marginTop:'-5px'},500,'easeOutExpo');  
                } else {
                    $(this).children('>span').stop().hide();
                }  
        },
        function(){
            if (!$(this).parent().hasClass('active'))
                if (!MSIE){
                    $(this).children('>span').stop().animate({marginTop:'-144px'},700,'easeOutCubic');
                }else {
                    $(this).children('>span').stop().show();
                }
        }
    );




        
    $('.arrowL>a, .arrowR>a')
	.sprites({
		method:'simple',
		duration:400,
		easing:'easeOutQuint',
		hover:true
	})
        

	 
	 
	 //follow-icons-------------	 
   $('.follow-icon .img_act').css({opacity:0})
	$('.follow-icon a').hover(function(){
		$(this).find('.img_act').stop().animate({opacity:1})
      $(this).find('p').stop().animate({color:'#000'}, 550, 'easeOutSine')						 
	}, function(){
		$(this).find('.img_act').stop().animate({opacity:0})
      $(this).find('p').stop().animate({color:'#1E1E1E'}, 550, 'easeOutSine')							 
	})
	

     // scroller
    $('.scroll')
        .uScroll({
            axis:'y'
            ,lay:'outside'
            ,duration:600
            ,easing:'easeInOutSine'
            ,step:124
            ,mousewheel:true
        })
        
     $('.scroll_btn_down').css({opacity:'1'})
     $('.scroll_btn_up').css({opacity:'1'})
    $('.scroll_btn_up').hover(function()
    {
        $(this).stop().animate({opacity:'0.5'}, 300,'easeOutCubic');             
    }, function(){
        $(this).stop().animate({opacity:'1'}, 300,'easeOutCubic');               
    })
    $('.scroll_btn_down').hover(function()
    {
        $(this).stop().animate({opacity:'0.5'}, 300,'easeOutCubic');             
    }, function(){
        $(this).stop().animate({opacity:'1'}, 300,'easeOutCubic');               
    })
     // end scroller


      $("a[data-gal^='prettyPhoto']").prettyPhoto({
        deeplinking: false
      });
   
    // lightbox image
    $(".lightbox-image").append("<span></span>");
    
    $(".lightbox-image").hover(function(){
        $(this).find("img").stop().animate({opacity:0.7}, "normal")
    }, function(){
        $(this).find("img").stop().animate({opacity:1}, "normal")
    });
    //end fancybox

    $('.img_border, .img_border2, .img_border3').css({opacity:0});
    $('.img_over').hover(
        function(){
            $(this).find(".img_border, .img_border2, .img_border3").stop().fadeTo(500, 0.9)
        },
        function(){
            $(this).find(".img_border, .img_border2, .img_border3").stop().fadeTo(500, 0)
        }
    )


    /////////////////////////////////////////////////////////////////////////// 
    //                           content switch                              //
    ///////////////////////////////////////////////////////////////////////////
    
    var content=$('#content'),
        nav=$('.menu'),
        white_bg=$('.white_bg'),
        gallery=$('.gallery'),
        line_footer=$('.line_footer'),
        splash_arrows=$('.arrowL, .arrowR'),
        splash = $('#splash');
    
    $('ul#menu').superfish({
      delay:       700,
      animation:   {height:'show'},
      speed:       300,
      autoArrows:  false,
      dropShadows: false
    });

    $('.submenu_1 a b').css({width:'0px'})
    $('.submenu_1 a').hover(function()
    {
        $(this).find('b').css({width:'0px', left:'0px'}).stop().animate({width:'100%'}, 300,'easeOutCubic');			   
    }, function(){
        $(this).find('b').stop().animate({width:'0px', left:'119px'}, 300,'easeOutCubic');						   
    })
    
    
    nav.navs({
		useHash:true,
        defHash:'#!/',
		hoverIn:function(li){
		   	  $('>a ',li).css({color:'#bcbcbc'});
		   	  $('> a > span ',li).css({display:'block'}).stop().animate({opacity:1}, aniButtonDuration, 'easeOutCubic');
		},
		hoverOut:function(li){
		  if (!li.hasClass('with_ul') || !li.hasClass('sfHover')) {
              $('>a ',li).css({color:'#383c3f'});
		   	  $('> a > span ',li).stop().animate({opacity:0}, aniButtonDuration, 'easeOutCubic', function(){
		   	      $(this).css({display:'none'});
		   	  });
          }
		}				
    })
    
	 
	 $(window).resize(function (){
		 if (h < defMh) {h = defMh}
		 $('body').stop().animate({'minHeight':h})
		});
		
		
     content.tabs({
		preFu:function(_)
        {
            _.li.css({display:'none', top:'620px'});
            _.li.each(function(){
                if($(this).height() < 590){
                    $(this).height(590);
                } else {
                    $(this).height($(this).height()+30)
                }
            })
		}
		,actFu:function(_)
        {

            if(_.pren == undefined){
                aniDelay = 250;
            } else {
                if(_.n == -1 && _.pren == -1){
                    aniDelay = 250;
                } else {
                    aniDelay = 450;
                }
            }
            
            if(_.n == -1){
                content.stop().delay(aniDelay).animate({height:'200px'}, 650,'easeOutCubic');
                line_footer.stop().delay(0).animate({opacity:0}, 350,'easeOutCubic');
                splash.css({display:'block'}).stop().delay(aniDelay).animate({top:'0px'}, 650, 'easeOutQuint');
                    h=200
					 $(window).trigger('resize');
            } else {
                content.stop().delay(aniDelay).animate({height:_.curr.height()+30}, 650,'easeOutCubic');
                line_footer.stop().delay(aniDelay).animate({opacity:1}, 450,'easeOutCubic');
                splash.stop().animate({top:'620px'}, 350, 'easeInCubic', function(){
                    $(this).css({display:'none'});
                });
            }


            if(_.n < 0){
                     white_bg.stop().delay(0).animate({opacity:0}, 650, 'easeOutQuint');
                     gallery.stop().delay(0).animate({marginBottom:0}, 650, 'easeOutQuint');
                     
                     splash_arrows.stop().delay(0).animate({top:'45%'}, 650, 'easeOutQuint');
                 } else {
                    white_bg.stop().delay(0).animate({opacity:1}, 650, 'easeOutQuint');
                    
                    gallery.stop().delay(0).animate({marginBottom:-145}, 650, 'easeOutQuint');
                    splash_arrows.stop().delay(0).animate({top:'-20%'}, 650, 'easeOutQuint');
                 }
            
        	if(_.curr){
        	   h = parseInt( _.curr.outerHeight(true)+370);
				$(window).trigger('resize');
				_.curr
					.stop()
					.delay(aniDelay).css({display:'block', top:content.height()}).animate({top:'0px'}, 650,'easeOutCubic');
            }

            
			if(_.prev){
			    _.prev 
    				.stop()
    				.animate({top:content.height()}, 350,'easeInSine', function(){
    				     $(this).css({display:'none'});
    			     });
            }
           
        }
		
	})
       
    nav.navs(function(n, _)
    {
		content.tabs(n);
	})
    
 
})