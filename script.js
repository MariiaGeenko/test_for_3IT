$.ajax({
  url: "http:/localhost/mysql-to-json/server.php",
  type: "GET",
  dataType: "json",
  success: function (data) {
    console.log(data);
    var html_append = "";
    $.each(data, function (index, item) {
      html_append +=
        "<li><strong>ID: </strong>" +
        item.id +
        "&nbsp; &nbsp; <strong>Name: </strong>" +
        item.country_name +
        "&nbsp; &nbsp; <strong>Description: </strong>" +
        item.country_description +
        "</li>";
    });

    $("#mysqltojson").html(html_append);
  },
});
