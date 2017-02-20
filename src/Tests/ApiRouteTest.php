<?php

namespace Tests;

/**
 * Api Route Test
 */
class ApiRouteTest extends \PHPUnit_Framework_TestCase
{
    protected $router;
    protected $settings;
    protected $packageName;

    protected function setUp()
    {
        define('RAPID_IN', TRUE);
        define( 'INDEX_PATH', '/' );

        // Include metadata array
        $this->settings = include_once dirname(__DIR__) . '/metadata/vendor.php';
        // Init Router Class
        include_once dirname(__DIR__) . '/Core/Router.php';
        $this->router = new \Core\Router($this->settings['package'], $this->settings['blocks'], $this->settings['custom']);
        // Config Router
        $this->router->setup();
    }

    public function testRouts()
    {
        // Init Blocks path
        $routes = [
            ['route' => '/api/' . $this->settings['package'] . '/', 'method' => 'GET'],
        ];
        foreach($this->settings['custom'] as $blockName => $block){
            $routes[] = ['route' => '/api/' . $this->settings['package'] . '/' . $blockName . '/'];
        }

        // Beautify output
        print("\n");
        foreach($routes as $route){
            $method = isset($route['method'])?$route['method']:'POST';
            ob_start(function ($buffer) {
            });
            // Run router
            $this->router->run(new \Klein\Request([], [], [], [
                'REQUEST_METHOD' => $routes[0]['method'],
                'REQUEST_URI' => $routes[0]['route']
            ], [], null));
            ob_end_flush();

            // Output Test info
            print($this->router->getRouter()->response()->code() . ' - ' . $route['route'] . "\n");
            // Check status 200
            $this->assertEquals(200, $this->router->getRouter()->response()->code());
        }
        // Beautify output
        print("\n");
    }
}