@extends('layouts.app')
@include('layouts.footer')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
                    <h3>Data Pemesanan</h3>
                    <table id="t01">
                    @foreach($petani as $key => $data)
                        <tr>
                            <th>Id Transaksi</th>
                            <th>Nomor Meja</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                        </tr>    
                        <tr>    
                            <td>{{$data->id_transaksi}}</td>
                            <td>{{$data->nomor_meja}}</td>
                            <td>{{$data->total_harga}}</td>
                            <td>{{$data->status}}</td>                
                        </tr>
                    @endforeach
            
@endsection
