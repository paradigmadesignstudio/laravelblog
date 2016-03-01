@extends('template')


@section('title')
    Contato
@stop


@section('content')
    <h1>Entre em contato</h1>
    <form>
        <fieldset>
            <legend>Dados pessoais</legend>

            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
            </div>
            <div class="form-group">

                <input type="submit" class="form-control" id="cpf" name="cpf">
            </div>
        </fieldset>
    </form>
@stop
