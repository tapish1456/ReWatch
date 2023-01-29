//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function resizeIFrameToFitContent( iFrame ) {

  iFrame.width  = iFrame.contentWindow.document.body.scrollWidth;
  iFrame.height = iFrame.contentWindow.document.body.scrollHeight;
}

window.addEventListener('DOMContentLoaded', function(e) {

  var iFrame = document.getElementById( 'iFrame1' );
  resizeIFrameToFitContent( iFrame );

  // or, to resize all iframes:
  var iframes = document.querySelectorAll("iframe");
  for( var i = 0; i < iframes.length; i++) {
      resizeIFrameToFitContent( iframes[i] );
  }
} );

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}