<?php
$usuarios = [
    [
        'nome' => 'Miguel',
        'stack' => 'PHP',
        'stacks' => ['GitHub', 'PHP', 'HTML', 'Javascript'],
        'descricao' => 'Atualmente, trabalho como desenvolvedor na AgileSaaS, uma startup recém-fundada. Tenho sólida experiência em desenvolvimento com PHP, além de um amplo conhecimento em bancos de dados como MySQL e SQLite. Também possuo habilidades front-end com HTML, Tailwind CSS e React, o que me permite colaborar em diversas etapas do desenvolvimento de soluções web completas, desde a criação da interface do usuário até a integração com o backend e o banco de dados.'
    ]
]
?>

<section class="text-center">
    <?php foreach ($usuarios as $usuario): ?>
        <h3>Olá! Meu nome é <span class="font-bold text-red-400"><?= $usuario['nome'] ?></span> e sou</h3>
        <h1 class="font-bold text-4xl">Desenvolvedor <?= $usuario['stack'] ?></h1>
        <p class="py-3"><?= $usuario['descricao'] ?></p>
        <div class="py-10 space-x-2">
            <?php
            $colors = ['lime', 'fuchsia', 'sky', 'red', 'yellow'];
            foreach ($usuario['stacks'] as $posicao => $linguagem):
            ?>
                <span class="bg-<?= $colors[$posicao] ?>-400 text-<?= $colors[$posicao] ?>-900 px-4 py-1 rounded-lg font-semibold"><?= $linguagem ?></span>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</section>