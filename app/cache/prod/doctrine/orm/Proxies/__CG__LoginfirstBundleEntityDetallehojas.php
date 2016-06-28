<?php

namespace Proxies\__CG__\Login\firstBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Detallehojas extends \Login\firstBundle\Entity\Detallehojas implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'id', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'fecha', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'actividad', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'tiempo', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'clientes', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'hojastiempo'];
        }

        return ['__isInitialized__', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'id', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'fecha', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'actividad', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'tiempo', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'clientes', '' . "\0" . 'Login\\firstBundle\\Entity\\Detallehojas' . "\0" . 'hojastiempo'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Detallehojas $proxy) {
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
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', [$fecha]);

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', []);

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setActividad($actividad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActividad', [$actividad]);

        return parent::setActividad($actividad);
    }

    /**
     * {@inheritDoc}
     */
    public function getActividad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActividad', []);

        return parent::getActividad();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempo($tiempo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempo', [$tiempo]);

        return parent::setTiempo($tiempo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempo', []);

        return parent::getTiempo();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientes(\Login\firstBundle\Entity\Clientes $clientes = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientes', [$clientes]);

        return parent::setClientes($clientes);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientes', []);

        return parent::getClientes();
    }

    /**
     * {@inheritDoc}
     */
    public function setHojastiempo(\Login\firstBundle\Entity\Hojastiempo $hojastiempo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHojastiempo', [$hojastiempo]);

        return parent::setHojastiempo($hojastiempo);
    }

    /**
     * {@inheritDoc}
     */
    public function getHojastiempo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHojastiempo', []);

        return parent::getHojastiempo();
    }

}