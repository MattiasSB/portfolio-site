<head>
    <?php 
        $titleTag = $titleTag;
        $metaDescription = $metaDescription;
        $metaOGTitle = $metaOGTitle;
        $metaOGImage = $metaOGImage;
        $metaOGDescription = $metaOGDescription;
        $metaOGType = $metaOGType;
        $metaOGUrl = $metaOGUrl;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $metaDescription?>">
    <meta property="og:title" content="<?php echo $metaOGTitle?>"/>
    <meta property="og:description" content="<?php echo $metaOGDescription?>"/>
    <meta property="og:image" content="<?php echo $metaOGImage?>"/>
    <meta property="og:url" content="<?php echo $metaOGUrl?>">
    <meta property="og:type" content="<?php echo $metaOGType?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&family=Staatliches&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg" href="img/Logo.svg">
    <title>Portfolio <?php echo $titleTag?> - Mattias Bellan</title>
    <link rel="stylesheet" href="dist/css/styles.min.css?v=1.6">
</head>
