<?php
/**
 * Copyright (c) 2014 Michael Dowling, https://github.com/mtdowling
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace DTS\eBaySDK\JmesPath;

/**
 * Provides a simple environment based search.
 *
 * The runtime utilized by the Env class can be customized via environment
 * variables. If the JP_PHP_COMPILE environment variable is specified, then the
 * CompilerRuntime will be utilized. If set to "on", JMESPath expressions will
 * be cached to the system's temp directory. Set the environment variable to
 * a string to cache expressions to a specific directory.
 */
final class Env
{
    const COMPILE_DIR = 'JP_PHP_COMPILE';

    /**
     * Returns data from the input array that matches a JMESPath expression.
     *
     * @param string $expression JMESPath expression to evaluate
     * @param mixed  $data       JSON-like data to search
     *
     * @return mixed|null Returns the matching data or null
     */
    public static function search($expression, $data)
    {
        static $runtime;
        if (!$runtime) {
            $runtime = Env::createRuntime();
        }
        return $runtime($expression, $data);
    }

    /**
     * Creates a JMESPath runtime based on environment variables and extensions
     * available on a system.
     *
     * @return callable
     */
    public static function createRuntime()
    {
        switch ($compileDir = getenv(self::COMPILE_DIR)) {
            case false: return new AstRuntime();
            case 'on': return new CompilerRuntime();
            default: return new CompilerRuntime($compileDir);
        }
    }

    /**
     * Delete all previously compiled JMESPath files from the JP_COMPILE_DIR
     * directory or sys_get_temp_dir().
     *
     * @return int Returns the number of deleted files.
     */
    public static function cleanCompileDir()
    {
        $total = 0;
        $compileDir = getenv(self::COMPILE_DIR) ?: sys_get_temp_dir();
        foreach (glob("{$compileDir}/jmespath_*.php") as $file) {
            $total++;
            unlink($file);
        }

        return $total;
    }
}
