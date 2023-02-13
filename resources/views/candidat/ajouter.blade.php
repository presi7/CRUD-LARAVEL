@extends('layouts.app')

@section('content')

<div class="conatiner">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{session('success')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header bg-info text-white">Ajouter un candiadte</div>
        <div class="card-body">
            <form action="{{route('store.candidat')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" name="nom" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Prenom:</label>
                    <input type="text" name="prenom" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Date Naissance</label>
                    <input type="date" name="dateNaissance" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Parti:</label>
                    <input type="text" name="parti" id="" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success mt-3">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
