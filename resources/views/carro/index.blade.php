@extends("templates.main")

@section("titulo", "Cadastro de carros")

@section("formulario")
    <form method="POST" action="/carro" class="row">
        <div class="form-group">
            <label>Marca:</label>
            <input type="text" name="marca" value="{{$carro->marca}}"  class="form-control" /> 
        </div>
        <div class="form-group">
            <label>Modelo:</label>
            <input type="text" name="modelo" value="{{$carro->modelo}}"  class="form-control"/>
        </div>
        <div class="form-group">
            <label>Placa:</label>
            <input type="text" name="placa" value="{{$carro->placa}}"  class="form-control" />
        </div>
        <div class="form-group">
            <label>Cor:</label>
            <input type="text" name="cor" value="{{$carro->cor}}"  class="form-control" />
        </div>
        <div class="form-group">
            <label>Ano:</label>
            <select name="ano"  class="form-control">
                <option value=""></option>
                <option value="21" {{ $carro->ano == "21" ? "selected" : ""}}>2021</option>
                <option value="20" {{ $carro->ano == "20" ? "selected" : ""}}>2020</option>
                <option value="19" {{ $carro->ano == "19" ? "selected" : ""}}>2019</option>
                <option value="18" {{ $carro->ano == "18" ? "selected" : ""}}>2018</option>
                <option value="17" {{ $carro->ano == "17" ? "selected" : ""}}>2017</option>
                <option value="16" {{ $carro->ano == "16" ? "selected" : ""}}>2016</option>
                <option value="15" {{ $carro->ano == "15" ? "selected" : ""}}>2015</option>
                <option value="14" {{ $carro->ano == "14" ? "selected" : ""}}>2014</option>
                <option value="13" {{ $carro->ano == "13" ? "selected" : ""}}>2013</option>
                <option value="12" {{ $carro->ano == "12" ? "selected" : ""}}>2012</option>
                <option value="11" {{ $carro->ano == "11" ? "selected" : ""}}>2011</option>
                <option value="10" {{ $carro->ano == "10" ? "selected" : ""}}>2010</option>
            </select>
        </div>
        <div class="form-group">
            @csrf
            <input type="hidden" name="id" value="{{$carro->id}}"  class="form-control" />
            <button type="submit" class="btn btn-success"><i class="bi-save"></i> Salvar</button>
        </div>
    </form>
@endsection

@section("tabela")
    <table class="table table-striped">
        <colgroup>
            <col width="200">
            <col width="200">
            <col width="100">
            <col width="100">
        </colgroup>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carros as $carro)
                <tr>
                    <td>{{$carro->marca}}</td>
                    <td>{{$carro->modelo}}</td>
                    <td>
                        <a class="btn btn-warning" href="/carro/editar/{{$carro->id}}"><i class="bi bi-pencil-square"></i> Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="/carro/excluir/{{$carro->id}}"><i class="bi bi-trash3-fill"></i> Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection