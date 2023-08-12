<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listra Cliente') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border" scope="col">Nome</th>
                                <th class="px-4 py-2 border" scope="col">Endereço</th>
                                <th class="px-4 py-2 border" scope="col">Bairro</th>
                                <th class="px-4 py-2 border" scope="col">CEP</th>
                                <th class="px-4 py-2 border" scope="col">Cidade</th>
                                <th class="px-4 py-2 border" scope="col">Estado</th>
                                <th class="px-4 py-2 border" scope="col">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if (!empty($cadastros[0]))
                            @foreach ($cadastros as $cadastro)
                            <tr>
                                <td class="px-4 py-2 border">{{$cadastro->nome}}</td>
                                <td class="px-4 py-2 border">{{$cadastro->endereco}}</td>
                                <td class="px-4 py-2 border">{{$cadastro->bairro}}</td>
                                <td class="px-4 py-2 border">{{$cadastro->cep}}</td>
                                <td class="px-4 py-2 border">{{$cadastro->cidade}}</td>
                                <td class="px-4 py-2 border">{{$cadastro->estado}}</td>
                                <td class="px-4 py-2 border">
                                    <a href="{{ route('cliente.edita', $cadastro->id) }}">
                                        <button class="btn btn-primary">
                                        Editar
                                        </button>
                                    </a>

                                    @include('partials.cadastro-delete')
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td class="px-4 py-2 border text-center text-red-500" colspan="7">Nenhum cliente cadastrado.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>