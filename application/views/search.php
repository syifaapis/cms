<h2>Hasil Pencarian</h2>
<?php if (!empty($results)): ?>
    <ul>
        <?php foreach ($results as $result): ?>
            <li><?php echo $result['judul']; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Tidak ada hasil ditemukan.</p>
<?php endif; ?>