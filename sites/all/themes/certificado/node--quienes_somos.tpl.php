<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php print $user_picture; ?>
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>

    <?php endif; ?>
    <div class="content"<?php print $content_attributes; ?>>
        <div>
            <div class="col-lg-12 contTiQuiSomo">
                <div>
                    <?php print render($content['field_titulo_1_quienes_somos']); ?>
                </div>
            </div>
            <div class="col-lg-12 contImaQuienSomo">
                <div>
                    <?php
                    $content['field_imagen_1_quienes_somos'][0]['#item']['attributes']['class'][] = 'img-responsive';
                    print render($content['field_imagen_1_quienes_somos']);
                    ?>
                </div>
            </div>
            <div class="col-lg-12 contTexQuieSomos">
                <?php print render($content['field_texto_1_quienes_somos']); ?>
            </div>
        </div>

        <div>
            <div class="col-lg-12 contTiQuiSomo">
                <div>
                    <?php print render($content['field_titulo_2_quienes_somos']); ?>
                </div>
            </div>
            <div class="col-lg-12 contImaQuienSomo">
                <div>
                    <?php
                    $content['field_imagen_2_quienes_somos'][0]['#item']['attributes']['class'][] = 'img-responsive';
                    print render($content['field_imagen_2_quienes_somos']);
                    ?>
                </div>
            </div>
            <div class="col-lg-12 contTexQuieSomos textQuienSomoFin">
                <?php print render($content['field_texto_2_quienes_somos']); ?>
            </div>
        </div>
    </div>
</div>