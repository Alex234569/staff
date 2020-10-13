<ul class="<?=$cssClass?>">
    <?php foreach ($mMenu as $key => $value) : ?>
        <li><a href="<?=$mMenu[$key]['path']?>"
            <?php if(isCurrentUrl($mMenu[$key]['path'])) : ?> 
            style="text-decoration: underline"<?php endif;?>> 
            <?=$mMenu[$key]['title']?></a>
        </li>
    <?php endforeach; ?>        
</ul>
