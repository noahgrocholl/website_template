<?php
include_once "models/db.php";
include_once "models/header.php";
include_once "models/navbar.php";
include_once "models/show_rows.php";


function show_items($number, $divider, $width, $height)
{

    # Überschrift Gesamt Vieleicht noch "Logo" als Bild
    if ($number == 1) { ?>
        <h1 style="font-family: Beau Rivage; font-size: 4rem" class="text-center">Unsere Karte</h1>
    <?php
    } elseif ($number == 3) { ?>
        <h1 style="font-family: Beau Rivage; font-size: 4rem" class="text-center">Unsere Karte</h1>
    <?php
    } elseif ($number == 4) { ?>
        <h1 style="font-family: Beau Rivage;" class="text-center">Unsere Karte</h1>
    <?php
    } ?>


    <div id="menu_salad" class="mb-1">
        <?php
        # Überschriften für Salat für unterschiedliche Größen
        if ($number == 1) { ?>
            <h2 style="font-family: Beau Rivage; font-size: 3rem" class="text-center">Salat und Frisches</h2>
        <?php
        } elseif ($number == 3) { ?>
            <h2 style="font-family: Beau Rivage; font-size: 3rem" class="text-center">Salat und Frisches</h2>
        <?php
        } elseif ($number == 4) { ?>
            <h2 style="font-family: Beau Rivage;" class="text-center">Salat und Frisches</h2>
        <?php
        }
        show_rows(1, $width, $height, $number, $divider);
        ?>
    </div>

    <div id="menu_pizza" class="mb-1">
        <?php
        # Überschriften für Pizza für unterschiedliche Größen
        if ($number == 1) { ?>
            <h2 style="font-family: Beau Rivage; font-size: 3rem" class="text-center">Pizza</h2>
        <?php
        } elseif ($number == 3) { ?>
            <h2 style="font-family: Beau Rivage; font-size: 3rem" class="text-center">Pizza</h2>
        <?php
        } elseif ($number == 4) { ?>
            <h2 style="font-family: Beau Rivage;" class="text-center">Pizza</h2>
        <?php
        }
        show_rows(2, $width, $height, $number, $divider);
        ?>
    </div>

    <div id="menu_pasta" class="mb-2">
        <?php
        # Überschriften für Pasta für unterschiedliche Größen
        if ($number == 1) { ?>
            <h2 style="font-family: Beau Rivage; font-size: 3rem" class="text-center">Pasta</h2>
        <?php
        } elseif ($number == 3) { ?>
            <h2 style="font-family: Beau Rivage; font-size: 3rem" class="text-center">Pasta</h2>
        <?php
        } elseif ($number == 4) { ?>
            <h2 style="font-family: Beau Rivage;" class="text-center">Pasta</h2>
        <?php
        }
        show_rows(3, $width, $height, $number, $divider);
        ?>
    </div>

    <div id="menu_grill" class="mb-2">
        <?php
        # Überschriften für Grill für unterschiedliche Größen
        if ($number == 1) { ?>
            <h2 style="font-family: Beau Rivage; font-size: 3rem" class="text-center">Gegrilltes</h2>
        <?php
        } elseif ($number == 3) { ?>
            <h2 style="font-family: Beau Rivage; font-size: 3rem" class="text-center">Gegrilltes</h2>
        <?php
        } elseif ($number == 4) { ?>
            <h2 style="font-family: Beau Rivage;" class="text-center">Gegrilltes</h2>
        <?php
        }
        show_rows(4, $width, $height, $number, $divider); 
        ?>
    </div>


<?php
}
?>

<div class="d-md-none">
    <?= show_items(1, 12, 20, 13) ?>
</div>

<div class="d-none d-md-block d-xl-none">
    <?= show_items(3, 4, 14, 15) ?>
</div>

<div class="d-none d-lg-none d-xl-block">
    <?= show_items(4, 3, 16, 15) ?>
</div>

<?php
include_once "models/footer.php";
