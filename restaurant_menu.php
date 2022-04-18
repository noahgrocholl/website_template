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
                    <div class="card-body">
                        <h5 class="card-title">' . $item[2] . '</h5>
                        <h6 class="card-subtitle mb-2 text-muted">' . $item[3] . '</h6>
                    </div>
            </div>', $category
                )
            );
        }
    }
    return $items_cards;
}

function show_items($number, $divider, $width, $height)
{
    $db = new Db;
    $menu_items = $db->query("SELECT * from menu_items");

    $items_salad = create_cards($width, $height, 1);
    $items_pizza = create_cards($width, $height, 2);
    $items_pasta = create_cards($width, $height, 3);
    $items_grill = create_cards($width, $height, 4);
    $items_cards = array($items_salad, $items_pizza, $items_pasta, $items_grill);

    $items_count = array();
    foreach ($items_cards as $cards) {
        foreach ($cards as $card) {
            if (count($items_count) == $number) { ?>
                <div class="d-flex justify-content-center">
                    <div class="row mb-2">
                        <?php
                        foreach ($items_count as $item) { ?>
                            <div class="col-<?= $divider ?>">

                                <?php
                                echo $item[1];
                                ?>

                            </div>

                        <?php } ?>
                    </div>
                </div>
<?php
                $items_count = array();
            } else {
                array_push($items_count, $card);
            }
        }
    }
}
?>

<div class="d-md-none">
    <?= show_items(1, 12, 20, 9) ?>
</div>

<div class="d-none d-md-block d-xl-none">
    <?= show_items(3, 4, 14, 11) ?>
</div>

<div class="d-none d-lg-none d-xl-block">
    <?= show_items(4, 3, 16, 11) ?>
</div>

<?php
include_once "models/footer.php";
