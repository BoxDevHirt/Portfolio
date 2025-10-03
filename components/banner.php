<?php 

    $banner = json_decode(file_get_contents('info.json'), true);

?>
<div class="flex bg-banner w-full justify-center items-center h-250">
    <div class="flex px-10 justify-center items-center flex-col">
        <div class="w-40 mb-10 flex justify-center align-center h-40 bg-white border-red-300 rounded-full">
            <span class="bg-blue flex align-center justify-center">
                <img class="rounded-full" src="<?php echo $banner['banner']['image']; ?>" alt="<?php echo $banner['banner']['imageAlt']; ?>" />
            </span>
        </div>
        <div class="flex info leading-7 justify-center align-center flex-col w-2/4">
            <h3 class="text-center text-gray-300 mt-10 text-1xl mt-5"><?php echo $banner['banner']['title']; ?></h3>
            <h1 class="text-center text-gray-300 text-5xl font-bold mt-5"><?php echo $banner['banner']['subtitle']; ?></h1>
            <p class="text-center text-gray-500 mt-5">
                <?php echo $banner['banner']['description']; ?>
            </p>
        </div>
        <div class="flex mt-15 gap-2 justify-center flex-wrap align-center">
            <?php foreach ($banner['banner']['tags'] as $tag) : ?>
                <span class="w-30 font-bold text-center bg-<?php echo $tag['color']; ?>-500 p-2 rounded-full"><?php echo $tag['name']; ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</div>