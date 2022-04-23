<?php
include_once "models/db.php";
include_once "models/header.php";
include_once "models/navbar.php";


function create_cards($width, $height, $category)
{
    $db = new Db;
    $menu_items = $db->query("SELECT * from menu_items");
    $items_cards = array();
    foreach ($menu_items as $item) {
        if ($item[5] == $category) {
            array_push(
                $items_cards,
                array(
                    '<div class="card" style="width: ' . $width . 'rem; height: ' . $height . 'rem">
                        <div class="card-header">Nummer: ' . $item[1] . '</div>
                        <div class="card-body">
                            <h5 class="card-title">' . $item[2] . '</h5>
                            <h6 class="card-subtitle mb-2 text-muted">' . $item[3] . '</h6>
                        </div>
                    </div>',
                    $category, $item[1]
                )
            );
        }
    }
    return $items_cards;
}

function create_rows($number, $key, $card, $divider, $count_cards_salad)
{
    $count_items = array();
    if ($number == 3) {
        $m = $count_cards_salad % $number;
        array_push($count_items, $card);
        if (($key + 1) % $number == 0) {
            foreach ($count_items  as $item) { ?>
                <div class="col-<?= $divider ?>">

                    <?php
                    echo $item[0];
                    ?>

                </div>
            <?php } ?>
            <?php
            $count_items = [];
        } elseif (($key + 1) > ($count_cards_salad - $m)) {
            foreach ($count_items  as $item) { ?>
                <div class="col-<?= $divider ?>">

                    <?php
                    echo $item[0];
                    ?>

                </div>
            <?php } ?>

        <?php
        }
    }
}


function show_items($number, $divider, $width, $height)
{
    $items_salad = create_cards($width, $height, 1);
    $items_pizza = create_cards($width, $height, 2);
    $items_pasta = create_cards($width, $height, 3);
    $items_grill = create_cards($width, $height, 4);

    # Überschrift Gesamt Vieleicht noch "Logo" als Bild
    if ($number == 1) { ?>
        <h1 style="font-family: Beau Rivage; font-size: 3rem" class="text-center">Unsere Karte</h1>
    <?php
    } elseif ($number == 3) { ?>
        <h1 style="font-family: Beau Rivage; font-size: 3rem" class="text-center">Unsere Karte</h1>
    <?php
    } elseif ($number == 4) { ?>
        <h1 style="font-family: Beau Rivage;" class="text-center">Unsere Karte</h1>
    <?php
    }

    ?>
    <div id="menu_salad" class="mb-4">
        <?php
        # Überschriften für Salat für unterschiedliche Größen
        if ($number == 1) { ?>
            <h2 style="font-family: Beau Rivage;" class="text-center">Salat und Frisches</h2>
        <?php
        } elseif ($number == 3) { ?>
            <h2 style="font-family: Beau Rivage;" class="text-center">Salat und Frisches</h2>
        <?php
        } elseif ($number == 4) { ?>
            <h2 style="font-family: Beau Rivage;" class="text-center">Salat und Frisches</h2>
            <?php
        }

        $count_items_salad = array();
        foreach ($items_salad as $key => $card) {
            array_push($count_items_salad, $card);
            $count_cards_salad = count($items_salad);


            $m_salad = $count_cards_salad % $number;
            if (($key + 1) % $number == 0) { ?>
                <div class="d-flex justify-content-center">
                    <div class="row mb-2">
                        <?php
                        foreach ($count_items_salad as $item) { ?>
                            <div class="col-<?= $divider ?>">

                                <?php
                                echo $item[0];
                                ?>

                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php
                $count_items_salad = [];
            } elseif (($key + 1) == $count_cards_salad) { ?>
                <div class="d-flex justify-content-center">
                    <div class="row mb-2">
                        <?php
                        foreach ($count_items_salad  as $item) { ?>
                            <div class="col-<?= $divider ?>">

                                <?php
                                echo $item[0];
                                ?>

                            </div>
                        <?php } ?>
                    </div>
                </div>
        <?php

            }
        }
        ?>
    </div>

    <div id="menu_pizza" class="mb-2">
        <?php
        # Überschriften für Pizza für unterschiedliche Größen
        if ($number == 1) { ?>
            <h2 style="font-family: Beau Rivage;" class="text-center">Pizza</h2>
        <?php
        } elseif ($number == 3) { ?>
            <h2 style="font-family: Beau Rivage;" class="text-center">Pizza</h2>
        <?php
        } elseif ($number == 4) { ?>
            <h2 style="font-family: Beau Rivage;" class="text-center">Pizza</h2>
            <?php
        }

        $count_items_pizza = array();
        foreach ($items_pizza as $key => $card) {
            array_push($count_items_pizza, $card);
            $count_cards_pizza = count($items_pizza);

            $m_pizza = $count_cards_pizza % $number;
            if (($key + 1) % $number == 0) { ?>
                <div class="d-flex justify-content-center">
                    <div class="row mb-2">
                        <?php
                        foreach ($count_items_pizza as $item) { ?>
                            <div class="col-<?= $divider ?>">

                                <?php
                                echo $item[0];
                                ?>

                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php
                $count_items_pizza = [];
            } elseif (($key + 1) == $count_cards_pizza) { ?>
                <div class="d-flex justify-content-center">
                    <div class="row mb-2">
                        <?php
                        foreach ($count_items_pizza  as $item) { ?>
                            <div class="col-<?= $divider ?>">

                                <?php
                                echo $item[0];
                                ?>

                            </div>
                        <?php } ?>
                    </div>
                </div>
        <?php

            }
        }
        ?>
    </div>
<?php
}

?>

<div class="d-md-none">
    <?= show_items(1, 12, 20, 10) ?>
</div>

<div class="d-none d-md-block d-xl-none">
    <?= show_items(3, 4, 14, 13) ?>
</div>

<div class="d-none d-lg-none d-xl-block">
    <?= show_items(4, 3, 16, 11) ?>
</div>

<?php
include_once "models/footer.php";
