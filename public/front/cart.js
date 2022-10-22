console.log("hi");
$(document).ready(function () {
    $('.add-one-item').on("click", function() {
        var quantity = $(this).parent().children("p");
        var quantityValue = $(this).parent().children("p").attr("data-quantity-count");
        quantity.attr("data-quantity-count", ++quantityValue);
        quantity.text(quantityValue);
        console.log(quantity.attr("data-quantity-count"));
    })

    $('.remove-one-item').on("click", function() {
        var quantity = $(this).parent().children("p");
        var quantityValue = $(this).parent().children("p").attr("data-quantity-count");
        if(quantityValue > 1) {
            quantity.attr("data-quantity-count", --quantityValue);
            quantity.text(quantityValue);
             console.log(quantity.attr("data-quantity-count"));
        }
        
    })
});