# EzPlatformFormBuilderRecaptchaBundle

## Installation

### Get the bundle using composer

Add EzPlatformFormBuilderRecaptchaBundle by running this command from the terminal at the root of
your symfony project:

```bash
composer require adamwojs/ezplatform-form-builder-recaptcha-field
```

## Enable the bundle

To start using the bundle, register the bundle in your application's kernel class:

```php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        // ...
        new EWZ\Bundle\RecaptchaBundle\EWZRecaptchaBundle(),
        new AdamWojs\EzPlatformFormBuilderRecaptchaBundle\EzPlatformFormBuilderRecaptchaBundle(),
        // ...
    );
}
```

## Configure your reCAPTCHA public/private keys

Add the following to your config file:

```yaml
# app/config/config.yml

ewz_recaptcha:
    public_key:  here_is_your_public_key
    private_key: here_is_your_private_key
```

You can generate reCAPCTHA keys on https://www.google.com/recaptcha/admin#list.

See https://github.com/excelwebzone/EWZRecaptchaBundle#step2-configure-the-bundles for more detailed description of available configuration. 
