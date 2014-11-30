
var body_parts;

$.getJSON('http://localhost/php/connect.php?query=body_parts',
  function(data) {
  //data is the JSON string
  body_parts = data;
  document.write(body_parts[0].name);

});
