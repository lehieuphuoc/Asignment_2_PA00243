<header class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">
        <a class="navbar-brand glow-text" href="{{ route('home') }}">TinTuc Việt Nam</a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link fancy-hover" href="{{ route('home') }}">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link fancy-hover" href="{{ route('about') }}">Giới thiệu</a></li>
                <li class="nav-item"><a class="nav-link fancy-hover" href="{{ route('contact') }}">Liên hệ</a></li>
                @auth
                    @if(Auth::user()->role == 1)
                        <li class="nav-item">
                            <a class="nav-link fancy-hover" href="{{ route('admin.dashboard') }}">Quản trị</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link fancy-hover">Chào, {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="logout-form">
                            @csrf
                            <button type="button" class="nav-link btn btn-link fancy-hover btn-logout" data-bs-toggle="modal" data-bs-target="#logoutModal">Đăng xuất</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link fancy-hover" href="{{ route('login') }}">Đăng nhập</a></li>
                    <li class="nav-item"><a class="nav-link fancy-hover btn-glow" href="{{ route('register') }}">Đăng ký</a></li>
                @endauth
            </ul>
        </div>
    </div>
</header>

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Xác nhận đăng xuất</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn đăng xuất không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" id="confirmLogout">Đăng xuất</button>
            </div>
        </div>
    </div>
</div>

<style>
.custom-navbar {
    background: #004d99;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}

.glow-text {
    font-size: 1.8rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
}

.fancy-hover {
    font-size: 1.1rem;
    padding: 12px 20px;
    color: #fff;
    transition: 0.3s;
    position: relative;
    text-transform: uppercase;
}

.fancy-hover::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 3px;
    bottom: 0;
    left: 0;
    background: linear-gradient(90deg, #ff6a00, #ee0979);
    transform: scaleX(0);
    transition: transform 0.3s ease-in-out;
}

.fancy-hover:hover {
    color: #ff6a00;
}

.fancy-hover:hover::after {
    transform: scaleX(1);
}

.btn-glow {
    background: #ff6a00;
    border-radius: 8px;
    font-weight: bold;
    padding: 10px 15px !important;
    transition: all 0.3s ease-in-out;
}

.btn-glow:hover {
    transform: scale(1.1);
    box-shadow: 0px 0px 10px rgba(255, 105, 180, 0.8);
}

.btn-logout {
    background: none;
    border: none;
    color: #ff6a00;
    font-weight: bold;
    padding: 10px 15px;
    transition: all 0.3s ease;
}

.btn-logout:hover {
    transform: scale(1.1);
    color: #ff4500;
}

.custom-navbar {
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInDown 0.8s ease-in-out forwards;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const logoutButton = document.querySelector('.btn-logout');
    const confirmLogoutButton = document.querySelector('#confirmLogout');
    const logoutForm = document.querySelector('.logout-form');

    if (logoutButton && confirmLogoutButton && logoutForm) {
        confirmLogoutButton.addEventListener('click', function () {
            logoutForm.submit();
        });
    } else {
        console.error('Không tìm thấy một trong các phần tử: logoutButton, confirmLogoutButton, hoặc logoutForm');
    }
});
</script>
