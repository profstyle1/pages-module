<?php namespace Anomaly\PagesModule\Type\Contract;

use Anomaly\Streams\Platform\Model\EloquentCollection;

/**
 * Interface TypeRepositoryInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PagesModule\Type\Contract
 */
interface TypeRepositoryInterface
{

    /**
     * Return all available page types.
     *
     * @return EloquentCollection
     */
    public function all();

    /**
     * Find a page type by ID.
     *
     * @param $id
     * @return null|TypeInterface
     */
    public function find($id);
}
