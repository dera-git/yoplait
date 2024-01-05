(function ($) {
    $(document).ready(function () {
        //click grid item
        $('.kl-grid-gamme-item').on("click", function (e) {
            e.preventDefault();
            const title = $(this).data("title");
            const formats = $(this).data("formats");
            const poids = $(this).data("poids");
            const titleRender = $('.kl-single-gamme-titre > .kl-text-58');
            const otherItems = $('.kl-grid-gamme-item').not($(this));
            const images = $('.kl-grid-gamme-item .kl-image-format');
            const imageFirst = $('.kl-grid-gamme-item .kl-image-format:first-of-type');
            const selectors = [];

            otherItems.removeClass('active');
            $(this).addClass('active');
            titleRender.text(title);
            images.removeClass('show');
            imageFirst.addClass('show');
            $('.kl-format-list-item').removeClass('show active');
            formats.forEach((format, index) => {
                const selectorFormatItem = $(`[data-format='${format}']`);
                const selectorFormatItemText = $(`[data-format='${format}'] .kl-format-list-item-text`);
                selectorFormatItemText.text(poids[index]);
                selectorFormatItem.addClass('show');
                selectors.push(selectorFormatItem);
            });
            if (selectors.length > 0) {
                selectors[0].addClass('active');
            }
        });

        //click format item
        $('.kl-format-list-item').on("click", function (e) {
            e.preventDefault();
            const otherItems = $('.kl-format-list-item').not($(this));
            const format = $(this).data("format");

            otherItems.removeClass('active');
            $(this).addClass('active');
            $('.kl-grid-gamme-item.active .kl-image-format').removeClass('show');
            $(`.kl-grid-gamme-item.active .kl-image-format-${format}`).addClass('show');
        });

    });
})(jQuery);
