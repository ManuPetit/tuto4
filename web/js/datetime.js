var form = document.forms['product'];

var dt = form.elements['product_ladate'];

window.setInterval(function() {
    dt.value = moment().format();
    console.log('It worked !');
}, 1000);