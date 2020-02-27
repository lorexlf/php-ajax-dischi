const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function(){

  // Code
  getResults();

  }); // Button click query


  //////////////////////////////////////////////////
  // F U N C T I O N S
  //////////////////////////////////////////////////


  // FX GET RESULTS
  function getResults() {

    var url = 'http://localhost:8888/php-ajax-dischi/server.php';

    $.ajax({
      url: url,
      method: "GET",
      success: function (data, stato) {
        // If there is results
        if (data.length > 0) {
          printResults(data);
          printSelect(data);
        }
        else {
          printNoResult($('.albums'));
        }
      },
      error: function (richiesta, stato, errori) {
      alert("E' avvenuto un errore. " + errore);
      }
    });

  } // FX GET RESULTS


  // ––––––––––––––––––––––––––––––––––––––––––––––––––
  // FX PRINT ALBUMS
  function printResults(data) {
    var poster;
    var title;
    var author;
    var year;
    // Handlebars source
    var source = $('#entry-template').html();
    var template = Handlebars.compile(source);
    // Loop - Get Single Album
    for (var i = 0; i < data.length; i++) {
      var singleResult = data[i];
      poster = singleResult.poster;
      title = singleResult.title;
      author = singleResult.author;
      year = singleResult.year;

      // Handlebars injection
      var context = {
        poster: poster,
        title: title,
        author: author,
        year: year
      };
      var html = template(context);
      $('.albums').append(html);
    } // Loop - Get Single Album
  } // FX PRINT ALBUMS


  // ––––––––––––––––––––––––––––––––––––––––––––––––––
  // FX PRINT NO RESULT
  function printNoResult(container) {
    // Handlebars source
    var source = $('#no-result-template').html();
    var template = Handlebars.compile(source);
    // Handlebars injection
    var html = template();
    container.append(html);
  } // FX PRINT NO RESULT

//////////
});
