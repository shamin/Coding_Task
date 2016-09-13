$('.progress').hide();

var priceSlider = document.getElementById('slider-price');
noUiSlider.create(priceSlider, {
    start: [1, 50],
    connect: true,
    range: {
        'min': [1],
        'max': [50]
    }
});
priceSlider.noUiSlider.on('update', function () {
    $("#pricelow").text("Rs. " + priceSlider.noUiSlider.get()[0] + "L");
});
priceSlider.noUiSlider.on('update', function () {
    $("#pricehigh").text("Rs. " + priceSlider.noUiSlider.get()[1] + "L");
});


var milageSlider = document.getElementById('slider-mileage');
noUiSlider.create(milageSlider, {
    start: [1, 50],
    connect: true,
    range: {
        'min': [1],
        'max': [50]
    }
});
milageSlider.noUiSlider.on('update', function () {
    $("#mileagelow").text(milageSlider.noUiSlider.get()[0]);
});
milageSlider.noUiSlider.on('update', function () {
    $("#mileagehigh").text(milageSlider.noUiSlider.get()[1]);
});


document.getElementById('save').addEventListener('click', loadcars);

$(document).ready(function () {
    loadcars();
    $('.collapsible').collapsible({
        accordion: false 
    });
    $("#search").keyup(search);
});

function loadcars()
{
    var price_low = priceSlider.noUiSlider.get()[0];
    var price_high = priceSlider.noUiSlider.get()[1];
    var mileage_low = milageSlider.noUiSlider.get()[0];
    var mileage_high = milageSlider.noUiSlider.get()[1];
    var formvalues = $('#filterform').serialize();
    formvalues = formvalues + '&price_low=' + price_low
            + '&price_high=' + price_high
            + '&mileage_low=' + mileage_low
            + '&mileage_high=' + mileage_high;
    console.log(formvalues);
    $.ajax({
        type: 'POST',
        url: 'loadcars.php',
        data: formvalues,
        beforeSend: function (html) {
            $('.progress').show();
        },
        success: function (html) {
            $('.progress').hide();
            $('#cars').html(html);
        }
    });
}
function search()
{
    if($("#search").val()!=="")
    {        
    var formvalues = "&term=" + $("#search").val();
    $.ajax({
        type: 'POST',
        url: 'search.php',
        data: formvalues,
        beforeSend: function (html) {
            $('.progress').show();
        },
        success: function (html) {
            $('.progress').hide();
            $('#searchresults').html(html);
        }
    });
    }
    else
    {
        $('#searchresults').html(null);
    }
}

