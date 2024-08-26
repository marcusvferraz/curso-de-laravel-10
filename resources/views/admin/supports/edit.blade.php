
@extends('admin.layouts.app')

@section('title', 'Criar Novo Tópico')

@section('header')
<h1 class="text-lg text-black-500">Dúvida Nova {{ $support->subject }}</h1>    
@endsection

@section('content')

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @method('PUT')
    @include('admin.supports.partials.form', [
            'support' => $support
    ])
</form>
@endsection