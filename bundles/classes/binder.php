<?php
use FilesystemIterator as fIterator;

/**
 * Binder allows you to easily organize your different types of macros, validators, etc. into
 * a directory and they will be auto discovered.
 *
 * @version 1.0
 * @author Andrew Ellis (http://github.com/awellis13
 */
final class Binder {

	/**
	 * Detects and loads macros for the bundle.
	 *
	 * @static
	 * @param string $bundle
	 * @param string $directory
	 */
	public static function init($bundle = DEFAULT_BUNDLE, $directory = null)
	{
		if (is_null($directory))
		{
			$directory = Bundle::path($bundle).'binders';
		}

		$ext_length = strlen(BINDER_EXT);
		$items = new fIterator($directory, fIterator::SKIP_DOTS);
		foreach ($items as $item)
		{
			$file = $item->getRealPath();
			if ($item->isDir())
			{
				static::init($bundle, $file);
			}
			else if (substr($file, (strlen($file) - $ext_length)) === BINDER_EXT)
			{
				$binder = include_once $file;
				foreach ($binder as $key => $binders)
				{
					if (!is_array($binders)) 
					{
						list($key, $_key) = explode(' ', $key, 2);
						$binders = array($_key => $binders);
					}

					$config = Config::get('binder::binder.'.$key);
					foreach ($binders as $_key => $closure)
					{
						call_user_func_array(array($config['class'], $config['method']), array($_key, $closure));
					}
				}
			}
		}
	}

} // End Macros
