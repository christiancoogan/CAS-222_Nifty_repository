$.getJSON('https://openexchangerates.org/api/latest.json?app_id=e1655b64129046898eb7bbe24136d4e2', function(data) {
    // Check money.js has finished loading:
    if ( typeof fx !== "undefined" && fx.rates ) {
        fx.rates = data.rates;
        fx.base = data.base;
    } else {
        // If not, apply to fxSetup global:
        var fxSetup = {
            rates : data.rates,
            base : data.base
        }
    }
});

//Generate select options from openexchangerates api
$.get('https://openexchangerates.org/api/currencies.json', function(data) {
    $("#currency-type1,#currency-type2").html($.map(data, function(val, key) {
    return '<option value="' + key + '">' + val + '</option>';
    }));
});

function submit() {
    //Get the amount of money the user wants to convert
    var firstCurrencyNum = $("#currency-num1").val();
    //Get the two currency types the user wants to use for conversion
    var firstCurrencyType = $("#currency-type1 option:selected").val();
    var secondCurrencyType = $("#currency-type2 option:selected").val();
    //Get the converted currency using the user's input
    var convertedCurrency = fx(firstCurrencyNum).convert({ from: firstCurrencyType, to: secondCurrencyType});
    //Check to make sure the user is passing a number
    if(firstCurrencyNum > 0) {
        $("#content_right_currency").val(Number(firstCurrencyNum).toFixed(2) + " " + $("#currency-type1 option:selected").text() + " is " + convertedCurrency.toFixed(2) + " " + $("#currency-type2 option:selected").text() )
    } else {
        $("#content_right_currency").html("I'm sorry but the currency converter requires a number greater than zero. Please try again.")
    }
}

