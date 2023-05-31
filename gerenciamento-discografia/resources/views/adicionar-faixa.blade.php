@include('componentes.header', ['titulo' => 'Adicionar Álbum'])
<div class="corpo-principal">
    <div class="form-container-adicao">
        <form method="POST" action="{{ route('criarFaixa') }}">
            @csrf
            <div>
                <button type="button" onclick="window.location.href='/'" style="margin-left: 0;"
                    class="botao">Voltar</button>
            </div>
            @if ($errors->any())
                <div class="alertas">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @include('componentes.input', [
                'label' => 'Nome da Faixa',
                'id' => 'nome',
                'type' => 'text',
                'name' => 'nome',
                'for' => 'nome',
                'placeholder' => 'Digite o nome da Faixa',
                'class' => 'nome-input',
                'tamanhoMaximo' => '100',
                'tamanhoMinimo' => '3',
            ])
            @include('componentes.input', [
                'label' => 'Duração da Faixa',
                'id' => 'duracao',
                'type' => 'text',
                'name' => 'duracao',
                'for' => 'duracao',
                'placeholder' => '02:35',
                'tamanhoMaximo' => '5',
                'formatarHora' => 'formatTime(this)',
                'tamanhoMinimo' => '5',
            ])
            @include('componentes.select', [
                'label' => 'Álbum da Faixa',
                'id' => 'id_album',
                'name' => 'id_album',
                'for' => 'id_album',
                'opcoes' => $opcoesAlbums,
            ])
            <input type="submit" style="margin-left: 620px; background-color: #2e9c18;" value="Criar Faixa">
        </form>
    </div>
</div>
