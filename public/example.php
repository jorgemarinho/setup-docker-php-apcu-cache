<?php

// Código de exemplo usando as funções do APCu
$valor = 'Olá, APCu!';

// Adicionar um valor ao cache
apcu_add('minha_chave', $valor);

// Armazenar um valor no cache, sobrescrevendo se já existir
apcu_store('outra_chave', 'Outro valor');

// Obter um valor do cache
$meuValor = apcu_fetch('minha_chave');
$outroValor = apcu_fetch('outra_chave');

echo $meuValor . "\n";
echo $outroValor . "\n";

// Excluir um valor do cache
apcu_delete('minha_chave');

$outroValor = apcu_fetch('minha_chave');

// Obter informações do cache
$infoCache = apcu_cache_info();

// Limpar todo o cache
apcu_clear_cache();

// Exibir os valores
echo $meuValor . "\n";
echo $outroValor . "\n";
