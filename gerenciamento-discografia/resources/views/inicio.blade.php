@include('componentes.header')

<div class="corpo-principal">
    <div class="search-container">
        @include('componentes.search')
    </div>
    <div>
        <div class="botoes-adicionar">
            <a href="adicionar-album"> @include('componentes.button', [
                'texto' => 'Adicionar Álbum',
                'title' => 'Adicionar Álbum',
            ]) </a>
            <a href="adicionar-faixa"> @include('componentes.button', [
                'texto' => 'Adicionar Faixa',
                'title' => 'Adicionar Faixa',
            ]) </a>
        </div>

        <table class="tabela-albums">
            @foreach ($albums as $album)
                <tr>
                    <td class="album-info">
                        Álbum: {{ $album->nome }}, {{ $album->ano }}
                        <form action="{{ route('excluirAlbum', ['id' => $album->id_album]) }}" method="POST"
                            onsubmit="return confirm('Tem certeza que deseja excluir esse Álbum?')">
                            @csrf
                            @method('PUT')
                            <button type="submit" title="Excluir Album"
                                style="margin-left:20px; background: none; border: none; padding: 5%; cursor: pointer;">
                                <img src="/assets/images/lixeira.png" />
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td class="faixa-header">N°</td>
                    <td class="faixa-header">Faixa</td>
                    <td class="faixa-header">Duração</td>
                </tr>
                @foreach ($faixas->where('id_album', $album->id_album) as $faixa)
                    <tr class="faixa-header mt-20">
                        <td>{{ $faixa->id_faixa }}</td>
                        <td>{{ $faixa->nome }}</td>
                        <td>{{ $faixa->duracao }}</td>
                        <td>
                            <form action="{{ route('excluirFaixa', ['id' => $faixa->id_faixa]) }}" method="POST"
                                onsubmit="return confirm('Tem certeza que deseja excluir essa Faixa?')">
                                @csrf
                                @method('PUT')
                                <button type="submit" title="Excluir Faixa"
                                    style="background: none; border: none; padding: 0; cursor: pointer;">
                                    <img src="/assets/images/lixeira.png" />
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    </div>
</div>

@include('componentes.footer')
