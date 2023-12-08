var removeProductLinks = document.querySelectorAll('.product-remove a');
for (var i = 0; i < removeProductLinks.length; i++) {
    removeProductLinks[i].addEventListener('click', function(e) {
        e.preventDefault();
        var productRow = this.parentElement.parentElement;
        productRow.parentElement.removeChild(productRow);
        calculateTotals();
    });
}

function calculateTotals() {
    var tableBodyRows = document.querySelectorAll('.table-body-row');
    var subTotal = 0;

    for (var i = 0; i < tableBodyRows.length; i++) {
        var priceCell = tableBodyRows[i].querySelector('.product-price');
        var quantityInput = tableBodyRows[i].querySelector('.product-quantity input');
        var totalCell = tableBodyRows[i].querySelector('.product-total');
        var price = Number(priceCell.innerText.replace('đ', ''));
        var quantity = Number(quantityInput.value);
        var total = price * quantity;
        subTotal += total;
        totalCell.innerText = total.toLocaleString('vi-VN', {
            style: 'currency',
            currency: 'VND'
        });
    }
    var subTotalCell = document.querySelector('#tong-gia');
    subTotalCell.innerText = subTotal.toLocaleString('vi-VN', {
        style: 'currency',
        currency: 'VND'
    });

    var shippingFee = 25000;
    var grandTotal = subTotal + shippingFee;
    var grandTotalCell = document.querySelector('#Tong');
    grandTotalCell.innerText = grandTotal.toLocaleString('vi-VN', {
        style: 'currency',
        currency: 'VND'
    });
}
var quantityInputs = document.querySelectorAll('.product-quantity input');
for (var i = 0; i < quantityInputs.length; i++) {
    quantityInputs[i].addEventListener('change', calculateTotals);
}
window.addEventListener('DOMContentLoaded', calculateTotals);