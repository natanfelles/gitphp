<?php
/*
 *  gitutil.git_ls_tree.php
 *  gitphp: A PHP git repository browser
 *  Component: Git utility - list tree
 *
 *  Copyright (C) 2008 Christopher Han <xiphux@gmail.com>
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

 include_once('defs.commands.php');

function git_ls_tree($proj,$hash,$nullterm = FALSE)
{
	global $gitphp_conf;
	$cmd = "env GIT_DIR=" . $proj . " " . $gitphp_conf['gitbin'] . GIT_LS_TREE;
	if ($nullterm)
		$cmd .= " -z";
	return shell_exec($cmd . " " . $hash);
}

?>
