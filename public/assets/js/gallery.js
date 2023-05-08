$(window).load(function() {
    function get_x(e){
    	return e.pageX;
    }
    function get_y(e){
    	return e.pageY;
    }
    
    var x,y;
    var t = [];
    var ID = [];
    var holder_str = '.pagin';
    var holder = $(holder_str);
    
    var totalW = 0;
    holder.find('>ul>li').each(function (){
        totalW += $(this).outerWidth(true);
    });  
    
    function scrollGallery(th){     
        var delta = -4;
        
        var parW = $(th).parent().width();
        var parH = $(th).parent().height();
        var w = $(th).width();
        var h = $(th).height(); 
        
        if (x < windowW()*.5) {delta *= -1;}
        t[$(th).index()] += delta;
        
        if (t[$(th).index()] > 0) t[$(th).index()] = 0;
        if (t[$(th).index()] < parW-w) t[$(th).index()] = parW-w;
            
        $(th).stop().animate({'left': t[$(th).index()]},600,'easeOutExpo');
    }
    
    holder.find('>ul')
    .css({'position':'absolute','width':totalW})
    .each(function(ind,el){
        t.push(0); 
    })
    .mousemove(function (e) {
        x = get_x(e);
        y = get_y(e);
    })
    .hover(
        function(e){       
           var _this = this; 
           ID.push(setInterval(function () {scrollGallery(_this);},33));      
        },
        function(e){
            for (var i=0;i<ID.length;i++){clearInterval(ID[i]);}
        }
    )
    ID.push(setInterval(function () {scrollGallery(holder.find('>ul'));},0));
    clearInterval(ID[0])
    
    $(window).resize(function (){
        var _w = windowW()
        if (windowW() > totalW) {_w = totalW;}
        holder.css('width',_w);
        scrollGallery(holder.children('ul'));     
    });
});
