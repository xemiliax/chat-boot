<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Olá', function($bot) {
    $bot->reply('Olá! Tudo bem?');
    $bot->ask('Qual seu nome? Em que posso ajuda-lo?', function($answer, $bot) {
        $bot->say('Bem vindo! '.$answer->getText());
    });
});

$botman->listen();