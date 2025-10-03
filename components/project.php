<?php 

    $projects = json_decode(file_get_contents('info.json'), true);

?>

<div class="flex justify-center items-center">
    <div class="container justify-center items-center">
        <div class="flex justify-center p-3 items-center mb-7 flex-col">
            <h3 class="text-red-400 font-normal text-1xl font-bold">Meu Trabalho</h3>
            <h1 class="text-white font-bold text-2xl">Veja os projetos em destaque</h1>
        </div>
        <div class="grid grid-cols-2 project-flex p-2 justify-center gap-4 ">
            <?php foreach ($projects['Projects'] as $project) : ?>
                <a href="#" class="project flex rounded-xl p-5 w-auto justify-center gap-4">
                    <div class="flex w-full justify-center">
                        <img class="rounded-xl object-cover h-auto" src="https://placehold.co/600x400" alt="Projeto 1">
                    </div>
                    <div class="flex flex-col w-full justify-between">
                        <h3 class="text-white font-bold text-1xl mb-2"><?php echo $project['title']; ?></h3>
                        <p class="text-gray-500">
                            <?php echo $project['description']; ?>
                        </p>
                        <div class="mt-5 flex gap-2 flex-wrap">
                            <?php foreach ($project['tags'] as $tag) : ?>
                                <span class="w-auto font-bold text-center bg-<?php echo $tag['color']; ?>-500 p-2 rounded-lg"><?php echo $tag['name']; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>