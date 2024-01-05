(function($) {
    "use strict";

    let templateUrl = object_name.templateUrl;

    //get data json
    let allData = (function () {
        let json = null;
        $.ajax({
            'async': false,
            'global': false,
            // 'url': 'https://yoplait.fr/wp-content/themes/t-yoplaitfr/assets/js/data_map.json',
            'url': templateUrl +'/assets/js/data_map.json',
            'dataType': "json",
            'success': function (data) {
                json = data;
            }
        });
        return json;
    })();

    $(document).ready(function(){
        document.querySelectorAll('.kl-marker-pin').forEach(function (pin) {
            let currentData = allData[pin.dataset.id];
            let elementImage, elementHectare;
            if(currentData.image) {
                elementImage = `<div class="kl-popover-pin-img">
                                    <img class="kl-pin-img" src="${currentData.image}" alt="image from google map">
                                </div>`
            } else {
                elementImage = ``
            }

            if(currentData.hectare) {
                elementHectare = `<span class="d-inline-block">${currentData.hectare} Hectare</span>`
            } else {
                elementHectare = ``
            }

            let options = {
                html: true,
                content: function() {
                    return `<div class="kl-popover-pin-content">
                        ${elementImage}
                        <div class="kl-popover-pin-infos">
                            ${currentData.name}, ${currentData.place} ${currentData.zip} ${elementHectare}
                        </div>
                    </div>`
                },
                // container: '.kl-section-map-interact',
                customClass: "kl-popover-pin"
            }

            let popover = new bootstrap.Popover(pin, options)

        })

    });


})(jQuery);