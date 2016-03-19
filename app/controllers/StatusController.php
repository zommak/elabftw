<?php
/**
 * app/controllers/StatusController.php
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
    $status = new \Elabftw\Elabftw\Status();

    // CREATE STATUS
    if (isset($_POST['statusCreate'])) {
        $status->create($_POST['statusName'], $_POST['statusColor'], $_SESSION['team_id']);
    }

    // UPDATE STATUS
    if (isset($_POST['statusUpdate'])) {
        $status->update(
            $_POST['statusId'],
            $_POST['statusName'],
            $_POST['statusColor'],
            $_POST['statusDefault'],
            $_SESSION['team_id']
        );
    }

} catch (Exception $e) {
    dblog('Error', $_SESSION['userid'], $e->getMessage());
}
