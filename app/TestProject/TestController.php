<?php
/**
 * Created by Chris Noden using JetBrains PhpStorm.
 *
 * @author Chris Noden, @chrisnoden
 * @copyright (c) 2009 to 2013 Chris Noden
 */

namespace TestProject;

use Synergy\Controller\Controller;
use Synergy\Logger\Logger;
use Synergy\View\SmartyTemplate;
use Synergy\View\TwigTemplate;
use Synergy\Project\Web\WebResponse;


class TestController extends Controller
{

    public function fooAction($name)
    {
//        $template = new SmartyTemplate();
//        $template->setTemplateFile('foo.html.tpl');
//        return $template;
        $template = new TwigTemplate();
        $template->setTemplateFile('foo.html.twig');
        return $template;
//        return new WebResponse("Foo Here<br/>Hello $name");
    }

    public function mobileAction()
    {
        return new WebResponse("Non-descript Mobile Detected");
    }

    public function iosAction()
    {
        return new WebResponse("iOS Mobile Detected");
    }

    public function cliAction()
    {
        Logger::info("Houston, we have lift off");

        return '%CHello there%n';
    }

}
