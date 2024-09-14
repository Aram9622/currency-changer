@extends('layouts.app')

@section("content")
    <form action="{{route("currencyChanger")}}" method="POST">
        @csrf
        <div class="currency-converter">
            <div class="header">
                <label for="bank-select">Currency</label>
            </div>
            <div class="currency-input">
                <div class="currency-select">
                    <div class="form-group">
                        <input type="number" name="price" id="" class="form-control" value="{{old("price")}}">
                    </div>
                </div>
                <div class="currency-select">
                    <select name="currency_from_id" class="form-control">
                        <option value="0" selected>Select Currency</option>
                        @foreach($currencies as $currency)
                            <option value="{{$currency->id}}">{{$currency->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="currency-select">
                    <select name="currency_to_id" class="form-control">
                        <option value="0" selected>Select Currency</option>
                        @foreach($currencies as $currency)
                            <option value="{{$currency->id}}">{{$currency->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success">Submit</button>
            </div>
            <p class="text-center mt-3">
                @if(session("result"))
                    <b>{{ number_format(floatval(session("result")), 2)}}</b>
                @endif
            </p>
        </div>
    </form>

    @if($errors->any())
        <p style="color:red">{{$errors->first()}}</p>
    @endif
@endsection
