<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="mx-auto max-w-screen-lg bg-zinc-900 text-slate-500">
    <header class="flex justify-center">
        <div class="py-20">
            <img src="./assets/Captura de tela 2024-10-15 215711.png" alt="imagem" class="h-60 w-60 rounded-full object-cover">
        </div>
    </header>

    <main class="mx-auto max-w-screen-lg px-3 flex flex-col justify-center">
        <?php include('./components/hero.php'); ?>

        <section>
            <h3 class="text-red-400 text-center">Meu trabalho</h3>
            <h2 class="text-sky-50 font-semibold text-lg text-center">Veja os projetos em destaque</h2>
            <?php include('./components/projetos.php') ?>
        </section>
    </main>

    <footer class="mx-auto max-w-screen-lg mt-20">
        <div class="border-t py-3 px-4 text-sm text-slate-500">
            <p>© Copyright 2024. Feito por Miguel</p>
        </div>
    </footer>
</body>

</html>