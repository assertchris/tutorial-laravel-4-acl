(function($){
    $(".confirm").on("click", function() {
        return confirm($(this).data("confirm"));
    });
}(jQuery));