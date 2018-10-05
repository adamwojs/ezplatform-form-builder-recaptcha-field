<?php

declare(strict_types=1);

namespace AdamWojs\EzPlatformFormBuilderRecaptcha\FormBuilder\Field\Mapper;

use EzSystems\EzPlatformFormBuilder\FieldType\Field\Mapper\GenericFieldMapper;
use EzSystems\EzPlatformFormBuilder\FieldType\Model\Field;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints as Recaptcha;

class ReCaptchaMapper extends GenericFieldMapper
{
    /**
     * {@inheritdoc}
     */
    protected function mapFormOptions(Field $field, array $constraints): array
    {
        $options = parent::mapFormOptions($field, $constraints);
        $options['field'] = $field;
        $options['label'] = $field->getName();
        $options['attr'] = [
            'options' => [
                'theme' => $field->getAttributeValue('theme'),
                'type' => 'image',
                'size' => $field->getAttributeValue('size'),
                'defer' => true,
                'async' => true,
            ],
        ];

        $options['constraints'] = [
            new Recaptcha\IsTrue(),
        ];

        return $options;
    }
}
