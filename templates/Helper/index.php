<h1>Helpers</h1>
<ul>
    <?php foreach ($helper as $number) : ?>
        <li><?= __('{0} item{1}', $number, $this->Helper->addSIfNeeded($number)); ?></li>
    <?php endforeach; ?>
</ul>