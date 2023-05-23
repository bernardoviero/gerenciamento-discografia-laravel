<label for="{{ $for }}">{{ $label }}:</label>
<select id="{{ $id }}" name="{{ $name }}">
    @foreach ($opcoes as $opcao)
        <option value="{{ $opcao['value'] }}">{{ $opcao['label'] }}</option>
    @endforeach
</select>
