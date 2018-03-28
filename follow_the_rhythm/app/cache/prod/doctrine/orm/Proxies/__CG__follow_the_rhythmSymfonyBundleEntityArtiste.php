<?php

namespace Proxies\__CG__\follow_the_rhythm\SymfonyBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Artiste extends \follow_the_rhythm\SymfonyBundle\Entity\Artiste implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'id', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'nomComplet', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'nomDeScene', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'nbFollower', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'actualite', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'concert');
        }

        return array('__isInitialized__', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'id', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'nomComplet', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'nomDeScene', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'nbFollower', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'actualite', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Artiste' . "\0" . 'concert');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Artiste $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomComplet($nomComplet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomComplet', array($nomComplet));

        return parent::setNomComplet($nomComplet);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomComplet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomComplet', array());

        return parent::getNomComplet();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomDeScene($nomDeScene)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomDeScene', array($nomDeScene));

        return parent::setNomDeScene($nomDeScene);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomDeScene()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomDeScene', array());

        return parent::getNomDeScene();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbFollower($nbFollower)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbFollower', array($nbFollower));

        return parent::setNbFollower($nbFollower);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbFollower()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbFollower', array());

        return parent::getNbFollower();
    }

    /**
     * {@inheritDoc}
     */
    public function addConcert(\follow_the_rhythm\SymfonyBundle\Entity\Concert $concert)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addConcert', array($concert));

        return parent::addConcert($concert);
    }

    /**
     * {@inheritDoc}
     */
    public function removeConcert(\follow_the_rhythm\SymfonyBundle\Entity\Concert $concert)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeConcert', array($concert));

        return parent::removeConcert($concert);
    }

    /**
     * {@inheritDoc}
     */
    public function getConcert()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConcert', array());

        return parent::getConcert();
    }

    /**
     * {@inheritDoc}
     */
    public function removeActualite(\follow_the_rhythm\SymfonyBundle\Entity\Actualite $actualite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeActualite', array($actualite));

        return parent::removeActualite($actualite);
    }

    /**
     * {@inheritDoc}
     */
    public function getActualite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActualite', array());

        return parent::getActualite();
    }

    /**
     * {@inheritDoc}
     */
    public function addActualite(\follow_the_rhythm\SymfonyBundle\Entity\Actualite $actualite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addActualite', array($actualite));

        return parent::addActualite($actualite);
    }

}