$(document).ready(function(){  
      
    var current_panel = 1;  
      
    var animation_duration = 2500;//スライド時の動きの速さ  
      
    $.timer(6000, function (timer) {  
        //スライド至るまでの動きの速さ  
        switch(current_panel){  
            case 1:  
                $("#slideshow").stop().animate({left: "-960px", top: "0px"}, {easing: 'easeOutBack', duration: animation_duration});//①左に何px 上に何px 移動するか指定  
                current_panel = 2;  
            break;  
            case 2:  
                $("#slideshow").stop().animate({left: "0px", top: "-350px"}, {easing: 'easeOutBack', duration: animation_duration});//②左に何px 上に何px 移動するか指定  
                current_panel = 3;  
            break;  
            case 3://③左に何px 上に何px 移動するか指定  
                $("#slideshow").stop().animate({left: "-960px", top: "-350px"}, {easing: 'easeOutBack', duration: animation_duration});  
                current_panel = 4;  
            break;  
            case 4://④左に何px 上に何px 移動するか指定  
                $("#slideshow").stop().animate({left: "0px", top: "0px"}, {easing: 'easeOutBack', duration: animation_duration});  
                current_panel = 1;  
            break;    
            timer.reset(12000);  
        }  
    });  
      
});  