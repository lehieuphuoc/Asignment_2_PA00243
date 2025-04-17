@extends('layouts.app')

@section('title', 'Quản lý người dùng')

@section('styles')
<style>
    .admin-wrapper {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 260px;
        background: linear-gradient(135deg, #8e44ad, #3498db);
        color: #ecf0f1;
        padding-top: 20px;
        position: fixed;
        height: 100%;
        box-shadow: 3px 0px 10px rgba(0, 0, 0, 0.2);
    }

    .sidebar .sidebar-brand {
        font-size: 1.7rem;
        font-weight: bold;
        text-align: center;
        color: #fff;
        padding: 1rem;
        border-bottom: 2px solid #fff;
    }

    .sidebar .nav-link {
        display: flex;
        align-items: center;
        padding: 1rem;
        color: #ecf0f1;
        transition: background-color 0.3s;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .sidebar .nav-link:hover {
        background-color: #9b59b6;
        color: #fff;
    }

    .sidebar .nav-link.active {
        background-color: #8e44ad;
        color: #fff;
    }

    .sidebar .nav-link i {
        margin-right: 0.75rem;
    }

    .main-content {
        margin-left: 260px;
        flex: 1;
        padding: 2rem;
        background-color: #f4f6f9;
        border-radius: 10px;
    }

    .content-header h1 {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .alert {
        margin-bottom: 1.5rem;
        padding: 1rem;
        border-radius: 10px;
        font-weight: 600;
    }

    .table {
        width: 100%;
        margin-bottom: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .table th {
        background-color: #2c3e50;
        color: white;
        font-weight: 600;
    }

    .table td, .table th {
        text-align: center;
        padding: 1rem;
        font-size: 1rem;
    }

    .btn-primary {
        background-color: #8e44ad;
        border-color: #8e44ad;
    }

    .btn-primary:hover {
        background-color: #9b59b6;
        border-color: #9b59b6;
    }

    .btn-warning {
        background-color: #f39c12;
        border-color: #f39c12;
    }

    .btn-warning:hover {
        background-color: #e67e22;
        border-color: #e67e22;
    }

    .btn-danger {
        background-color: #e74c3c;
        border-color: #e74c3c;
    }

    .btn-danger:hover {
        background-color: #c0392b;
        border-color: #c0392b;
    }

    .card {
        background-color: #ffffff;
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 1.5rem;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
    }

    .card h4 {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 1rem;
    }

    .card p {
        color: #666;
    }
</style>
@endsection

@section('content')
<div class="admin-wrapper">

    <div class="sidebar">
        <div class="sidebar-brand">Quản Trị</div>
        <div class="nav">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="fa fa-home"></i> Dashboard
            </a>
            <a href="{{ route('admin.news') }}" class="nav-link {{ request()->routeIs('admin.news') ? 'active' : '' }}">
                <i class="fa fa-newspaper"></i> Quản lý tin tức
            </a>
            <a href="{{ route('admin.categories') }}" class="nav-link {{ request()->routeIs('admin.categories') ? 'active' : '' }}">
                <i class="fa fa-list"></i> Quản lý danh mục
            </a>
            <a href="{{ route('admin.users') }}" class="nav-link {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                <i class="fa fa-users"></i> Quản lý người dùng
            </a>
        </div>
    </div>

    <div class="main-content">
        <div class="content-header">
            <h1>Quản lý người dùng</h1>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="card">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Vai trò</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role == 1 ? 'Admin' : 'User' }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-warning">Sửa</a>
                            <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa người dùng này?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Không có người dùng nào.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
