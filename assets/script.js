"use strict";

$(document).ready(function() {
  $('[data-toggle="popover"]').popover();
});


$(document).ready(function() {
  $("#myModal").modal('show');
  var data = 'Created by Abdul Rachmat - 081342487857';
  console.log(data);
});


// Set the date we're counting down to
var countDownDate = new Date("Mar 16, 2023 19:00:00").getTime();
// Update the count down every 1 second
var x = setInterval(function() {
  // Get today's date and time
  var now = new Date().getTime();
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  // Display the result in the element with id="demo"
  document.getElementById("hari").innerHTML = days;
  document.getElementById("jam").innerHTML = hours;
  document.getElementById("menit").innerHTML = minutes;
  document.getElementById("detik").innerHTML = seconds;
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("hari").innerHTML = "00";
    document.getElementById("jam").innerHTML = "00";
    document.getElementById("menit").innerHTML = "00";
    document.getElementById("detik").innerHTML = "00";
  }
}, 1000);


let modalId = $('#image-gallery');
$(document)
  .ready(function() {
    loadGallery(true, 'a.thumbnail');
    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }
    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */
    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;
      $('#show-next-image, #show-previous-image')
        .click(function() {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }
          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }
      if (setIDs == true) {
        $('[data-image-id]')
          .each(function() {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function() {
          updateGallery($(this));
        });
    }
  });
// build key actions
$(document)
  .keydown(function(e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;
      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;
      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });


$(document).on("click", "#tutupWelcome", function() {
  var myAudio = document.getElementById("myAudio");
  var isPlaying = false;

  function togglePlay() {
    isPlaying ? myAudio.pause() : myAudio.play();
  };
  myAudio.onplaying = function() {
    isPlaying = true;
  };
  myAudio.onpause = function() {
    isPlaying = false;
  };
  myAudio.play();
})


$(document).ready(function() {
  // Add scrollspy to <body>
  $('body').scrollspy({
    target: ".navbar",
    offset: 50
  });
  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function() {
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


$(function() {
  $("#emosi tr").each(function() {
    var data = $(this).find("#emot_data").val();
    if (data == 'senang') {
      $(this).closest('tr').find('#emot_personal').removeClass('senang');
      $(this).closest('tr').find('#emot_personal').addClass('senang');
    } else if (data == 'sedih') {
      $(this).closest('tr').find('#emot_personal').removeClass('senang');
      $(this).closest('tr').find('#emot_personal').addClass('sedih');
    } else if (data == 'marah') {
      $(this).closest('tr').find('#emot_personal').removeClass('senang');
      $(this).closest('tr').find('#emot_personal').addClass('marah');
    } else if (data == 'terluka') {
      $(this).closest('tr').find('#emot_personal').removeClass('senang');
      $(this).closest('tr').find('#emot_personal').addClass('terluka');
    } else if (data == 'love') {
      $(this).closest('tr').find('#emot_personal').removeClass('senang');
      $(this).closest('tr').find('#emot_personal').addClass('love');
    } else if (data == 'cemburu') {
      $(this).closest('tr').find('#emot_personal').removeClass('senang');
      $(this).closest('tr').find('#emot_personal').addClass('cemburu');
    }
  })
})


$(function() {
  $("#emosi tr").each(function() {
    var data = $(this).find("#hadir_status").val();
    if (data == 'Hadir') {
      $(this).closest('tr').find('#hadir_status').css({
        'background': '#0ec30359'
      })
      $(this).closest('tr').find('#hadir_status').val('Berkenan Hadir');
    } else if (data == 'Tidak Hadir') {
      $(this).closest('tr').find('#hadir_status').css({
        'background': '#ffc1c1'
      })
      $(this).closest('tr').find('#hadir_status').val('Maaf Tidak Dapat Hadir');
    } else if (data == '50:50') {
      $(this).closest('tr').find('#hadir_status').css({
        'background': '#ffc10778'
      })
      $(this).closest('tr').find('#hadir_status').val('Masih Bimbang');
    }
  })
})


function CopyToClipboard(id) {
  var r = document.createRange();
  r.selectNode(document.getElementById(id));
  window.getSelection().removeAllRanges();
  window.getSelection().addRange(r);
  document.execCommand('copy');
  window.getSelection().removeAllRanges();
}