$(document).ready(function () {
    let anim_slider_hp = [
        { d: "M346.609 14.069C289.768 -30.8145 225.166 47.1237 155.5 96.5C89.1601 143.519 -7.71657 185.053 1.17316 258.898C10.737 338.343 90.1556 373.633 170.041 369.265C241.128 365.377 263.28 295.846 298 226C337.592 146.353 405.698 60.7281 346.609 14.069Z" },
        { d: "M346.055 12.069C289.215 -32.8146 232.166 66.1237 162.5 115.5C96.1601 162.519 -8.26984 183.053 0.619892 256.898C10.1838 336.343 89.6024 371.633 169.488 367.265C240.575 363.377 303.118 308.303 337.838 238.457C377.43 158.811 405.145 58.7281 346.055 12.069Z" },
        { d: "M347.055 12.069C290.215 -32.8146 196 60.9991 144.5 97.5C78.1601 144.519 -7.2698 183.053 1.61993 256.898C11.1838 336.343 90.6024 371.633 170.488 367.265C241.575 363.377 331.195 316.081 338.838 238.457C347.055 155 406.145 58.7281 347.055 12.069Z" },
    ]

    var anim_morph_slider_hp = anime({
        targets: '.kl-anim-slider-hp',
        d: [
            {value: anim_slider_hp[0].d},
            {value: anim_slider_hp[1].d},
            {value: anim_slider_hp[2].d},
        ],
        duration: 8000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });


    let beige_blob_01 = [
        { d: "M216.2,36.4C127.2-49.2-20.7,34.9-142,102.2c-115.5,64.1-249.3,144.2-243.3,267.9 c6.5,133.1,133.9,207.5,266.8,216.6C-0.2,594.8,46.2,452.2,112,344C187,220.6,308.6,125.5,216.2,36.4z" },
        { d: "M127,48C38.1-37.7-20.7,35.3-142,102.6c-115.5,64.1-249.3,144.2-243.3,267.9c6.5,133.1,133.9,207.5,266.8,216.6 C-0.2,595.2,89.2,466.2,155,358C230,234.6,219.4,137,127,48z" },
    ]

    var anim_morph_1 = anime({
        targets: '.kl-morpht-path-01',
        d: [
            {value: beige_blob_01[0].d},
            {value: beige_blob_01[1].d},
        ],
        duration: 8000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });

    let green_blob_01 = [
        { d: "M230.4,121.1C190.8,60.4,90.6,91.6,8.7,116.2c-78,23.5-169.2,54.1-184.3,127c-16.3,78.5,47.8,137.3,125.1,158.7 C18.2,420.9,52.7,347.2,108,292C171,229,271.6,184.3,230.4,121.1z" },
        { d: "M266,162C226.4,101.3,90.6,91.6,8.7,116.2c-78,23.5-169.2,54.1-184.3,127c-16.3,78.5,47.8,137.3,125.1,158.7 C18.2,420.9,89.7,339.2,145,284C208,221,307.2,225.2,266,162z" },
    ]

    var anim_morph_2 = anime({
        targets: '.kl-morpht-path-02',
        d: [
            {value: green_blob_01[0].d},
            {value: green_blob_01[1].d},
        ],
        duration: 8000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });

    let orange_blob_jobs = [
        { d: "M100.8,24.3C0.1-47.2-133.6,58.1-243.5,142.8c-104.7,80.6-225,179.8-200.6,301.2 c26.2,130.6,163.4,185.2,296.1,174.4C-29.9,608.7,7.1,496.8,56,380C111.8,246.8,205.5,98.6,100.8,24.3z" },
        { d: "M100.8,24.3C0.1-47.2-133.6,58.1-243.5,142.8c-104.7,80.6-225,179.8-200.6,301.2 c26.2,130.6,163.4,185.2,296.1,174.4C-29.9,608.7,67,551,74,391C109,254,205.5,98.6,100.8,24.3z" },
        { d: "M100.8,24.3C0.1-47.2-133.6,58.1-243.5,142.8c-104.7,80.6-225,179.8-200.6,301.2 c26.2,130.6,163.4,185.2,296.1,174.4C-29.9,608.7,113,637,120,477C92,315,205.5,98.6,100.8,24.3z" },
    ]

    var anim_morph_3 = anime({
        targets: '.kl-morpht-path-jobs',
        d: [
            {value: orange_blob_jobs[0].d},
            {value: orange_blob_jobs[1].d},
            {value: orange_blob_jobs[2].d},
        ],
        duration: 8000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });

    let orange_blob_maps = [
        { d: "M236.3,577.3c93.4-15.4,108.8-151.5,122.4-262.2c13-105.5,24.4-230.5-54.7-287C218.9-32.6,114.9,13,48.7,94 C-10.1,166.1,25.1,271,62,366C104.1,474.4,139.2,593.3,236.3,577.3z" },
        { d: "M236.3,577.3c93.4-15.4,108.8-151.5,122.4-262.2c13-105.5,24.4-230.5-54.7-287C218.9-32.6,114.9,13,48.7,94 C-10.1,166.1,17.3,270,62,366C88,491,139.2,593.3,236.3,577.3z" },
        { d: "M236.3,577.3c93.4-15.4,108.8-151.5,122.4-262.2c13-105.5,24.4-230.5-54.7-287C218.9-32.6,114.9,13,48.7,94 C-10.1,166.1-2.7,277,42,373C68,498,139.2,593.3,236.3,577.3z" },
    ]

    var anim_morph_map = anime({
        targets: '.kl-anim-morpht-map',
        d: [
            {value: orange_blob_maps[0].d},
            {value: orange_blob_maps[1].d},
            {value: orange_blob_maps[2].d},
        ],
        duration: 8000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });

    let orange_blob_article = [
        { d: "M-250.59 377.014C-210.856 529.657 -95.2483 558.61 -0.831251 584.034C89.0777 608.244 194.518 630.439 217.571 503.076C217.571 377.014 126 237.5 64.5 95C-13.8311 -20 -75.986 -18.9584 -142.854 38.4293C-219.105 103.87 -291.896 218.332 -250.59 377.014Z" },
        { d: "M-250.59 381.014C-210.857 533.657 -95.2485 562.611 -0.83138 588.034C89.0776 612.244 117.947 624.364 141 497C141 370.938 122 333 68.4999 101C54 -29 -75.9862 -14.9584 -142.854 42.4293C-219.105 107.87 -291.896 222.331 -250.59 381.014Z" },
    ]

    var anim_morph_article_1 = anime({
        targets: '.kl-anim-path-article-left',
        d: [
            {value: orange_blob_article[0].d},
            {value: orange_blob_article[1].d},
        ],
        duration: 4000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });

    let green_blob_article = [
        { d: "M553.524 362.898C537.927 165.423 401.336 104.225 290.173 52.0458C184.318 2.35822 -24 -53 2.33082 104.172C146.5 524.5 27.5 526 68.9309 649.06C141.362 786.867 250.635 814.165 345.925 757.895C454.587 693.727 569.739 568.185 553.524 362.898Z" },
        { d: "M521.524 347.898C505.927 150.423 369.336 89.2246 258.173 37.0456C152.318 -12.6419 67 -29 15.5 99C-28.3307 536.828 36.9307 424 36.9307 634.06C77.5 722.5 218.634 799.165 313.925 742.894C422.587 678.727 537.739 553.185 521.524 347.898Z" },
    ]

    var anim_morph_article_2 = anime({
        targets: '.kl-anim-path-article-right',
        d: [
            {value: green_blob_article[0].d},
            {value: green_blob_article[1].d},
        ],
        duration: 6000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });

    let orange_blob_slider_1 = [
        { d: "M254.225 9.17116C205.409 -21.452 145.868 34.9598 95 80C46.5608 122.89 -11.3731 174.85 1.99998 232.5C16.3872 294.522 82.2399 315.618 145.056 305.302C200.954 296.123 214.033 247.731 235.5 189.5C259.979 123.097 306 80 254.225 9.17116Z" },
        { d: "M254.225 9.17114C205.409 -21.4521 145.868 34.9597 95.0001 80C46.5609 122.89 -11.373 174.85 2.00011 232.5C16.3873 294.522 82.24 315.618 145.056 305.302C190 272.5 179.033 233.231 200.5 175C224.979 108.597 306 80 254.225 9.17114Z" },
        { d: "M224 6.49998C168.5 -19.5 152.939 52.1103 104.5 95C56.0608 137.89 -11.3733 153.85 1.99975 211.5C16.3869 273.522 82.2397 294.618 145.056 284.303C190 251.5 238.033 182.231 259.5 124C283.979 57.5975 279.5 32.5 224 6.49998Z" },
    ]

    var anim_morph_slider_1 = anime({
        targets: '.kl-anim-svg-slider-ct',
        d: [
            {value: orange_blob_slider_1[0].d},
            {value: orange_blob_slider_1[1].d},
            {value: orange_blob_slider_1[2].d},
        ],
        duration: 8000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });


    let orange_anim_photo = [
        { d: "M274.423 115.102C234.797 54.3528 131.89 109.371 50 134C-27.9804 157.453 -116.49 164.292 -131.625 237.224C-147.908 315.687 -83.7884 374.538 -6.56569 395.893C62.152 414.896 118.746 371.215 174 316C237.007 253.037 315.616 178.254 274.423 115.102Z" },
        { d: "M287 108C247.374 47.2508 139.89 139.371 58.0001 164C-19.9803 187.453 -116.49 168.292 -131.625 241.224C-147.908 319.687 -83.7887 378.538 -6.56593 399.893C62.1517 418.896 92.0003 344 166 317C214 223 328.193 171.152 287 108Z" },
    ]

    var anim_morph_photo = anime({
        targets: '.kl-anim-photo-left',
        d: [
            {value: orange_anim_photo[0].d},
            {value: orange_anim_photo[1].d},
        ],
        duration: 6000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });

    let green_anim_news_left = [
        { d: "M241.806 24.2877C141.13 -47.1655 7.39225 58.1131 -102.513 142.753C-207.17 223.352 -327.53 322.548 -303.151 443.969C-276.922 574.598 -139.799 629.195 -7.02152 618.341C108.5 547 131.571 462.815 180.5 346C236.295 212.793 346.464 98.5676 241.806 24.2877Z" },
        { d: "M241.806 27.2877C190.5 -51.5 7.39233 61.113 -102.513 145.753C-207.17 226.352 -327.53 325.547 -303.151 446.969C-276.922 577.598 -139.799 632.195 -7.02142 621.341C87.0001 495.5 98.5707 426.815 147.5 310C203.296 176.793 299 145.753 241.806 27.2877Z" },
        { d: "M241.806 14.2877C185.5 -31.5 7.39235 48.1131 -102.513 132.753C-207.17 213.352 -327.53 312.547 -303.15 433.969C-276.922 564.598 -133.817 649.215 -7.02129 608.341C160 554.5 180.571 329.315 229.5 212.5C285.296 79.2932 343.869 97.2844 241.806 14.2877Z" },
    ]

    var anim_morph_news_left = anime({
        targets: '.kl-anim-act-left',
        d: [
            {value: green_anim_news_left[0].d},
            {value: green_anim_news_left[1].d},
            {value: green_anim_news_left[2].d},
        ],
        duration: 8000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });

    let green_anim_news_right = [
        { d: "M437.173 7.32107C322.008 -37.156 267.693 151.914 182 261C100.399 364.878 -41.2431 436.531 12.2707 548.217C69.8428 668.373 216.185 687.541 342.207 644.342C454.35 605.901 525.571 491.127 544.245 365.863C565.539 223.021 556.894 53.5577 437.173 7.32107Z" },
        { d: "M433.173 8.32107C318.008 -36.156 359.193 123.914 273.5 233C191.899 336.878 -45.2431 437.531 8.27075 549.217C65.8428 669.373 212.185 688.541 338.207 645.342C450.35 606.901 521.571 492.127 540.245 366.863C561.539 224.021 552.894 54.5577 433.173 8.32107Z" },
        { d: "M430.173 8.32107C315.008 -36.156 340.193 118.414 254.5 227.5C172.899 331.378 -35 278 5.27075 549.217C62.8428 669.373 209.185 688.541 335.207 645.342C447.35 606.901 518.571 492.127 537.245 366.863C558.539 224.021 549.894 54.5577 430.173 8.32107Z" },
    ]

    var anim_morph_news_right = anime({
        targets: '.kl-anim-act-right',
        d: [
            {value: green_anim_news_right[0].d},
            {value: green_anim_news_right[1].d},
            {value: green_anim_news_right[2].d},
        ],
        duration: 8000,
        direction: 'alternate',
        autoplay: true,
        easing: 'linear',
        elasticity: 300,
        loop: true
    });


    randomValues();

    randomValuesAbeille();

});

function randomValues() {
    anime({
        targets: '.kl-anim-svg-slider',
        translateX: function() {
            return anime.random(0, 40);
        },
        easing: 'easeInOutQuad',
        duration: 1000,
        complete: randomValues
    });
}

function randomValuesAbeille() {
    anime({
        targets: '.kl-anim-svg-abeille',
        translateY: function() {
            return anime.random(0, 100);
        },
        easing: 'easeInOutQuad',
        duration: 750,
        complete: randomValuesAbeille
    });
}