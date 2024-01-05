<?php
if(get_post_type() == "marque"){

    $id_marque = get_the_ID();
    global $id_marque;

    if($id_marque == 1571){
        include(locate_template('template/single/tornado-home.php'));
    }
    else{
        include(locate_template('template/single/marque.php'));
    }

}
elseif(get_post_type() == "post"){

    include(locate_template('template/single/post.php'));

}
elseif(get_post_type() == "produit"){

    $id_marque = get_field('marque_produit');
    $id_marque = $id_marque[0];
    $id_produit = get_the_ID();
    global $id_produit;

    if($id_marque == 1571){
        include(locate_template('template/single/produit-tornado.php'));
    }
    else{
        include(locate_template('template/single/produit.php'));
    }

}