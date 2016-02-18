function searchq(){
  var searchTxt = $("input[name='search']").val();

  $.post("search.php", {searchVal: searchTxt}, function(output){
    $("#results").html(output);
  });

}
