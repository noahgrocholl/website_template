<?php
function show_rows($category, $width, $height, $number, $divider)
{   

    $db = new Db;
    $menu_items = $db->query("SELECT * from menu_items");
    $cards = array();
    foreach ($menu_items as $item) {
        if ($item[5] == $category) {
            array_push(
                $cards,
                array(
                    '<div class="card" style="width: ' . $width . 'rem; height: ' . $height . 'rem">
                        <div class="card-header">Nummer: ' . $item[1] . '</div>
                        <div class="card-body">
                            <h5 class="card-title">' . $item[2] . '</h5>
                            <h6 class="card-subtitle mb-2 text-muted">' . $item[3] . '</h6>
                        </div>
                        <div class="card-footer">
                            <div class="text-left">'. $item[4] .'0€</div>
                        </div>
                    </div>',
                    $category, $item[1]
                )
            );
        }
    }

    $count_items = array();
    foreach ($cards as $key => $card) {
        array_push($count_items, $card);
        $count_cards = count($cards);

        if (($key + 1) % $number == 0) { ?>
            <div class="d-flex justify-content-center">
                <div class="row mb-2">
                    <?php
                    foreach ($count_items as $item) { ?>
                        <div class="col-<?= $divider ?>">

                            <?php
                            echo $item[0];
                            ?>

                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php
            $count_items = [];
        } elseif (($key + 1) == $count_cards) { ?>
            <div class="d-flex justify-content-center">
                <div class="row mb-2">
                    <?php
                    foreach ($count_items as $item) { ?>
                        <div class="col-<?= 12 / count($count_items) ?>">

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
}

?>