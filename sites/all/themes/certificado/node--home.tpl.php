<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php print $user_picture; ?>
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>

    <?php endif; ?>
    <div class="content contenHome"<?php print $content_attributes; ?>>
        <a href="">
            <div class="col-lg-4 contLinkHome">
                <div>
                    <?php print render($content['field_titulo_validar_certificado']); ?>
                </div>
                <div>
                    <?php
                    $content['field_imagen_validar_certificado'][0]['#item']['attributes']['class'][] = 'img-responsive';
                    print render($content['field_imagen_validar_certificado']);
                    ?>
                </div>
                <div>
                    <p><?php print render($content['field_texto_validar_certificado']); ?></p> 
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-lg-4 contLinkHome">
                <div>
                    <?php print render($content['field_titulo_validar_autorizacio']); ?>
                </div>
                <div>
                    <?php
                    $content['field_imagen_validar_autorizacio'][0]['#item']['attributes']['class'][] = 'img-responsive';
                    print render($content['field_imagen_validar_autorizacio']);
                    ?>
                </div>
                <div>
                    <?php print render($content['field_texto_validar_autorizacion']); ?>
                </div>
            </div>
        </a>
        <a href="">
            <div class="col-lg-4 contLinkHome">
                <div>
                    <?php print render($content['field_titulo_publicar']); ?>
                </div>
                <div>
                    <?php
                    $content['field_imagen_publicar'][0]['#item']['attributes']['class'][] = 'img-responsive';
                    print render($content['field_imagen_publicar']);
                    ?>
                </div>
                <div>
                    <?php print render($content['field_texto_publicar']); ?>
                </div>
            </div>
        </a>
    </div>
</div>