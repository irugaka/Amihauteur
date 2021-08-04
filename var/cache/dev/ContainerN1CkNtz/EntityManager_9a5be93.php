<?php

namespace ContainerN1CkNtz;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5fedf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7daf1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties07930 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getConnection', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getMetadataFactory', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getExpressionBuilder', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'beginTransaction', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getCache', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'transactional', array('func' => $func), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->transactional($func);
    }

    public function commit()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'commit', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->commit();
    }

    public function rollback()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'rollback', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getClassMetadata', array('className' => $className), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'createQuery', array('dql' => $dql), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'createNamedQuery', array('name' => $name), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'createQueryBuilder', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'flush', array('entity' => $entity), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'clear', array('entityName' => $entityName), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->clear($entityName);
    }

    public function close()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'close', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->close();
    }

    public function persist($entity)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'persist', array('entity' => $entity), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'remove', array('entity' => $entity), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'refresh', array('entity' => $entity), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'detach', array('entity' => $entity), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'merge', array('entity' => $entity), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'contains', array('entity' => $entity), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getEventManager', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getConfiguration', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'isOpen', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getUnitOfWork', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getProxyFactory', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'initializeObject', array('obj' => $obj), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'getFilters', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'isFiltersStateClean', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'hasFilters', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return $this->valueHolder5fedf->hasFilters();
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

        $instance->initializer7daf1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5fedf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5fedf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5fedf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, '__get', ['name' => $name], $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        if (isset(self::$publicProperties07930[$name])) {
            return $this->valueHolder5fedf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fedf;

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

        $targetObject = $this->valueHolder5fedf;
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
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fedf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5fedf;
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
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, '__isset', array('name' => $name), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fedf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5fedf;
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
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, '__unset', array('name' => $name), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5fedf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5fedf;
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
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, '__clone', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        $this->valueHolder5fedf = clone $this->valueHolder5fedf;
    }

    public function __sleep()
    {
        $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, '__sleep', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;

        return array('valueHolder5fedf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7daf1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7daf1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7daf1 && ($this->initializer7daf1->__invoke($valueHolder5fedf, $this, 'initializeProxy', array(), $this->initializer7daf1) || 1) && $this->valueHolder5fedf = $valueHolder5fedf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5fedf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5fedf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
