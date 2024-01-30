<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * A Dagger module.
 */
class Module extends Client\AbstractObject implements Client\IdAble
{
    public function dependencies(): array
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('dependencies');
        return (array)$this->queryLeaf($leafQueryBuilder, 'dependencies');
    }

    public function dependencyConfig(): array
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('dependencyConfig');
        return (array)$this->queryLeaf($leafQueryBuilder, 'dependencyConfig');
    }

    public function description(): string
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('description');
        return (string)$this->queryLeaf($leafQueryBuilder, 'description');
    }

    /**
     * The module's root directory containing the config file for it and its source (possibly as a subdir). It includes any generated code or updated config files created after initial load, but not any files/directories that were unchanged after sdk codegen was run.
     */
    public function generatedSourceRootDirectory(): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('generatedSourceRootDirectory');
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * A unique identifier for this Module.
     */
    public function id(): ModuleId
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('id');
        return new \Dagger\ModuleId((string)$this->queryLeaf($leafQueryBuilder, 'id'));
    }

    /**
     * Retrieves the module with the objects loaded via its SDK.
     */
    public function initialize(): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('initialize');
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    public function interfaces(): array
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('interfaces');
        return (array)$this->queryLeaf($leafQueryBuilder, 'interfaces');
    }

    public function name(): string
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('name');
        return (string)$this->queryLeaf($leafQueryBuilder, 'name');
    }

    public function objects(): array
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('objects');
        return (array)$this->queryLeaf($leafQueryBuilder, 'objects');
    }

    public function sdk(): string
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('sdk');
        return (string)$this->queryLeaf($leafQueryBuilder, 'sdk');
    }

    /**
     * Serve a module's API in the current session.
     *
     * Note: this can only be called once per session. In the future, it could return a stream or service to remove the side effect.
     */
    public function serve(): void
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('serve');
        $this->queryLeaf($leafQueryBuilder, 'serve');
    }

    public function source(): ModuleSource
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('source');
        return new \Dagger\ModuleSource($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Update the module configuration to use the given dependencies.
     */
    public function withDependencies(array $dependencies): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withDependencies');
        $innerQueryBuilder->setArgument('dependencies', $dependencies);
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves the module with the given description
     */
    public function withDescription(string $description): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withDescription');
        $innerQueryBuilder->setArgument('description', $description);
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * This module plus the given Interface type and associated functions
     */
    public function withInterface(TypeDefId|TypeDef $iface): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withInterface');
        $innerQueryBuilder->setArgument('iface', $iface);
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Update the module configuration to use the given name.
     */
    public function withName(string $name): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withName');
        $innerQueryBuilder->setArgument('name', $name);
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * This module plus the given Object type and associated functions.
     */
    public function withObject(TypeDefId|TypeDef $object): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withObject');
        $innerQueryBuilder->setArgument('object', $object);
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Update the module configuration to use the given SDK.
     */
    public function withSDK(string $sdk): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withSDK');
        $innerQueryBuilder->setArgument('sdk', $sdk);
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves the module with basic configuration loaded if present.
     */
    public function withSource(ModuleSourceId|ModuleSource $source): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('withSource');
        $innerQueryBuilder->setArgument('source', $source);
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }
}
