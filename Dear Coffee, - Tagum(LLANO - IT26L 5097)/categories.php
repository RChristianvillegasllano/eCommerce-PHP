<?php
$sectionClass = "category";
?>
<section class="<?php echo $sectionClass;?>">
    <h1 class="heading">Shop by Category</h1>
    <div class="swiper category-slider">
        <div class="swiper-wrapper">
            <?php
            $categories = [
                ['name' => 'Espresso', 'image' => 'download.png'],
                ['name' => 'Non Espresso', 'image' => 'non-espresso.png'],
                ['name' => 'Hot Coffee', 'image' => 'tea-cup.png'],
                ['name' => 'Soda', 'image' => 'download (1).png'],
                ['name' => 'Sakura', 'image' => 'Sakura.png'],
            ];
            foreach ($categories as $category) {
           ?>
                <a href="category.php?category=<?= $category['name'];?>" class="swiper-slide slide">
                    <img src="images/<?= $category['image'];?>" alt="">
                    <h3><?= $category['name'];?></h3>
                </a>
            <?php
            }
           ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>