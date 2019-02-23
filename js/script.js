
jQuery(document).ready(function($){
    $('.mapModal').on('click', function(){
        console.log('Hey man!');
    });
    $('.mapModal').find('a').attr('data-toggle', 'modal');
    $('.mapModal').find('a').attr('data-target', 'mapModal');
});

$(document).ready(function(){
    $("#ordInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#ordTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
});
