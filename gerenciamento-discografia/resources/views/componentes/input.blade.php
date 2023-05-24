<label for="{{ $for }}">{{ $label }}:</label>
<input type="{{ $type }}" maxlength="{{ $tamanhoMaximo }}" minlength="{{ $tamanhoMinimo }}" id="{{ $id }}"
    name="{{ $name }}" placeholder="{{ $placeholder }}" {{ isset($pattern) ? 'pattern=' . $pattern : '' }}
    {{ isset($formatarHora) ? 'oninput=' . $formatarHora : '' }}>
<br><br>

<script>
    function formatTime(input) {
        var value = input.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos

        if (value.length > 4) {
            value = value.substr(0, 4); // Limita o número de caracteres a 4
        }

        if (value.length > 2) {
            value = value.replace(/^(\d{2})(\d{0,2})$/, '$1:$2'); // Insere ":" após os primeiros 2 caracteres
        }

        input.value = value;
    }
</script>
