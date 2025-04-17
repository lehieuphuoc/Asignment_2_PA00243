@extends('layouts.app')

@section('title', 'Giới thiệu')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4" style="font-weight: 700; color: #343a40;">Giới Thiệu Về Chúng Tôi</h1>

    <!-- Phần giới thiệu chung -->
    <div class="card p-4 mb-4 shadow-lg" style="border-radius: 10px; background-color: #f8f9fa;">
        <h2 class="text-primary" style="font-size: 1.75rem; font-weight: 600;">Chào mừng bạn đến với trang của chúng tôi!</h2>
        <p class="lead" style="font-size: 1.1rem; color: #555;">
            Chúng tôi là một nền tảng tin tức cung cấp những thông tin mới nhất và chính xác nhất về nhiều lĩnh vực khác nhau như công nghệ, thể thao, giải trí, kinh tế và nhiều hơn nữa.
            Với đội ngũ biên tập viên chuyên nghiệp, chúng tôi cam kết mang đến cho độc giả những nội dung chất lượng cao.
        </p>
    </div>

    <!-- Sứ mệnh & Tầm nhìn -->
    <div class="row">
        <div class="col-md-6">
            <div class="card p-4 mb-4 shadow-sm" style="border-radius: 10px; background-color: #f1f3f5;">
                <h3 class="text-primary" style="font-size: 1.5rem;">Sứ mệnh của chúng tôi</h3>
                <p style="font-size: 1rem; color: #555;">
                    Sứ mệnh của chúng tôi là cung cấp thông tin đáng tin cậy, nhanh chóng và khách quan đến cộng đồng, giúp mọi người nắm bắt thông tin một cách chính xác và có giá trị.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-4 mb-4 shadow-sm" style="border-radius: 10px; background-color: #f1f3f5;">
                <h3 class="text-primary" style="font-size: 1.5rem;">Tầm nhìn</h3>
                <p style="font-size: 1rem; color: #555;">
                    Chúng tôi hướng tới việc trở thành một trong những nền tảng tin tức hàng đầu, nơi mà mọi người có thể tìm kiếm và cập nhật tin tức một cách dễ dàng và hiệu quả.
                </p>
            </div>
        </div>
    </div>

    <!-- Đội ngũ -->
    <div class="card p-4 mb-4 shadow-lg" style="border-radius: 10px; background-color: #ffffff;">
        <h3 class="text-primary" style="font-size: 1.5rem;">Đội ngũ của chúng tôi</h3>
        <p class="lead" style="font-size: 1rem; color: #555;">
            Chúng tôi tự hào có một đội ngũ phóng viên, biên tập viên và nhà phân tích giàu kinh nghiệm, luôn sẵn sàng cung cấp những tin tức chính xác và hữu ích nhất.
        </p>
        <ul style="font-size: 1rem; color: #555;">
            <li><strong>Nguyễn Văn A</strong> - Tổng biên tập</li>
            <li><strong>Trần Thị B</strong> - Biên tập viên mảng công nghệ</li>
            <li><strong>Phạm Văn C</strong> - Biên tập viên mảng thể thao</li>
        </ul>
    </div>

    <!-- Liên hệ -->
    <div class="card p-4 shadow-lg" style="border-radius: 10px; background-color: #ffffff;">
        <h3 class="text-primary" style="font-size: 1.5rem;">Liên hệ với chúng tôi</h3>
        <p style="font-size: 1rem; color: #555;">Nếu bạn có bất kỳ câu hỏi hoặc góp ý nào, hãy liên hệ với chúng tôi qua:</p>
        <ul style="font-size: 1rem; color: #555;">
            <li>Email: <a href="mailto:lehieuphuoc35205@gmail.com" style="color: #007bff;">lehieuphuoc35205@gmail.com</a></li>
            <li>Điện thoại: <a href="tel:+84379330492" style="color: #007bff;">0379330492</a></li>
            <li>Địa chỉ: P.Đông Vệ - TP.Thanh Hóa - Thanh Hóa</li>
        </ul>
    </div>
</div>
@endsection
