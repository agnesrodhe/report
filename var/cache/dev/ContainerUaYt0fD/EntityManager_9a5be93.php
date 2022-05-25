<?php

namespace ContainerUaYt0fD;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder16b64 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdece1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf53b2 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getConnection', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getMetadataFactory', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getExpressionBuilder', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'beginTransaction', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getCache', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'transactional', array('func' => $func), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'commit', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->commit();
    }

    public function rollback()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'rollback', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getClassMetadata', array('className' => $className), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'createQuery', array('dql' => $dql), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'createNamedQuery', array('name' => $name), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'createQueryBuilder', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'flush', array('entity' => $entity), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'clear', array('entityName' => $entityName), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->clear($entityName);
    }

    public function close()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'close', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->close();
    }

    public function persist($entity)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'persist', array('entity' => $entity), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'remove', array('entity' => $entity), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'refresh', array('entity' => $entity), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'detach', array('entity' => $entity), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'merge', array('entity' => $entity), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'contains', array('entity' => $entity), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getEventManager', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getConfiguration', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'isOpen', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getUnitOfWork', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getProxyFactory', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'initializeObject', array('obj' => $obj), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'getFilters', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'isFiltersStateClean', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'hasFilters', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return $this->valueHolder16b64->hasFilters();
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

        $instance->initializerdece1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder16b64) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder16b64 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder16b64->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, '__get', ['name' => $name], $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        if (isset(self::$publicPropertiesf53b2[$name])) {
            return $this->valueHolder16b64->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16b64;

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

        $targetObject = $this->valueHolder16b64;
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
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16b64;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder16b64;
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
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, '__isset', array('name' => $name), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16b64;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder16b64;
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
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, '__unset', array('name' => $name), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16b64;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder16b64;
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
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, '__clone', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        $this->valueHolder16b64 = clone $this->valueHolder16b64;
    }

    public function __sleep()
    {
        $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, '__sleep', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;

        return array('valueHolder16b64');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdece1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdece1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdece1 && ($this->initializerdece1->__invoke($valueHolder16b64, $this, 'initializeProxy', array(), $this->initializerdece1) || 1) && $this->valueHolder16b64 = $valueHolder16b64;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder16b64;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder16b64;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
