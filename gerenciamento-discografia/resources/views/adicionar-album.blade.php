@include('componentes.header', ['titulo' => 'Adicionar Álbum'])
<div class="corpo-principal">
    <div class="form-container-adicao">
        <form method="POST" action="{{ route('criarAlbum') }}">
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

            @csrf
            @include('componentes.input', [
                'label' => 'Nome do Álbum',
                'id' => 'nome',
                'type' => 'text',
                'name' => 'nome',
                'for' => 'nome',
                'placeholder' => 'Digite o nome do Álbum',
                'class' => 'nome-input',
                'tamanhoMaximo' => '100',
                'tamanhoMinimo' => '3',
            ])

            @include('componentes.input', [
                'label' => 'Ano do Álbum',
                'id' => 'ano',
                'type' => 'number',
                'name' => 'ano',
                'for' => 'ano',
                'placeholder' => 'Digite o ano do Álbum',
                'tamanhoMaximo' => '2030',
                'tamanhoMinimo' => '1970',
                'patterns' => '\d{4}',
            ])

            @include('componentes.input-text-area', [
                'label' => 'Descrição do Álbum',
                'id' => 'descricao',
                'name' => 'descricao',
                'for' => 'descricao',
                'placeholder' => 'Digite uma descrição para o Álbum',
            ])
            <input type="submit" style="margin-left: 620px; background-color: #2e9c18; " value="Criar Álbum">
        </form>
    </div>
</div>
