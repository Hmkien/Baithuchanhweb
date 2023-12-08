document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('banking').onclick = function() {
        document.getElementById('bybanking').style.display = 'block';
    }
    document.getElementById('nhanhang').onclick = function() {
        document.getElementById('bybanking').style.display = 'none';
    }
});
// Tính tổng tiền sản phẩm
var tongTienSanPham = 0;
$('.order-details-body tr').each(function() {
    var gia = $(this).find('td:nth-child(2)').text();
    if (!isNaN(gia.replace('đ', ''))) {
        tongTienSanPham += parseInt(gia.replace('đ', ''));
    }
});
$('.checkout-details tr:nth-child(1) td:nth-child(2)').text(tongTienSanPham.toLocaleString() + "đ ");

// Tính tổng cộng
var tongCong = tongTienSanPham + parseInt($('.checkout-details tr:nth-child(2) td:nth-child(2)').text().replace('đ', ''));
$('.checkout-details tr:nth-child(3) td:nth-child(2)').text(tongCong.toLocaleString() + "đ ");
// Lấy thông tin từ form và gán cho phần "Địa Chỉ Giao Hàng " khi người dùng nhập vào các trường
document.getElementById('accept').addEventListener('click', function() {
    var name = document.getElementById('name').value;
    var address = document.getElementById('address').value;
    var phone = document.getElementById('phone').value;

    var deliveryInfo = "Họ và Tên: " + name + "<br> Số điện thoại: " + phone + "<br> Địa chỉ: " + address;
    document.getElementById('delivery-address').innerHTML = deliveryInfo;
});
document.addEventListener("DOMContentLoaded", function() {
    const acceptButton = document.getElementById("paying");

    acceptButton.addEventListener("click", function(event) {
        event.preventDefault();

        const confirmationMessage = document.createElement('div');
        confirmationMessage.classList.add('confirmation-message');
        confirmationMessage.innerHTML = `
            <i class="fas fa-check"></i>
            <p>Đơn hàng của bạn đã được xác nhận và sẽ được giao trong thời gian sớm nhất.</p>
        `;
        document.body.appendChild(confirmationMessage);

        setTimeout(function() {
            confirmationMessage.style.opacity = '1';
        }, 100);

        setTimeout(function() {
            confirmationMessage.style.opacity = '0';
            setTimeout(function() {
                confirmationMessage.remove();
                // Chuyển hướng đến trang home.html sau khi thông báo biến mất
                window.location.href = '../index.html';
            }, 300);
        }, 3000);
    });
});