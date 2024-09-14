
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Currencies') }}</div>

                    <div class="card-body">
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <tr>
                                    <th>Currency</th>
                                    <th>Value</th>
                                    <th>Date</th>
                                </tr>
                                @foreach($allCurrencies as $currency)
                                    <tr>
                                        <td>{{$currency->name}}</td>
                                        <td>{{ intval($currency->price) / 1000 }}</td>
                                        <td>{{ $currency->created_at }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
