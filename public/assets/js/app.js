$(function () {
  $(".droptop").change(function () {
    $("#droptoplabel").html("tampilkan customer");
    const id = $("#droptop").val();
    // alert("oke");
    console.log(id);

    $.ajax({
      url: "ajaxtopcustomer/getdroptop",
      //
      method: "post",
      //dataType: "json",
      data: {
        namacustomer: id,
      },

      success: function (test) {
        console.log("test");
        console.log(test);
        // $("#nama").val(data.id);
        // $("#nama").val(data.namacustomer);
        // $("#deskripsi").val(data.deskripsi);
        // $("#gambarcustomer").val(data.gambarcustomerPrev);
      },
    });
  });
});

$(document).ready(function () {
  //Get
  var id = $("#idx").val();

  //Set
  $("#droptop").val(id);
  // alert($("#droptop").val(id));
});
