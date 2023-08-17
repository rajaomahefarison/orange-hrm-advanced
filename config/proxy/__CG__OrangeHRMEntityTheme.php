<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Theme extends \OrangeHRM\Entity\Theme implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'name', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'variables', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientLogo', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientLogoFilename', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientLogoFileType', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientLogoFileSize', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientBanner', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientBannerFilename', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientBannerFileType', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientBannerFileSize', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'loginBanner', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'loginBannerFilename', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'loginBannerFileType', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'loginBannerFileSize', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'showSocialMediaIcons'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'id', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'name', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'variables', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientLogo', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientLogoFilename', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientLogoFileType', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientLogoFileSize', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientBanner', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientBannerFilename', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientBannerFileType', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'clientBannerFileSize', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'loginBanner', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'loginBannerFilename', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'loginBannerFileType', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'loginBannerFileSize', '' . "\0" . 'OrangeHRM\\Entity\\Theme' . "\0" . 'showSocialMediaIcons'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Theme $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): int
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
    public function setId(int $id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariables(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariables', []);

        return parent::getVariables();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariables(array $variables): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariables', [$variables]);

        parent::setVariables($variables);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientLogo', []);

        return parent::getClientLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientLogo($clientLogo): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientLogo', [$clientLogo]);

        parent::setClientLogo($clientLogo);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientLogoFilename(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientLogoFilename', []);

        return parent::getClientLogoFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientLogoFilename(?string $clientLogoFilename): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientLogoFilename', [$clientLogoFilename]);

        parent::setClientLogoFilename($clientLogoFilename);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientLogoFileType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientLogoFileType', []);

        return parent::getClientLogoFileType();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientLogoFileType(?string $clientLogoFileType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientLogoFileType', [$clientLogoFileType]);

        parent::setClientLogoFileType($clientLogoFileType);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientLogoFileSize(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientLogoFileSize', []);

        return parent::getClientLogoFileSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientLogoFileSize(?int $clientLogoFileSize): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientLogoFileSize', [$clientLogoFileSize]);

        parent::setClientLogoFileSize($clientLogoFileSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientBanner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientBanner', []);

        return parent::getClientBanner();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientBanner($clientBanner): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientBanner', [$clientBanner]);

        parent::setClientBanner($clientBanner);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientBannerFilename(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientBannerFilename', []);

        return parent::getClientBannerFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientBannerFilename(?string $clientBannerFilename): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientBannerFilename', [$clientBannerFilename]);

        parent::setClientBannerFilename($clientBannerFilename);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientBannerFileType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientBannerFileType', []);

        return parent::getClientBannerFileType();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientBannerFileType(?string $clientBannerFileType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientBannerFileType', [$clientBannerFileType]);

        parent::setClientBannerFileType($clientBannerFileType);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientBannerFileSize(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientBannerFileSize', []);

        return parent::getClientBannerFileSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientBannerFileSize(?int $clientBannerFileSize): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientBannerFileSize', [$clientBannerFileSize]);

        parent::setClientBannerFileSize($clientBannerFileSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginBanner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginBanner', []);

        return parent::getLoginBanner();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginBanner($loginBanner): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginBanner', [$loginBanner]);

        parent::setLoginBanner($loginBanner);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginBannerFilename(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginBannerFilename', []);

        return parent::getLoginBannerFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginBannerFilename(?string $loginBannerFilename): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginBannerFilename', [$loginBannerFilename]);

        parent::setLoginBannerFilename($loginBannerFilename);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginBannerFileType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginBannerFileType', []);

        return parent::getLoginBannerFileType();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginBannerFileType(?string $loginBannerFileType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginBannerFileType', [$loginBannerFileType]);

        parent::setLoginBannerFileType($loginBannerFileType);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoginBannerFileSize(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoginBannerFileSize', []);

        return parent::getLoginBannerFileSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoginBannerFileSize(?int $loginBannerFileSize): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoginBannerFileSize', [$loginBannerFileSize]);

        parent::setLoginBannerFileSize($loginBannerFileSize);
    }

    /**
     * {@inheritDoc}
     */
    public function showSocialMediaIcons(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'showSocialMediaIcons', []);

        return parent::showSocialMediaIcons();
    }

    /**
     * {@inheritDoc}
     */
    public function setShowSocialMediaIcons(bool $showSocialMediaIcons): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShowSocialMediaIcons', [$showSocialMediaIcons]);

        parent::setShowSocialMediaIcons($showSocialMediaIcons);
    }

}
