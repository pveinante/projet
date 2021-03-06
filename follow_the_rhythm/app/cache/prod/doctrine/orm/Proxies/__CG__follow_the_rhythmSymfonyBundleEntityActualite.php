<?php

namespace Proxies\__CG__\follow_the_rhythm\SymfonyBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Actualite extends \follow_the_rhythm\SymfonyBundle\Entity\Actualite implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'id', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'titre', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'description', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'nbCoupDeCoeurs', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'dateActualite', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'artiste', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'concert', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'moderateur');
        }

        return array('__isInitialized__', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'id', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'titre', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'description', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'nbCoupDeCoeurs', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'dateActualite', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'artiste', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'concert', '' . "\0" . 'follow_the_rhythm\\SymfonyBundle\\Entity\\Actualite' . "\0" . 'moderateur');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Actualite $proxy) {
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
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbCoupDeCoeurs($nbCoupDeCoeurs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbCoupDeCoeurs', array($nbCoupDeCoeurs));

        return parent::setNbCoupDeCoeurs($nbCoupDeCoeurs);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbCoupDeCoeurs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbCoupDeCoeurs', array());

        return parent::getNbCoupDeCoeurs();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateActualite($dateActualite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateActualite', array($dateActualite));

        return parent::setDateActualite($dateActualite);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateActualite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateActualite', array());

        return parent::getDateActualite();
    }

    /**
     * {@inheritDoc}
     */
    public function setArtiste(\follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArtiste', array($artiste));

        return parent::setArtiste($artiste);
    }

    /**
     * {@inheritDoc}
     */
    public function getArtiste()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArtiste', array());

        return parent::getArtiste();
    }

    /**
     * {@inheritDoc}
     */
    public function setModerateur(\follow_the_rhythm\SymfonyBundle\Entity\Moderateur $moderateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModerateur', array($moderateur));

        return parent::setModerateur($moderateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getModerateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModerateur', array());

        return parent::getModerateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setConcert(\follow_the_rhythm\SymfonyBundle\Entity\Concert $concert = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConcert', array($concert));

        return parent::setConcert($concert);
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
    public function addArtiste(\follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArtiste', array($artiste));

        return parent::addArtiste($artiste);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArtiste(\follow_the_rhythm\SymfonyBundle\Entity\Artiste $artiste)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArtiste', array($artiste));

        return parent::removeArtiste($artiste);
    }

}
