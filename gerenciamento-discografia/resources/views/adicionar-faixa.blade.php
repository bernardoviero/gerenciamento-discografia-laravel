@include('componentes.header')
<div class="corpo-principal">
    <div class="form-container-adicao">
        <form method="POST" action="{{ route('criar_faixa') }}">
            @csrf
            <div>
                <button type="button" onclick="window.location.href='/'" class="botao">Voltar</button>
            </div>
            @include('componentes.input', [
                'label' => 'Nome da Faixa',
                'id' => 'nome',
                'type' => 'text',
                'name' => 'nome',
                'for' => 'nome',
                'placeholder' => 'Digite o nome da Faixa',
                'class' => 'nome-input',
            ])
            @include('componentes.input', [
                'label' => 'Duração da Faixa',
                'id' => 'duracao',
                'type' => 'text',
                'name' => 'duracao',
                'for' => 'duracao',
                'placeholder' => '02:35',
            ])
            @include('componentes.select', [
                'label' => 'Álbum da Faixa',
                'id' => 'id_album',
                'name' => 'id_album',
                'for' => 'id_album',
                'opcoes' => $opcoesAlbums,
            ])
            <input type="submit" value="Criar Faixa">
        </form>
    </div>
</div>
