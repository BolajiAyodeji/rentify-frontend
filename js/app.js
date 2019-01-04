let rent_head = `<div class="container">
            <div class="row">
            <div class="row intro_results_row">
            <div class="intro_results_dots magic_fade_in"></div>`;
let rent = ``;
let rent_foot = `</div>
            </div>
            </div>
            </div>`;
$.ajax({
    type: 'GET',
    url: 'https://murmuring-forest-71544.herokuapp.com/api/electronics',
    success: function (data) {
        for (let i = 0; i < data.length; i++) {
            let name = data[i].name;
            let productImage = data[i].image;
            let keywords = data[i].keywords;
            let productId = data[i]._id;
            let dailyRentalFee = data[i].dailyRentalFee;
            let description = data[i].description;
            let serialNumber = data[i].serialNumber;
            let productionYear = data[i].productionYear;
            let category = data[i].category;
            let numberInStock = data[i].numberInStock;
            let version = data[i].__v;


            //UI variables
            let title = '';
            let effect_time = '';


            let toAppend = `<div class='rent_result col-lg-4 intro_results_col align-items-center magic_fade_in'>
                            <div class='intro_results_item d-flex flex-column align-items-center justify-content-start text-center'>
                              <div class='card' style='width: 20rem;'>
                                  <img id='upnepa_bulb' class='card-img-top' src="${bulb}" alt="Card image cap">
                                  <h5>${title}</h5>
                              <h5>${effect_time}</h5>
                               </div>
                            </div>
                            </div>`;

            rent += toAppend;
            $('.content').html(rent_head + rent + rent_foot);

        }

    }
});