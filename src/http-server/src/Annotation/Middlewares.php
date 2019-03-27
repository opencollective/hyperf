<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\HttpServer\Annotation;

use Hyperf\Di\Annotation\AbstractAnnotation;

/**
 * @Annotation
 * @Target({"ALL"})
 */
class Middlewares extends AbstractAnnotation
{
    /**
     * @var array
     */
    public $middlewares = [];

    public function __construct($value = null)
    {
        $this->bindMainProperty('middlewares', $value);
    }
}