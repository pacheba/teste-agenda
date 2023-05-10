@extends('layouts.app')

@section('title','Agenda de Contatos')

@section('content')

<table class="table table-striped table-bordered text-center">
    <div class="w-100 d-flex mb-3 justify-content-end"><a class="btn btn-primary" href="{{ route('contato.create') }}" role="button">Adicionar contato</a>
    </div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Número de telefone</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($contacts as $contact)
        <tr>
          <th scope="row">{{ $contact->id }}</th>
          <td>{{ $contact->name }}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->phone_number }}</td>
          <td>
          <a href="{{ route('contato.edit', $contact->id) }}"><i class="fa-solid fa-user-pen"></i></a> 
          <form method="post" action="{{ route('contato.destroy', $contact->id) }}" id='deleteForm'>
          @csrf
          @method('DELETE')
          <button class="text-danger me-1" style="border:none;" data-id='{{ $contact->id }}'><i class="fa-solid fa-trash"></i></button>
          </form> 
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
