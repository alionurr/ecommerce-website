@extends('master')
@section('content')
<div class="container">
    <h3 class="text-center mt-5">Search Results</h3>
        <div class="row mt-5">
            @foreach ($products as $item)
            <div class="col-sm-4 mt-5">
                <div class="search-item">
                    <a href="/product_details/{{$item['id']}}">
                        <img src="{{$item['image']}}">
                    </a>
                </div>
            </div>

            <div class="col-sm-8 mt-5">
                <h2 class="text-center mt-5">{{$item['name']}}</h2>
                <h4 class="mt-5">{{$item['description']}}</h4>
            </div>
            <hr>
            @endforeach
        </div>
</div>
@endsection
