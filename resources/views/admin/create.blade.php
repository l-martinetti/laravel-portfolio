@extends('layouts.master')

@section('title', "Nuovo progetto")

@section('content')
    <div class="container my-4">
        <h1 class="mb-3">Crea un nuovo progetto</h1>
        <x-form>
            <x-slot:form_action>{{ route('admin.projects.store')}}</x-slot:form_action>
            <x-slot:form_method>POST</x-slot:form_method>
            <x-slot:blade_method></x-slot:blade_method>

            <x-slot:form_name></x-slot:form_name>
            <x-slot:form_client></x-slot:form_client>
            <x-slot:form_brief></x-slot:form_brief>
            <x-slot:form_time></x-slot:form_time>

            <x-slot:form_buttons>
                <button type="submit" class="btn btn-primary mt-1">Crea</button>
            </x-slot:form_buttons>
        </x-form>
    </div>
@endsection