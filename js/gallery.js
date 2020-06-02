var source = [
  "./img/facilitiesSlider_slide_one.jpg",
  "./img/facilitiesSlider_slide_two.jpg"
];

function changeImage(index) {
  $(".cts-gallery").attr("src", source[index]);
}

$(document).ready(function() {
  $(".cts-gallery").attr("src", source[0]);

  var output = "";
  for (let index = 0; index < source.length; index++) {
    //console.log(index);
    output +=
      "<img src='" +
      source[index] +
      "' alt='' style='heigth:100px; width: auto;' onclick='changeImage(" +
      source[index] +
      ")' />";
    $(".indicator").html(output);
  }
});
