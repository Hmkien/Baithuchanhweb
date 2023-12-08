// Đợi cho tất cả các phần tử HTML được tải hoàn thành
document.addEventListener("DOMContentLoaded", function() {
    // Lấy tất cả các button có class là "cart-btn"
    const addToCartButtons = document.querySelectorAll('.cart-btn');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });

    function addToCart() {
        // Hiển thị thông báo thành công
        alert('Sản phẩm đã được thêm vào giỏ hàng thành công');

        // Thêm sản phẩm vào trang Giỏ hàng.html (chưa hỗ trợ trong phạm vi câu hỏi)
        // Ví dụ: window.location.href = 'Giỏhang.html';
    }
});