<?php
    include_once('../abs_path.php');
    include_once(ABSPATH . '/includes/session.php');
    include_once(ABSPATH. '/database/db_stories.php');

    $stories = get_all_stories_from_user(2); // é preciso meter aqui o id do user que se quer ver o profile

    include(ABSPATH . '/templates/common/header.php');
    include(ABSPATH . '/templates/profiles.php');
    include(ABSPATH . '/templates/common/footer.php');
?>
