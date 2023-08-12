jQuery(document).ready(function ($) { 
    
    var controller = new ScrollMagic.Controller();
        var tween = TweenMax.to("#phone", 1, {transform: "translate(0px, -150px) rotate(-90deg)", ease: Linear.easeNone});
        var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 300})
            .setTween(tween)
            .addIndicators() 
            .addTo(controller);

    var controller2 = new ScrollMagic.Controller();
        var twbtn = TweenMax.to("#btn-phone", 1, {transform: "translate(0px, -300px)", opacity: "1"});
        var scencebtn = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 300})
            .setTween(twbtn)
            .addIndicators() 
            .addTo(controller2);

    var controller3 = new ScrollMagic.Controller();
        var img = TweenMax.to("#img", 1, {transform: "translate(400px, 0px)", disblay: "block"});
        var scimage = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 300})
            .setTween(img)
            .addIndicators() 
            .addTo(controller3);

    var controller4 = new ScrollMagic.Controller();
        var video = TweenMax.to("#video", 1, {transform: "translate(0px, 0px)"});
        var scvideo = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 300})
            .setTween(video)
            .addIndicators() 
            .addTo(controller4);

});