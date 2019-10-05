@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Artikel</div>   
                             
                <div class="card-body">
    
                <table border="1">
                    <tr>
                        <td>Id</td>
                        <td>Judul</td>
                        <td>Isi</td>
                        <td>Users Id</td>
                    </tr>

                        @foreach ($listArtikel as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>
                        <a href="{!! route('artikel.show' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-primary">Lihat</a>                   
                    </tr>

                        @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
