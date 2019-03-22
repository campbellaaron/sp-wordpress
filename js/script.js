
jQuery(document).ready(function($){
    $('.mapModal').on('click', function(){
        console.log('Hey man!');
    });
    $('.mapModal').find('a').attr('data-toggle', 'modal');
    $('.mapModal').find('a').attr('data-target', '#mapModal');
});

$(document).ready(function(){
  const darkSkyApi = "https://api.darksky.net/forecast/aefd56c69dcc8e1a7cb5a60336300ec0/38.421022,-82.577623";
    $("#ordInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#ordTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      $("#minutesInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#minutesTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });

      console.log(darkSkyApi);
});


