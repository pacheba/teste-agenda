@extends('layouts.app')

@section('title','Criar Contato')

@section('content')
    
    <form id="form" method="POST" action="{{ route('contato.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label ">Endereço de Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
            <div id="emailHelp" class="form-text">Nós não iremos compartilhar seu e-mail com ninguém.</div>
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Número de Telefone</label>
            <input type="text" name="phone_number" class="form-control" id="phoneNumber" required>
        </div>
        <button class="btn btn-primary">Cadastrar</button>
    </form>
@endsection