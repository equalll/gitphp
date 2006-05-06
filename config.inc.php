<?php
/*
 *  config.inc.php
 *  gitphp: A PHP git repository browser
 *  Component: Configuration
 *
 *  Copyright (C) 2006 Christopher Han <xiphux@gmail.com>
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Library General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 */

/*
 * projectroot
 * Absolute filesystem path prepended to project paths
 */
$gitphp_conf['projectroot'] = "/storage/anime3/non-anime/git";

/*
 * gitbin
 * Path to git binaries
 * (Leave blank or comment to just use $PATH)
 */
$gitphp_conf['gitbin'] = "/usr/bin";

/*
 * gittmp
 * Location for temporary files for diffs
 */
$gitphp_conf['gittmp'] = "/tmp/gitweb";

/*
 * title
 * The string that will be used as the page title
 * The variable '$gitphp_appstring' will expand to
 * the name (gitphp) and version
 */
$gitphp_conf['title'] = "gitphp :: $gitphp_appstring";

?>
