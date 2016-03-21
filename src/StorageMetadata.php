<?php

namespace As3\Modlr\Search\Elastic;

use As3\Modlr\Metadata\AttributeMetadata;
use As3\Modlr\Metadata\FieldMetadata;
use As3\Modlr\Metadata\Interfaces\MergeableInterface;
use As3\Modlr\Metadata\Interfaces\StorageLayerInterface;

/**
 * Defines the storage metadata for Elastic.
 *
 * @author Jacob Bare <jacob.bare@gmail.com>
 */
class StorageMetadata implements StorageLayerInterface
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $type;

    /**
     * Returns the client key for this search metadata.
     *
     * @return  string
     */
    public function getKey()
    {
        return Client::CLIENT_KEY;
    }

    /**
     * {@inheritDoc}
     */
    public function merge(MergeableInterface $metadata)
    {
        return $this;
    }
}
