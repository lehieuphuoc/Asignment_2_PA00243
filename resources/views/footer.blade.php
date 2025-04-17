<footer class="footer-news bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <!-- Cột 1: Giới thiệu -->
            <div class="col-md-4 mb-3">
                <h5 class="footer-title">Tin tức Việt Nam</h5>
                <p class="footer-desc">
                    Cập nhật nhanh chóng – chính xác – tin cậy các tin tức nóng hổi trong và ngoài nước về chính trị, xã hội, thể thao, công nghệ...
                </p>
            </div>

            <!-- Cột 2: Chuyên mục -->
            <div class="col-md-4 mb-3">
                <h5 class="footer-title">Chuyên mục</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ route('tinmoi') }}">Tin mới</a></li>
                    <li><a href="{{ route('xemnhieu') }}">Xem nhiều</a></li>
                    <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                    <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                </ul>
            </div>

            <!-- Cột 3: Liên hệ -->
            <div class="col-md-4 mb-3">
                <h5 class="footer-title">Liên hệ</h5>
                <p>Email: <a href="mailto:contact@tintucvietnam.vn" class="text-light">contact@tintucvietnam.vn</a></p>
                <p>Hotline: <span class="text-light">+84 123 456 789</span></p>
                <p>Địa chỉ: 123 Đường Tin Tức, Hà Nội, Việt Nam</p>
            </div>
        </div>

        <div class="text-center mt-3 border-top pt-3">
            <p class="mb-0">© 2025 Tin tức Việt Nam. Bản quyền thuộc về chúng tôi.</p>
        </div>
    </div>
</footer>

<!-- CSS -->
<style>
.footer-news {
    background-color: #1c1c1c;
    color: #ccc;
    font-size: 14px;
}

.footer-news .footer-title {
    font-size: 1.1rem;
    font-weight: bold;
    margin-bottom: 15px;
    color: #ffffff;
}

.footer-news .footer-desc {
    line-height: 1.6;
}

.footer-news .footer-links li {
    margin-bottom: 8px;
}

.footer-news .footer-links a {
    color: #bbbbbb;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-news .footer-links a:hover {
    color: #ffffff;
    text-decoration: underline;
}

.footer-news a {
    color: #bbbbbb;
    text-decoration: none;
}

.footer-news a:hover {
    color: #ffffff;
}
</style>
