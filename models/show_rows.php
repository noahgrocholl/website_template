<?php
function fill_rows($items, $number, $divider)
{   echo "test";
    $count_items = array();
    foreach ($items as $key => $card) {
        array_push($count_items, $card);
        $count_cards = count($items);

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