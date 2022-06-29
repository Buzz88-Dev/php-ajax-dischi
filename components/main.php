
<?php
	foreach ($arr_dischi as $disco) { ?>
    <div class="card">
        <img src="<?= $disco['poster'] ?>" alt="<?= $disco['title'] ?>">
        <div class="text">
            <h4><?= $disco['title'] ?></h4>
            <div class="author_year">
                <div>
                    <?= $disco['author'] ?>
                </div>
                <div>
                    <?= $disco['year'] ?>
                </div>
            </div>
        </div>
    </div><?php
} ?>




