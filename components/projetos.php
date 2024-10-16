<?php
$projetos = [
    [
        'titulo' => 'Projeto 1',
        'descricao' => 'Descrição do projeto 1.',
        'stack' => ['PHP', 'CSS', 'HTML', 'Javascript'],
        'img' => ['src' => '', 'alt' => 'Imagem do projeto 1']
    ],
    [
        'titulo' => 'Projeto 2',
        'descricao' => 'Descrição do projeto 2.',
        'stack' => ['Python', 'React', 'Node.js', 'MongoDB'],
        'img' => ['src' => '', 'alt' => 'Imagem do projeto 2']
    ],
    [
        'titulo' => 'Projeto 3',
        'descricao' => 'Descrição do projeto 3.',
        'stack' => ['Java', 'Spring Boot', 'MySQL', 'Angular'],
        'img' => ['src' => '', 'alt' => 'Imagem do projeto 3']
    ],
    [
        'titulo' => 'Projeto 4',
        'descricao' => 'Descrição do projeto 4.',
        'stack' => ['C#', '.NET', 'Azure', 'React Native'],
        'img' => ['src' => '', 'alt' => 'Imagem do projeto 4']
    ],
    [
        'titulo' => 'Projeto 5',
        'descricao' => 'Descrição do projeto 5.',
        'stack' => ['Go', 'PostgreSQL', 'Docker', 'Kubernetes'],
        'img' => ['src' => '', 'alt' => 'Imagem do projeto 5']
    ],
    [
        'titulo' => 'Projeto 6',
        'descricao' => 'Descrição do projeto 6.',
        'stack' => ['Ruby', 'Rails', 'Redis', 'GraphQL'],
        'img' => ['src' => '', 'alt' => 'Imagem do projeto 6']
    ],

];
?>

<div class="grid grid-cols-2 gap-3">
    <?php foreach ($projetos as $projeto): ?>
        <div class="bg-stone-700 rounded-xl p-3 flex space-y-3 mt-8">
            <div class="w-1/3 flex items-center justify-middle">
                <img src="<?= $projeto['img']['src'] ?>" alt="<?= $projeto['img']['alt'] ?>">
            </div>
            <div class="w-2/3">
                <div class="space-y-3 p-3">
                    <h3><?= $projeto['titulo'] ?></h3>
                    <p><?= $projeto['descricao'] ?></p>
                    <div class="flex flex-wrap gap-2">
                        <?php
                        $colors = ['lime', 'fuchsia', 'sky', 'red', 'yellow'];
                        foreach ($projeto['stack'] as $posicao => $linguagem):
                        ?>
                            <span class="bg-<?= $colors[$posicao] ?>-400 text-<?= $colors[$posicao] ?>-900 px-3 py-1 rounded-lg font-semibold"><?= $linguagem ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>