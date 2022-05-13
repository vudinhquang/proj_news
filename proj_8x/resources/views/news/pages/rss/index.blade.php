@extends('news.main')
@section('content')
    <!-- Home -->
    <div class="section-category">
        @include('news.block.breadcrumb', ['item' => ['category_name' => $title]])
        <div class="content_container container_category">
            <div class="featured_title">
                <div class="container">
                    <div class="row">
                        <!-- Main Content -->
                        <div class="col-lg-8">
                            @include('news.pages.rss.child-index.list')
                        </div>
                        <div class="col-lg-4">
                            <h3>Giá vàng</h3>
                            @include('news.pages.rss.child-index.box-gold')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
