-$('input').focusin(function(){

  $(this).perent('div').addClass("border-input");
})

-$('input').focusout(function(){

  $(this).parent('div').removeClass("border-input");
})
