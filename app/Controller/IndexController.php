<?php

declare(strict_types=1);
/**
 * ^2_3^ This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

/**
 * 默认控制器
 * Class IndexController
 * @package App\Controller
 * @author ^2_3^王尔贝
 */
class IndexController extends AbstractController
{
    /**
     * 默认方法
     * @return array
     * @author ^2_3^王尔贝
     */
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}. ^2_3^",
        ];
    }
}
