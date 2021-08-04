<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Sortie extends \App\Entity\Sortie implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'referenceSortie', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'prixSortie', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'libelleSortie', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'descriptionEntree', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'Commercialise', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'ImageUrl'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'referenceSortie', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'prixSortie', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'libelleSortie', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'descriptionEntree', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'Commercialise', '' . "\0" . 'App\\Entity\\Sortie' . "\0" . 'ImageUrl'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Sortie $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getReferenceSortie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferenceSortie', []);

        return parent::getReferenceSortie();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferenceSortie(string $referenceSortie): \App\Entity\Sortie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferenceSortie', [$referenceSortie]);

        return parent::setReferenceSortie($referenceSortie);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixSortie(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixSortie', []);

        return parent::getPrixSortie();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixSortie(int $prixSortie): \App\Entity\Sortie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixSortie', [$prixSortie]);

        return parent::setPrixSortie($prixSortie);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelleSortie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelleSortie', []);

        return parent::getLibelleSortie();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelleSortie(string $libelleSortie): \App\Entity\Sortie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelleSortie', [$libelleSortie]);

        return parent::setLibelleSortie($libelleSortie);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionEntree(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionEntree', []);

        return parent::getDescriptionEntree();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionEntree(string $descriptionEntree): \App\Entity\Sortie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionEntree', [$descriptionEntree]);

        return parent::setDescriptionEntree($descriptionEntree);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommercialise(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommercialise', []);

        return parent::getCommercialise();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommercialise(bool $Commercialise): \App\Entity\Sortie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommercialise', [$Commercialise]);

        return parent::setCommercialise($Commercialise);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageUrl(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageUrl', []);

        return parent::getImageUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageUrl(string $ImageUrl): \App\Entity\Sortie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageUrl', [$ImageUrl]);

        return parent::setImageUrl($ImageUrl);
    }

}
