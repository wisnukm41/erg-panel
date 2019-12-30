$(document).ready(function() {
  var date_input = $('input[name="date"]'); //our date input has the name "date"
  var container =
    $(".bootstrap-iso form").length > 0
      ? $(".bootstrap-iso form").parent()
      : "body";
  date_input.datepicker({
    format: "dd/mm/yyyy",
    container: container,
    todayHighlight: true,
    autoclose: true
  });

  $(".custom-file-input").on("change", function() {
    var fileName = $(this)
      .val()
      .split("\\")
      .pop();
    $(this)
      .siblings(".custom-file-label")
      .addClass("selected")
      .html(fileName);
  });
  $("#finence-list a").on("click", function(e) {
    e.preventDefault();
    $(this).tab("show");
  });

  // // Summernote
  // $('.textarea').summernote();
  var active = $("#active").val();
  if (active) {
    $("#navtree").addClass("menu-open");
    $("#" + active).addClass("active");
  }

  var actives = $("#actives").val();
  if (actives) {
    $("#" + actives).addClass("active");
  }

  $(".seeonly").bind("click", false);

  var piket = $("#pikets").val();
  $("#" + piket).addClass("bg-warning");
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $("#profilePhoto").attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

$("#photo").change(function() {
  readURL(this);
});

$(".remove").click(function(e) {
  e.preventDefault();
  var url = $(this).attr("href");
  var id = $(this)
    .parents("tr")
    .attr("id");

  swal(
    {
      title: "Yakin ?",
      text: "Data akan dihapus",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ya!",
      cancelButtonText: "Tidak!",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm) {
      if (isConfirm) {
        $.ajax({
          url: url,
          type: "DELETE",
          error: function() {
            alert("Something is wrong");
          },
          success: function(data) {
            // $("body")
            // 	.find("#" + id)
            // 	.remove();
            //$("#" + id).remove();
            window.location.href = window.location;
          }
        });
      } else {
        swal("Tidak Jadi", "", "error");
      }
    }
  );
});

var objDiv = document.getElementById("direct-chat-messages");
if (objDiv !== null) {
  objDiv.scrollTop = objDiv.scrollHeight;
}

getElementById("#piket-" + day).addClass("piket-day");
