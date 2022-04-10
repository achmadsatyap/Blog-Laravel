@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Blog</div>

                <div class="card-body">
                    <h4>Copy to Clipboard</h4>
            <input type="text" value="HELLOW10" id="myInput" readonly>

            <!-- The button used to copy the text -->
            <button onclick="myFunction()">Copy text</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">AppStore</div>
                <div class="card-body">
                    <a href="https://itunes.apple.com/us/app/online-florist-floweradvisor/">
                    <img src="{{ ('img/app.png') }}" width="200px" height="200px"></a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">AppStore</div>
                <div class="card-body">
                        <a href="https://www.floweradvisor.com.ph/flowersphilippines">
                            <button>Make someone's day</button></a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">AppStore</div>
                <div class="card-body">
                    
                    <a href="https://www.floweradvisor.com.ph/"><img src="{{ ('img/footer.JPG') }}" width="200px" height="200px"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
