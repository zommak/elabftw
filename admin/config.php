<?php
/********************************************************************************
*                                                                               *
*   Copyright 2012 Nicolas CARPi (nicolas.carpi@gmail.com)                      *
*   http://www.elabftw.net/                                                     *
*                                                                               *
********************************************************************************/

/********************************************************************************
*  This file is part of eLabFTW.                                                *
*                                                                               *
*    eLabFTW is free software: you can redistribute it and/or modify            *
*    it under the terms of the GNU Affero General Public License as             *
*    published by the Free Software Foundation, either version 3 of             *
*    the License, or (at your option) any later version.                        *
*                                                                               *
*    eLabFTW is distributed in the hope that it will be useful,                 *
*    but WITHOUT ANY WARRANTY; without even the implied                         *
*    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR                    *
*    PURPOSE.  See the GNU Affero General Public License for more details.      *
*                                                                               *
*    You should have received a copy of the GNU Affero General Public           *
*    License along with eLabFTW.  If not, see <http://www.gnu.org/licenses/>.   *
*                                                                               *
********************************************************************************/
// admin/config.php -- main configuration file for eLabFTW

/*
 * General settings
 */

// The name of the lab (shown in the footer)
define('LAB_NAME', 'devlab');

// if set to 1, user account will need admin validation before being able to login
define('ADMIN_VALIDATE', 0);

// the name of the custom link in menu
define('LINK_NAME', 'Wiki');

// the URL of the custom link
define('LINK_HREF', 'http://bio6.curie.fr/wiki');

// the path of the install (absolute path) WITHOUT TRAILING SLASH
// on Windows it should be : 'C:\xampp\htdocs\elabftw'
// on GNU/Linux it might be : '/var/www/elabftw'
define('PATH', '/srv/http/elabftw');

// activate debug mode or not
define('DEBUG', false);

// proxy setting (to get updates)
define('PROXY', 'www-cache.curie.fr:3128');


/*
 * Database settings
 */

// Host (generally localhost)
define('DB_HOST', 'localhost');

// Name of the database
define('DB_NAME', 'elabftw2');

// SQL username
define('DB_USER', 'elabftw');

// SQL Password
define('DB_PASSWORD', 'WsrcaVnzCEQTabbN');


/*
 * Email settings
 * You can leave these settings for later, because for the moment, 
 * they are only use when someone requests a new password.
 * You can use a free gmail account for this, but you can also use your company's SMTP server.
 */

// SMTP server address
define('SMTP_ADDRESS', 'smtp.gmail.com');

// Port
define('SMTP_PORT', '587');

// Can be 'tls' or 'ssl'
define('SMTP_ENCRYPTION', 'tls');

// Username
define('SMTP_USERNAME', 'oobahmarsu@gmail.com');

// Password
define('SMTP_PASSWORD', 'OsefOsef');
