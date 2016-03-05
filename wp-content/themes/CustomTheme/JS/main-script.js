$(document).ready(function(){
  $("#show-content").on("click", function(){
    $(document).scrollTo(document.getElementById('firstSection'), 800);
  })
})

$(document).ready(function(){
  $("#poglej-vec").on("click", function(){
    $(document).scrollTo(document.getElementById('secondSection'), 800);
  })
})

$(document).ready(function(){
  $("#back-to-top").on("click", function(){
    $(document).scrollTo(document.getElementById('logo'), 800);
  })
})