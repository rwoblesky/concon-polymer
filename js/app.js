
var body_partsJSON;
var bodyParts = [];

$.getJSON('http://localhost/php/connect.php?query=body_parts',
  function(data) {
  //data is the JSON string
  body_parts = data;
  for (var i= 0; i<body_parts.length; i++){
    bodyParts.push(body_parts[i].name);
  }
});
