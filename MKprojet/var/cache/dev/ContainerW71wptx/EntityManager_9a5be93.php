<?php

namespace ContainerW71wptx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercb7d7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc3337 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties70f0f = [
        
    ];

    public function getConnection()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getConnection', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getMetadataFactory', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getExpressionBuilder', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'beginTransaction', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getCache', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'transactional', array('func' => $func), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'commit', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->commit();
    }

    public function rollback()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'rollback', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getClassMetadata', array('className' => $className), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'createQuery', array('dql' => $dql), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'createNamedQuery', array('name' => $name), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'createQueryBuilder', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'flush', array('entity' => $entity), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'clear', array('entityName' => $entityName), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->clear($entityName);
    }

    public function close()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'close', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->close();
    }

    public function persist($entity)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'persist', array('entity' => $entity), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'remove', array('entity' => $entity), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'refresh', array('entity' => $entity), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'detach', array('entity' => $entity), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'merge', array('entity' => $entity), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'contains', array('entity' => $entity), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getEventManager', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getConfiguration', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'isOpen', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getUnitOfWork', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getProxyFactory', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'initializeObject', array('obj' => $obj), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'getFilters', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'isFiltersStateClean', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'hasFilters', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return $this->valueHoldercb7d7->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc3337 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldercb7d7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercb7d7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercb7d7->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, '__get', ['name' => $name], $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        if (isset(self::$publicProperties70f0f[$name])) {
            return $this->valueHoldercb7d7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb7d7;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercb7d7;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb7d7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercb7d7;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, '__isset', array('name' => $name), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb7d7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercb7d7;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, '__unset', array('name' => $name), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb7d7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercb7d7;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, '__clone', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        $this->valueHoldercb7d7 = clone $this->valueHoldercb7d7;
    }

    public function __sleep()
    {
        $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, '__sleep', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;

        return array('valueHoldercb7d7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc3337 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc3337;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc3337 && ($this->initializerc3337->__invoke($valueHoldercb7d7, $this, 'initializeProxy', array(), $this->initializerc3337) || 1) && $this->valueHoldercb7d7 = $valueHoldercb7d7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercb7d7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercb7d7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
