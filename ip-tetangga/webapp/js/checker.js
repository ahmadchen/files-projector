var load = false;
var proses = false;
var done = false;

$(document).ready(function() {
  $('#grab').hover(function() {
    if (!proses && done) {
      $(this).html('<i class="fa fa-sitemap"></i>&nbsp;&nbsp; Cek IP Tetangga (lagi?)');
      $('#kissurl').focus();
    }
  }, function() {
    if (!proses && done) {
      done = false;
    }
  });
  $('#toggler').click(function() {
    $('#toggled').slideToggle(400);
  });
  $('#toggler1').click(function() {
    $('#toggled1').slideToggle(400);
  });
  $('#toggler2').click(function() {
    $('#toggled2').slideToggle(400);
  });

  $('#kissurl').keydown(function(event) {
    var urlny = $('#kissurl').val();
    if (ValidateIPaddress(urlny)) {
      $('#kissurl').css({
        color: '#3498DB'
        // color: '#007FFF'
      });
    } else {
      $('#kissurl').css({
        color: '#FF4C4C'
      });
    }
  });

  $('#kissurl').keyup(function(event) {
    var urlny = $('#kissurl').val();
    if (ValidateIPaddress(urlny)) {
      $('#kissurl').css({
        color: '#3498DB'
        // color: '#007FFF'
      });
    } else {
      $('#kissurl').css({
        color: '#FF4C4C'
      });
    }
  });
  $('#grab').click(function() {
    if (!proses) {
      var ipnya = $('#kissurl').val();
      if (ipnya !== "") {
        if (ValidateIPaddress(ipnya)) {
          if ($('#identifikasi').prop('checked')) {
            var identify = "1";
          } else {
            var identify = "0";
          }
          $('#kissurl').css({
            color: '#3498DB'
            // color: '#007FFF'
          });
          $('#grab').addClass('disabled');
          $('#grab').html('<i class="fa fa-spin fa-gear"></i>&nbsp; Sedang bekerja..');

          $('#listDiv').html("");
          $('#listPanel').slideUp('400').slideDown('400');
          $('#wait').fadeIn(400);

          $.ajax({
            url: 'checker.php?goji=geje',
            type: 'get',
            data: 'do=' + ipnya + '&id=' + identify,
            success: function(datanya) {

              if (datanya == "ok") {
                loadList(ipnya);
              }

            }
          });
        } else {
          $('#kissurl').css({
            color: '#FF4C4C'
          });
        }
      } else {
        $('#kissurl').css({
          color: '#FF4C4C'
        });
        $('#kissurl').val('Masukkan IP publik di sini..');
      }
    }
  });

  $('#listPanel').bind("contextmenu",function(e){
    e.preventDefault();
  });

});


function ValidateIPaddress(ipaddress) {
  if (/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test(ipaddress)) {
    return (true)
  }
  return (false)
}

function loadList(a) {
  load = true;
  if (load) {
    timer = setInterval("loadResult('" + a + "')", 3000);
  }
  $('#wait').fadeIn(400);
  $('#listPanel').slideDown('400');
}

function loadResult(a) {
  $.ajax({
    url: 'do/' + a,
    type: 'get',
    data: 'result',
    success: function(datanya) {
      $('#listDiv').html(datanya);
    }
  });

  $.ajax({
    url: 'done/' + a,
    type: 'get',
    data: 'result',
    success: function(datadone) {
      if (datadone == "done") {
        proses = false;
        done = true;
        $('#grab').removeClass('disabled');
        $('#grab').html('<i class="fa fa-smile-o"></i>&nbsp;&nbsp; Selesai..');
        $('#wait').fadeOut(400);
        clearInterval(timer);
      }

    }
  });
}

function speedyml(a) {
  if(event.button==2)
  {
    var win = window.open("http://speedy.ml/?ip="+a);
    if (win) {
      win.focus();
    } else {
      $('#modalPopup').modal('show');
    }
    return false;    
  }
}
