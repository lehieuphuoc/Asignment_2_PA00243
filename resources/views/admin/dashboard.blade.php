@extends('layouts.app')

@section('title', 'Trang quản trị')

@section('content')
<style>
    .admin-dashboard {
        background: #f9fafb;
        border-radius: 8px;
        padding: 3rem;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        margin-top: 3rem;
    }
    .admin-dashboard h1 {
        font-weight: 700;
        color: #333;
        margin-bottom: 2rem;
        font-size: 2rem;
    }
    .admin-card {
        background: #fff;
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .admin-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }
    .admin-card h4 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #007BFF;
    }
    .admin-card p {
        color: #6c757d;
        font-size: 1rem;
        margin-bottom: 1.5rem;
    }
    .admin-card a {
        background-color: #007BFF;
        color: #fff;
        padding: 0.8rem 1.5rem;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        display: inline-block;
        transition: background-color 0.3s ease;
    }
    .admin-card a:hover {
        background-color: #0056b3;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }
    .col-md-4 {
        flex: 1 1 30%;
        max-width: 32%;
    }
</style>

<div class="container">
    <div class="admin-dashboard">
        <h1>Trang Quản Trị</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="admin-card">
                    <h4>Quản lý tin tức</h4>
                    <p>Xem, thêm, sửa, xóa các bài viết tin tức để cập nhật thông tin nhanh chóng.</p>
                    <a href="{{ route('admin.news') }}">Quản lý</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="admin-card">
                    <h4>Quản lý danh mục</h4>
                    <p>Quản lý các danh mục tin tức để tổ chức thông tin hiệu quả.</p>
                    <a href="{{ route('admin.categories') }}">Quản lý</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="admin-card">
                    <h4>Quản lý người dùng</h4>
                    <p>Xem và quản lý danh sách người dùng để quản lý quyền truy cập và tương tác.</p>
                    <a href="{{ route('admin.users') }}">Quản lý</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
