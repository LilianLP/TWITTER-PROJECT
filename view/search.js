  $(document).ready(function(){
    $("#search_text").on("keyup", function(){
      var search_text = $(this).val();
      if (search_text !== '') {
        $.ajax({
          url: "../controller/search_controller.php",
          method: "POST",
          data: {search_text: search_text},
          success: function(response){
            var search_results = JSON.parse(response);
            var result_html = "";
            if (search_results.length === 0) {
              result_html += "<div>No results found.</div>";}
            for (var i = 0; i < search_results.length; i++) {
              var result = search_results[i];
              result_html += "<div>";
              result_html += "<a href='profil.php?username=" + result.result + "'>" + result.result + "</a>";
              result_html += "</div>";
            }
            $("#result").html(result_html);
          }
        });
      } else{
        $("#result").html('');
      }
      $(document).on('click', '#result a', function(e){
        e.preventDefault();
    
        var url = $(this).attr('href');
        window.location.href = url;
      });
    }); 
  })
  ;
