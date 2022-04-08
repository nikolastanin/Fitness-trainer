
function log(txt) {
    $("#log").html("location : <b>" + txt + "</b> px")
  }
  let item = $('#content');
let width = item.width()/2;
$(function() {
    var eTop = item.offset().top; //get the offset top of the element
    log(eTop - $(window).scrollTop()); //position of the ele w.r.t window

    $(window).scroll(function() { //when window is scrolled
      log(eTop - $(window).scrollTop());
      if(eTop-$(window).scrollTop()-width<=0){
          console.log('radi');
          item.addClass('animated');
          item.removeClass('nonanimated');
      }
    });
    
  });
     


  //version 2
  //TODO: https://gomakethings.com/how-to-test-if-an-element-is-in-the-viewport-with-vanilla-javascript/
  //TODO : https://developer.mozilla.org/en-US/docs/Web/API/Element/getBoundingClientRect
