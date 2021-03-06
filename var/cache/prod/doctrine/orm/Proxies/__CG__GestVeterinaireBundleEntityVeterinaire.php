<?php

namespace Proxies\__CG__\GestVeterinaireBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Veterinaire extends \GestVeterinaireBundle\Entity\Veterinaire implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'id', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'numOrdreNatio', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'telVete', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'mailVete', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'leDelegueVeterinaire', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'leTypeEtablissement', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'lesTypeClients'];
        }

        return ['__isInitialized__', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'id', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'numOrdreNatio', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'telVete', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'mailVete', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'leDelegueVeterinaire', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'leTypeEtablissement', '' . "\0" . 'GestVeterinaireBundle\\Entity\\Veterinaire' . "\0" . 'lesTypeClients'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Veterinaire $proxy) {
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumOrdreNatio($numOrdreNatio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumOrdreNatio', [$numOrdreNatio]);

        return parent::setNumOrdreNatio($numOrdreNatio);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumOrdreNatio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumOrdreNatio', []);

        return parent::getNumOrdreNatio();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelVete($telVete)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelVete', [$telVete]);

        return parent::setTelVete($telVete);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelVete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelVete', []);

        return parent::getTelVete();
    }

    /**
     * {@inheritDoc}
     */
    public function setMailVete($mailVete)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMailVete', [$mailVete]);

        return parent::setMailVete($mailVete);
    }

    /**
     * {@inheritDoc}
     */
    public function getMailVete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMailVete', []);

        return parent::getMailVete();
    }

    /**
     * {@inheritDoc}
     */
    public function setLeDelegueVeterinaire(\GestVeterinaireBundle\Entity\DelegueVeterinaire $leDelegueVeterinaire = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeDelegueVeterinaire', [$leDelegueVeterinaire]);

        return parent::setLeDelegueVeterinaire($leDelegueVeterinaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeDelegueVeterinaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeDelegueVeterinaire', []);

        return parent::getLeDelegueVeterinaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setLeTypeEtablissement(\GestVeterinaireBundle\Entity\TypeEtablissement $leTypeEtablissement = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeTypeEtablissement', [$leTypeEtablissement]);

        return parent::setLeTypeEtablissement($leTypeEtablissement);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeTypeEtablissement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeTypeEtablissement', []);

        return parent::getLeTypeEtablissement();
    }

    /**
     * {@inheritDoc}
     */
    public function addUnTypeClient(\GestVeterinaireBundle\Entity\TypeClient $unTypeClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUnTypeClient', [$unTypeClient]);

        return parent::addUnTypeClient($unTypeClient);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUnTypeClient(\GestVeterinaireBundle\Entity\TypeClient $unTypeClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUnTypeClient', [$unTypeClient]);

        return parent::removeUnTypeClient($unTypeClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getLesTypeClients()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLesTypeClients', []);

        return parent::getLesTypeClients();
    }

}
