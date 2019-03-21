<?php namespace Jenssegers\Mongodb\Relations;

use Jenssegers\Mongodb\Eloquent\Builder;

interface QueryableForExistence
{
    /**
     * Return the related keys for the relation
     *
     * @param Builder $hasQuery
     *
     * @return mixed
     */
    public function getRelatedKeys(Builder $hasQuery);
}