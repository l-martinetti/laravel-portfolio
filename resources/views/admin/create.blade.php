@extends('layouts.master')

@section('title', "Nuovo progetto")

@section('content')
    <div class="container my-4">
        <h1 class="mb-3">Crea un nuovo progetto</h1>
        <x-form>
            <x-slot:form_action>{{ route('admin.projects.store')}}</x-slot:form_action>
            <x-slot:form_method>POST</x-slot:form_method>
        </x-form>
    </div>
@endsection