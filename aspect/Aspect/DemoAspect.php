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
     * Method that should be called before real method
     *
     * @param MethodInvocation $invocation Invocation
     * @Before("execution(public Application\Controller\IndexController->*(*))")
     * Before("within(Application\Controller\IndexController)")
     */
    /*public function beforeMethodExecution(MethodInvocation $invocation)
    {
        $obj = $invocation->getThis();
        echo 'Calling Before Interceptor for method: ',
             is_object($obj) ? get_class($obj) : $obj,
             $invocation->getMethod()->isStatic() ? '::' : '->',
             $invocation->getMethod()->getName(),
             '()',
             ' with arguments: ',
             json_encode($invocation->getArguments()),
             "<br>\n";
    }*/

    /**
     * Method that should be called after real method
     *
     * @param MethodInvocation $invocation Invocation
     * @After("execution(public Application\Controller\IndexController->indexAction(*))")
     */
    public function afterMethodExecution(MethodInvocation $invocation)
    {
        file_put_contents('/tmp/foo', 'foo');
    }
}
