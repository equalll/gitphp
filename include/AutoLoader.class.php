<?php
/**
 * Class to handle autoloading other classes
 *
 * @author Christopher Han <xiphux@gmail.com>
 * @copyright Copyright (c) 2012 Christopher Han
 * @package GitPHP
 */
class GitPHP_AutoLoader
{
	/**
	 * Autoload a class
	 *
	 * @param string $classname class name
	 */
	public static function AutoLoad($classname)
	{
		$filename = GitPHP_AutoLoader::ClassFilename($classname);

		if (empty($filename))
			return;

		$path = __DIR__ . '/' . $filename;

		if (is_readable($path))
			require($path);
	}

	/**
	 * Get the path to a class
	 *
	 * @param string $classname class name
	 * @return string path
	 */
	public static function ClassFilename($classname)
	{
		if (empty($classname))
			return null;

		if (strncmp($classname, 'GitPHP_', 7) !== 0)
			return null;

		$classname = substr($classname, 7);

		$path = '';
		if (strncmp($classname, 'Controller', 10) === 0) {
			$path = 'controller/';
		} else if (strncmp($classname, 'ProjectList', 11) === 0) {
			$path = 'git/projectlist/';
		} else if (strncmp($classname, 'FileMimeType', 12) === 0) {
			$path = 'git/filemimetype/';
		} else if (strncmp($classname, 'RefList', 7) === 0) {
			$path = 'git/reflist/';
		} else if (strncmp($classname, 'TagList', 7) === 0) {
			$path = 'git/taglist/';
		} else if (strncmp($classname, 'HeadList', 8) === 0) {
			$path = 'git/headlist/';
		} else if (($classname == 'Blob') || (strncmp($classname, 'BlobLoad', 8) === 0)) {
			$path = 'git/blob/';
		} else if (($classname == 'Commit') || (strncmp($classname, 'CommitLoad', 10) === 0)) {
			$path = 'git/commit/';
		} else if (($classname == 'Tag') || (strncmp($classname, 'TagLoad', 7) === 0)) {
			$path = 'git/tag/';
		} else if (($classname == 'Tree') || (strncmp($classname, 'TreeLoad', 8) === 0)) {
			$path = 'git/tree/';
		} else if (($classname == 'Log') || (strncmp($classname, 'LogLoad', 7) === 0)) {
			$path = 'git/log/';
		} else if (strncmp($classname, 'Archive', 7) === 0) {
			$path = 'git/archive/';
		} else if (strpos($classname, 'Cache') !== false) {
			$path = 'cache/';
		} else if (in_array($classname, array(
				'Config',
				'DebugLog',
				'MessageException',
				'Resource',
				'Util'
			))) {
			$path = '';
		} else {
			$path = 'git/';
		}

		if ((strlen($classname) > 10) && (substr_compare($classname, '_Interface', -10, 10) === 0)) {
			$classname = substr($classname, 0, -10);
			$path .= $classname . '.interface.php';
		} else {
			$path .= $classname . '.class.php';
		}

		return $path;
	}

}
