
            window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.padding = "5px 8px";
    document.getElementById("navbar").style.top = "0px";
    document.getElementById("navbar").style.background = "#000000";



  } else {
    document.getElementById("navbar").style.padding = "20px 10px";
    document.getElementById("navbar").style.top = "25px";
    document.getElementById("navbar").style.background ="transparent";


  }
}

       
