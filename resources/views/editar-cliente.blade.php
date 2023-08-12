<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <form method="POST" action="{{ route('cliente.update', $cadastro->id) }}">
                        @csrf
                        @method('patch')

                        </br>
                        </br>

                        <!-- Nome -->
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome', $cadastro->nome)" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Endereço -->
                        <div class="mt-4">
                            <x-input-label for="endereco" :value="__('Endereço')" />
                            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco', $cadastro->endereco)" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
                        </div>

                        <!-- Bairro -->
                        <div class="mt-4">
                            <x-input-label for="bairro" :value="__('Bairro')" />
                            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro', $cadastro->bairro)" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
                        </div>

                        <!-- CEP -->
                        <div class="mt-4">
                            <x-input-label for="cep" :value="__('CEP')" />
                            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep', $cadastro->cep)" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
                        </div>

                        <!-- Cidade -->
                        <div class="mt-4">
                            <x-input-label for="cidade" :value="__('Cidade')" />
                            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade', $cadastro->cidade)" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
                        </div>

                        <!-- Estado -->
                        <div class="mt-4">
                            <x-input-label for="estado" :value="__('Estado')" />
                            <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado', $cadastro->estado)" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Editar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>