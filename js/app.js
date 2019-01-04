let start_search = `<div class="container">
            <div class="row">
            <div class="row intro_results_row">
            <div class="intro_results_dots magic_fade_in"></div>`;
let search = ``;
let end_search = `</div>
            </div>
            </div>
            </div>`;
$.ajax({
    type: 'GET',
    url: 'https://murmuring-forest-71544.herokuapp.com/api/electronics',
    success: function (data) {
        for (let i = 0; i < data.length; i++) {
            if (data[i].area_name.toLowerCase().includes(search_query.toLowerCase())) {
                let bulb = '';



                //UI variables
                let title = '';
                let effect_time = '';


                let toAppend = `<div class='search_result col-lg-4 intro_results_col align-items-center magic_fade_in'>
                            <div class='intro_results_item d-flex flex-column align-items-center justify-content-start text-center'>
                              <div class='card' style='width: 20rem;'>
                                  <img id='upnepa_bulb' class='card-img-top' src="${bulb}" alt="Card image cap">
                                  <h5>${title}</h5>
                              <h5>${effect_time}</h5>
                               </div>
                            </div>
                            </div>`;

                search += toAppend;
                $('.content').html(start_search + search + end_search);
                $('#no_result').hide();

            }
            else {
                $('#no_result').css('display', 'inline-block');
            }

        }

    }
});