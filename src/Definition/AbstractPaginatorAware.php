<?php

namespace Knp\Bundle\PaginatorBundle\Definition;

use Knp\Component\Pager\Paginator;
use Knp\Component\Pager\PaginatorInterface;

/**
 * This is a base class that can be extended if you're too lazy to implement PaginatorAwareInterface yourself.
 */
abstract class AbstractPaginatorAware implements PaginatorAwareInterface
{
    /**
     * @var Paginator
     */
    private $paginator;

    /**
     * Sets the KnpPaginator instance.
     */
    public function setPaginator(PaginatorInterface $paginator): PaginatorAwareInterface
    {
        $this->paginator = $paginator;

        return $this;
    }

    /**
     * Returns the KnpPaginator instance.
     */
    public function getPaginator(): Paginator
    {
        return $this->paginator;
    }
}
