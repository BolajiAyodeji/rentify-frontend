"use strict";

//Preloader Timeout
setTimeout(function () {
  $('.preloader').fadeOut();
  $('#loader').delay(150).fadeOut('slow');
}, 1000); //Register Service Workers

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('./sw.js').then(function () {
      console.log('Service Worker Registered');
    });
  });
} else {
  console.log('error! Service Worker not Registered');
} //Copyright Date


var COPYRIGHT = function COPYRIGHT() {
  var day = new Date();
  var year = '©' + day.getFullYear() + ' All rights reserved, <a href="https://favcode54.org"> Favcode54</a>';
  document.getElementById('copy').innerHTML = year;
};

COPYRIGHT(); //Fetch API FOR RENTALS

var rent_head = "<div class=\"container\">\n<div class=\"row\">";
var rent = '';
var rent_foot = "</div>\n</div>";
$.ajax({
  type: 'GET',
  url: 'https://murmuring-forest-71544.herokuapp.com/api/electronics',
  success: function success(data) {
    for (var i = 0; i < data.length; i++) {
      var name = data[i].name;
      var productImage = data[i].image;
      var description = data[i].description;
      var dailyRentalFee = data[i].dailyRentalFee;
      var numberInStock = data[i].numberInStock;

      if (description) {
        if (description.length > 20) {
          description = description.slice(0, 50) + '...';
        } else {
          description;
        }
      }

      var toAppend = "<!-- Rent Card -->\n            <div class=\"col-lg-3 col-md-6 col-12\">\n                <div class=\"card mb-5 mb-lg-0\">\n                    <div class=\"card-body\">\n                        <h5 class=\"card-title text-muted text-uppercase text-center\">".concat(name, "</h5>\n                        <img src=\"").concat(productImage, "\" class=\"card-details text-center img-fluid\">\n                        <hr>\n                        <ul class=\"fa-ul\">\n                            <h6><i class=\"fas fa-caret-right\"></i> Description</h6>\n                            <li><span class=\"fa-li\"></span>").concat(description, "</li>\n                            <h6><i class=\"fas fa-caret-right\"></i> Rental fee</h6>\n                            <li><span class=\"fa-li\"></span>").concat(dailyRentalFee, "</li>\n                            <h6><i class=\"fas fa-caret-right\"></i> In Stock</h6>\n                            <li><span class=\"fa-li\"></span>").concat(numberInStock, "</li>\n                        </ul>\n                        <a href=\"#\" class=\"btn btn-block btn-primary text-uppercase\">Rent Now</a>\n                    </div>\n                </div>\n            </div>");
      rent += toAppend;
      $('.publishedRentals').html(rent_head + rent + rent_foot);
    }
  }
});
//# sourceMappingURL=app.js.map