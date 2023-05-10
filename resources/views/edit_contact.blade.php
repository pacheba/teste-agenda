@extends('layouts.app')

@section('title','Editar Contato')

@section('content')
    
    <form method="POST" action="{{ route('contato.update', $contact->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $contact->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Endereço de Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $contact->email }}" required>
            <div id="emailHelp" class="form-text">Nós não iremos compartilhar seu e-mail com ninguém.</div>
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Número de Telefone</label>
            <input type="text" name="phone_number" class="form-control" id="phoneNumber" value="{{ $contact->phone_number }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection