@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
<style>
    .news-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 10px;
        background: #fff;
        margin-bottom: 1.5rem;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .news-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .news-card .card-body {
        padding: 1rem;
    }

    .news-card .card-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .news-card .card-text {
        color: #666;
        font-size: 0.9rem;
    }

    .highlight-news {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 2rem;
    }

    .highlight-news img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }

    .highlight-news .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        padding: 1.5rem;
        color: white;
    }

    .highlight-news .overlay h2 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }

    .highlight-news .overlay .category {
        font-size: 1rem;
        color: #ffd700;
    }

    .sidebar-section {
        background: #f8f9fa;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
    }

    .sidebar-section h4 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #333;
    }

    .sidebar-section a {
        transition: background 0.2s ease;
        border-radius: 5px;
    }

    .sidebar-section a:hover {
        background: #e9ecef;
    }

    .pagination li a {
    padding: 6px 12px;
    font-size: 0.9rem;
    border-radius: 50px;
    color: #007bff;
    border: 1px solid #007bff;
    transition: background 0.2s, color 0.2s;
}

.pagination li a:hover {
    background: #007bff;
    color: white;
}

.pagination .active a {
    background: #007bff;
    color: white;
}

</style>

<h1 class="display-4 text-center mb-5" style="font-weight: 700; color: #333;">Tin tức mới nhất</h1>

@if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif

<div class="row">
    <!-- Cột chính -->
    <div class="col-lg-8">
        <!-- Tin nổi bật -->
        @if(isset($tinNoiBat))
            <div class="highlight-news">
                @if($tinNoiBat->image)
                    <img src="{{ Str::startsWith($tinNoiBat->image, ['http://', 'https://']) ? $tinNoiBat->image : asset('storage/' . $tinNoiBat->image) }}" alt="Ảnh tin nổi bật">
                @else
                    <img src="https://via.placeholder.com/800x400?text=Không+có+ảnh" alt="Ảnh tin nổi bật">
                @endif
                <div class="overlay">
                    <div class="category">
                        {{ \App\Models\Category::find($tinNoiBat->category_id)->name ?? 'Không xác định' }}
                    </div>
                    <h2>
                        <a href="{{ route('tin', $tinNoiBat->id) }}" class="text-white text-decoration-none">
                            {{ $tinNoiBat->title }}
                        </a>
                    </h2>
                    <p class="card-text">{{ \Carbon\Carbon::parse($tinNoiBat->created_at)->diffForHumans() }}</p>
                </div>
            </div>
        @endif

        <!-- Danh sách tin tức -->
        <div class="row">
            @foreach($tatCaTin as $tin)
                <div class="col-md-6">
                    <div class="news-card">
                        @if($tin->image)
                            <img src="{{ Str::startsWith($tin->image, ['http://', 'https://']) ? $tin->image : asset('storage/' . $tin->image) }}" alt="Ảnh tin tức">
                        @else
                            <img src="https://via.placeholder.com/400x200?text=Không+có+ảnh" alt="Ảnh tin tức">
                        @endif
                        <div class="card-body">
                            <div class="category">
                                {{ \App\Models\Category::find($tin->category_id)->name ?? 'Không xác định' }}
                            </div>
                            <h5 class="card-title">
                                <a href="{{ route('tin', $tin->id) }}" class="text-decoration-none text-dark">
                                    {{ $tin->title }}
                                </a>
                            </h5>
                            <p class="card-text">{{ \Carbon\Carbon::parse($tin->created_at)->diffForHumans() }}</p>
                            <a href="{{ route('tin', $tin->id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Phân trang -->
        {{-- <div class="mt-4">
            {{ $tatCaTin->links() }}
        </div> --}}
    </div>

    <!-- Sidebar -->
    <div class="col-lg-4">
        <!-- Danh mục tin -->
        <div class="sidebar-section">
            <h4>Danh mục</h4>
            <div class="list-group">
                @foreach(\App\Models\Category::all() as $category)
                    <a href="{{ route('tintrongloai', $category->id) }}" class="list-group-item list-group-item-action">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Tin xem nhiều -->
        <div class="sidebar-section">
            <h4>Tin xem nhiều</h4>
            <div class="list-group">
                @foreach($tinXemNhieu as $tin)
                    <a href="{{ route('tin', $tin->id) }}" class="list-group-item list-group-item-action">
                        {{ $tin->title }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
