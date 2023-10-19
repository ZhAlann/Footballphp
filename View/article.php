    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-20">
                <div class="article">
                    <h1 class="title is-1 is-spaced text-center mt-[20px]">Article</h1>

                    <?php
                    $i = 0;

                    echo "<div class='ligne'>";

                    while ($i < count($tableResultArticle)) {

                        // Affichage de l'article
                        echo "<br>";
                        echo "<h2>" .  $tableResultArticle[$i]->getTitre_article() . "</h2>";
                        echo "<h5>" . $tableResultArticle[$i]->getDesc_article() . "</h>";
                        echo "<br>";
                        $i++;
                    }
                    echo "</div>";
                    ?>
                </div>
            </div>
        </div>
    </div>