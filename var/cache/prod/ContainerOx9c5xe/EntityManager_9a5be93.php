<?php

namespace ContainerOx9c5xe;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera71c9 = null;
    private $initializercf42f = null;
    private static $publicPropertiesa0e66 = [
        
    ];
    public function getConnection()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getConnection', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getMetadataFactory', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getExpressionBuilder', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'beginTransaction', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->beginTransaction();
    }
    public function getCache()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getCache', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getCache();
    }
    public function transactional($func)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'transactional', array('func' => $func), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->transactional($func);
    }
    public function commit()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'commit', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->commit();
    }
    public function rollback()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'rollback', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getClassMetadata', array('className' => $className), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'createQuery', array('dql' => $dql), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'createNamedQuery', array('name' => $name), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'createQueryBuilder', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'flush', array('entity' => $entity), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'clear', array('entityName' => $entityName), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->clear($entityName);
    }
    public function close()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'close', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->close();
    }
    public function persist($entity)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'persist', array('entity' => $entity), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'remove', array('entity' => $entity), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'refresh', array('entity' => $entity), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'detach', array('entity' => $entity), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'merge', array('entity' => $entity), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getRepository', array('entityName' => $entityName), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'contains', array('entity' => $entity), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getEventManager', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getConfiguration', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'isOpen', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getUnitOfWork', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getProxyFactory', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'initializeObject', array('obj' => $obj), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'getFilters', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'isFiltersStateClean', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'hasFilters', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return $this->valueHoldera71c9->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializercf42f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera71c9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera71c9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera71c9->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, '__get', ['name' => $name], $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        if (isset(self::$publicPropertiesa0e66[$name])) {
            return $this->valueHoldera71c9->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera71c9;
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
        $targetObject = $this->valueHoldera71c9;
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
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera71c9;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera71c9;
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
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, '__isset', array('name' => $name), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera71c9;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera71c9;
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
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, '__unset', array('name' => $name), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera71c9;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera71c9;
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
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, '__clone', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        $this->valueHoldera71c9 = clone $this->valueHoldera71c9;
    }
    public function __sleep()
    {
        $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, '__sleep', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
        return array('valueHoldera71c9');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercf42f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercf42f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializercf42f && ($this->initializercf42f->__invoke($valueHoldera71c9, $this, 'initializeProxy', array(), $this->initializercf42f) || 1) && $this->valueHoldera71c9 = $valueHoldera71c9;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera71c9;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera71c9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
