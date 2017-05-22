<!DOCTYPE html>
<html>

<head>
	<title>An HTML standard template</title>
	<meta charset="utf-8"  />
</head>

<body>
    <header>
        <h1>Zflix</h1>
    </header>
    <section id="breadcum">
        <a href="/">/</a>
    </section>
    <section>
        <p>Archivos</p>
        <?php if(empty($this->files)): ?>
            <p>No hay archivos disponibles</p>
        <?php else: ?>
            <ul>
                <?php foreach($this->files as $file): ?>
                    <li><a href="?path=<?= $file->path . '/' .  $file->file ?>"><?= $file->file ?></a></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </section>


</body>
</html>