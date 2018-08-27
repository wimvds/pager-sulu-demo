<?php

namespace Demo\Controller;

use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;
use Sulu\Bundle\WebsiteBundle\Controller\WebsiteController;
use Sulu\Component\Content\Compat\StructureInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PagerController
 * @package Demo\Controller
 */
class PagerController extends WebsiteController
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function __invoke(
        StructureInterface $structure,
        $attributes = [],
        $preview = false,
        $partial = false
    ) {
        $pager = $this->getDummyPager();

        return $this->renderStructure(
            $structure,
            [
                'pager' => $pager,
            ],
            $preview,
            $partial
        );
    }

    /**
     * @return Pagerfanta
     */
    private function getDummyPager()
    {
        return new Pagerfanta(new ArrayAdapter(range(1, 100, 1)));
    }
}
