<?php

namespace ContainerPxKbMD4;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2ed46 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer670e5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties21986 = [
        
    ];

    public function getConnection()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getConnection', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getMetadataFactory', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getExpressionBuilder', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'beginTransaction', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getCache', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getCache();
    }

    public function transactional($func)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'transactional', array('func' => $func), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'wrapInTransaction', array('func' => $func), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'commit', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->commit();
    }

    public function rollback()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'rollback', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getClassMetadata', array('className' => $className), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'createQuery', array('dql' => $dql), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'createNamedQuery', array('name' => $name), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'createQueryBuilder', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'flush', array('entity' => $entity), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'clear', array('entityName' => $entityName), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->clear($entityName);
    }

    public function close()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'close', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->close();
    }

    public function persist($entity)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'persist', array('entity' => $entity), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'remove', array('entity' => $entity), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'refresh', array('entity' => $entity), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'detach', array('entity' => $entity), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'merge', array('entity' => $entity), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getRepository', array('entityName' => $entityName), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'contains', array('entity' => $entity), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getEventManager', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getConfiguration', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'isOpen', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getUnitOfWork', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getProxyFactory', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'initializeObject', array('obj' => $obj), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'getFilters', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'isFiltersStateClean', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'hasFilters', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return $this->valueHolder2ed46->hasFilters();
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

        $instance->initializer670e5 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2ed46) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2ed46 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2ed46->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, '__get', ['name' => $name], $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        if (isset(self::$publicProperties21986[$name])) {
            return $this->valueHolder2ed46->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ed46;

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

        $targetObject = $this->valueHolder2ed46;
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
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ed46;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2ed46;
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
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, '__isset', array('name' => $name), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ed46;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2ed46;
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
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, '__unset', array('name' => $name), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ed46;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2ed46;
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
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, '__clone', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        $this->valueHolder2ed46 = clone $this->valueHolder2ed46;
    }

    public function __sleep()
    {
        $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, '__sleep', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;

        return array('valueHolder2ed46');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer670e5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer670e5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer670e5 && ($this->initializer670e5->__invoke($valueHolder2ed46, $this, 'initializeProxy', array(), $this->initializer670e5) || 1) && $this->valueHolder2ed46 = $valueHolder2ed46;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2ed46;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2ed46;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
