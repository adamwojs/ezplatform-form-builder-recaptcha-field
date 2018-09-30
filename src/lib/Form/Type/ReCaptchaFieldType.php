<?php

declare(strict_types=1);

namespace AdamWojs\EzPlatformFormBuilderRecaptcha\Form\Type;

use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use EzSystems\EzPlatformFormBuilder\Form\Type\Field\AbstractFieldType;

class ReCaptchaFieldType extends AbstractFieldType
{
    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
        return EWZRecaptchaType::class;
    }
}
