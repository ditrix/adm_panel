@extends('layouts.app_admin')

@section('content')

<section class="content-header">
    @component('blog.admin.components.breadcrumb')
        @slot('title') Панель управления @endslot
        @slot('parent') Главная @endslot
        @slot('active') @endslot
    @endcomponent
</section>

<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua" >
                <div class="inner">
                    <h4>Количество заказов: {{$countOrders}}</h4>
                    <p>New orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a hred="" class="small-box-footer">
                    More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green" >
                <div class="inner">
                    <h4>Количество продуктов: {{$countProducts}}</h4>
                    <p>Products</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a hred="" class="small-box-footer">
                    More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow" >
                <div class="inner">
                    <h4>Количество пользователей: {{$countUsers}}</h4>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a hred="" class="small-box-footer">
                    More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red" >
                <div class="inner">
                    <h4>Количество категорий:  {{$countCategories}}</h4>
                    <p>Categories</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a hred="" class="small-box-footer">
                    More info
                    <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        {{-- <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h4>Количество продуктов: </h4>
                    <p>Products</p>
                </div>
                <div class="icon">
                    <i class="ion  ion-stats-bars"></i>
                    <a hred="" class="small-box-footer">
                        More info
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h4>Количество пользователей: </h4>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion  ion-person-add"></i>
                    <a hred="" class="small-box-footer">
                        More info
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h4>Количество категорий: </h4>
                    <p>Categories</p>
                </div>
                <div class="icon">
                    <i class="ion  ion-pie-graph"></i>
                    <a hred="" class="small-box-footer">
                        More info
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div> --}}

    </div>
    <div class="row">
        <div class="col-lg-6 col-mb-6">

            @include('blog.admin.main.include.orders')
        </div>
        <div class="col-lg-6 col-mb-6">

            @include('blog.admin.main.include.recently')
        </div>
    </div>
</section>



@endsection
