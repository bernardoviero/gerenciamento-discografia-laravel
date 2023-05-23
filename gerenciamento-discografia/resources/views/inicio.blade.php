@include('componentes.header')

<div class="corpo-principal">
    <div class="search-container">
        @include('componentes.search')
    </div>
    <div>
        <table class="tabela-albums">
            @foreach ($albums as $album)
                <tr>
                    <td colspan="2" class="album-info">
                        Album: {{ $album->nome }}, {{ $album->ano }}
                    </td>
                    <td>
                        <a href="/excluir-album?id_album={{ $album->id_album }}"
                            onclick="return confirm('Tem certeza que deseja excluir esse Album?')" title="Excluir Album">
                            <img src="/assets/images/lixeira.png" />
                        </a>
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
                            <a href="/excluir-faixa?id_faixa={{ $faixa->id_faixa }}"
                                onclick="return confirm('Tem certeza que deseja excluir essa Faixa?')"
                                title="Excluir Faixa">
                                <img src="/assets/images/lixeira.png" />
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    </div>
</div>

@include('componentes.footer')
