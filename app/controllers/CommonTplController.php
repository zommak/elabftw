<?php
/**
 * app/controllers/CommonTplController.php
 *
 * @author Nicolas CARPi <nicolas.carpi@curie.fr>
 * @copyright 2012 Nicolas CARPi
 * @see http://www.elabftw.net Official website
 * @license AGPL-3.0
 * @package elabftw
 */

/**
 * Deal with ajax requests sent from the admin page
 *
 */
require_once '../../inc/common.php';

// the constructor will check for admin rights
try {
    $commonTpl = new \Elabftw\Elabftw\CommonTpl();

    // DEFAULT EXPERIMENT TEMPLATE
    if (isset($_POST['commonTplUpdate'])) {
        $commonTpl->commonTplUpdate($_POST['commonTplUpdate'], $_SESSION['team_id']);
    }

} catch (Exception $e) {
    dblog('Error', $_SESSION['userid'], $e->getMessage());
}

