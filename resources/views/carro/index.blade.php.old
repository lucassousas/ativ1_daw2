<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="/carro">
            <div>
                <label>Marca:</label>
                <input type="text" name="marca" value="{{$carro->marca}}">
            </div>
            <div>
                <label>Modelo:</label>
                <input type="text" name="modelo" value="{{$carro->modelo}}">
            </div>
            <div>
                <label>Placa:</label>
                <input type="text" name="placa" value="{{$carro->placa}}">
            </div>
            <div>
                <label>Cor:</label>
                <input type="text" name="cor" value="{{$carro->cor}}">
            </div>
            <div>
                <label>Ano:</label>
                <select name="ano">
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
            <div>
                @csrf
                <input type="hidden" name="id" value="{{$carro->id}}" />
                <button type="submit">Salvar</button>
            </div>
        </form>
        <table border="1">
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
                            <a href="/carro/editar/{{$carro->id}}">Editar</a>
                        </td>
                        <td>
                            <a href="/carro/excluir/{{$carro->id}}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>