<?php 

    $contact = json_decode(file_get_contents('info.json'), true);

?>

<div class="contact flex mt-10 justify-center items-center">
    <div class="container p-3 flex flex-col justify-center items-center">
        <div class="flex justify-center items-center mb-7 flex-col">
            <h5 class="text-purple-500">Contato</h5>
            <h1 class="font-bold text-white text-2xl">Gostou do meu trabalho?</h1>
            <h3 class="text-white font-normal font-bold ">Entre em contato ou acompanhe as minhas redes sociais!</h3>
        </div>
        <div class="flex w-1/4 flex-col gap-2">
            <a class="flex w-full rounded-md p-3  justify-between items-center" href="<?php echo $contact['Contact'][0]['link'] ?>">
                <div class="flex  items-center gap-2">
                    <i class="<?php echo $contact['Contact'][0]['icon']?>"></i>
                    <span><?php echo $contact['Contact'][0]['name'];  ?></span>
                </div>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
            <a class="flex w-full rounded-md p-3  justify-between items-center" href="<?php echo $contact['Contact'][1]['link']?>">
                <div class="flex items-center gap-2">
                    <i class="<?php echo $contact['Contact'][1]['icon']?>"></i>
                    <span><?php echo $contact['Contact'][1]['name'] ?></span>
                </div>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
            <a class="flex w-ful rounded-md p-3 justify-between items-center" href="<?php echo $contact['Contact'][2]['link']?>">
                <div class="flex items-center gap-2">
                    <i class="<?php echo $contact['Contact'][2]['icon']?>"></i>
                    <span><?php echo $contact['Contact'][2]['name'] ?></span>
                </div>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
            <a class="flex w-full rounded-md p-3 justify-between items-center" href="<?php echo $contact['Contact'][3]['link']?>">
                <div class="flex items-center gap-2">
                    <i class="<?php echo $contact['Contact'][3]['icon'] ?>"></i>
                    <span> <?php echo $contact['Contact'][3]['name'] ?></span>
                </div>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
        </div>
    </div>
</div>

  <!-- "Contact": [
        {
            "name": "Github",
            "color": "green",
            "link": "https://github.com/vitorhirt"
        },
        {
            "name": "LinkedIn",
            "color": "blue",
            "link": "https://www.linkedin.com/in/vitor-hirt/"
        },
        {
            "name": "Facebook",
            "color": "blue",
            "link": "https://www.facebook.com/vitor.hirt.3"
        }
    ] -->