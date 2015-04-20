<?php
/**
 * Go! OOP&AOP PHP framework
 *
 * @copyright     Copyright 2012, Lissachenko Alexander <lisachenko.it@gmail.com>
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

namespace Aspect;

use Go\Aop\Aspect;
use Go\Aop\Intercept\FieldAccess;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\After;
use Go\Lang\Annotation\AfterThrowing;
use Go\Lang\Annotation\Before;
use Go\Lang\Annotation\Around;
use Go\Lang\Annotation\Pointcut;

/**
 * Debug aspect
 */
class DemoAspect implements Aspect
{

    /**
     * Method that should be called after real method
     *
     * @param MethodInvocation $invocation Invocation
     * @After("execution(public IndexController->*(*))")
     */
    public function afterMethodExecution(MethodInvocation $invocation)
    {
        file_put_contents('/tmp/foo', 'foo');
    }
}
