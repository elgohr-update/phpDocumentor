<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link http://phpdoc.org
 */

namespace phpDocumentor\Descriptor\Exception;

use RuntimeException;

/**
 * This exception is thrown when a required dependency is not included.
 */
class MissingDependencyException extends RuntimeException
{
}
