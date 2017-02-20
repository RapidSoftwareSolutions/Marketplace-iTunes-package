<?php
return array (
    'package' => 'Newton',
    'tagline' => 'Newton does anything from numerical calculation to symbolic math parsing.',
    'description' => 'Newton does anything from numerical calculation to symbolic math parsing.',
    'image' => 'https://logo.clearbit.com/newton.now.sh?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-Newton-package',
    'keywords' => array (
        'API',
        'math',
        'Newton',
    ),
    'accounts' => array (
        'domain' => 'newton.now.sh',
        'credentials' => array (
        ),
    ),
    'blocks' => array (
        array (
            'name' => 'simplifyExpression',
            'description' => 'Simplify expression',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: 2^2+2(2), result: 8',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'factoringExpression',
            'description' => 'Factoring expression',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: x^2 + 2x, result: x (x + 2)',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'findDerivative',
            'description' => 'Find derivative',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: x^2+2x, result: 2 x + 2',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'integrateExpression',
            'description' => 'Integrate expression',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: x^2+2x, result: 1/3 x^3 + x^2 + C',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'findZeros',
            'description' => 'Finding zeros',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: x^2+2x, result: [-2, 0]',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'findTangent',
            'description' => 'Finding tangent',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: 2|x^3, result: 12 x + -16',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getAreaUnderCurve',
            'description' => 'Get area under curve',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: 2:4|x^3, result: 60',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getCosine',
            'description' => 'Get cosine',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: pi, result: -1',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getSine',
            'description' => 'Get sine',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: 0, result: 0',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getTangent',
            'description' => 'Get tangent',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: 0, result: 0',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getInverseCosine',
            'description' => 'Get inverse cosine',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: 1, result: 0',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getInverseSine',
            'description' => 'Get inverse sine',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: 0, result: 0',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getInverseTangent',
            'description' => 'Get inverse tangent',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: 0, result: 0',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getAbsoluteValue',
            'description' => 'Get absolute value',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: -1, result: 1',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getLogarithm',
            'description' => 'Get logarithm',
            'args' => array (
                array (
                    'name' => 'expression',
                    'type' => 'String',
                    'info' => 'Url-encoded math expression on which you want to operate. Expression examlpe: 2|8, result: 3',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
    ),
    'custom' => array (
        'simplifyExpression' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/simplify/{{expression}}',
            'method' => 'GET',
        ),
        'factoringExpression' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/factor/{{expression}}',
            'method' => 'GET',
        ),
        'findDerivative' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/derive/{{expression}}',
            'method' => 'GET',
        ),
        'integrateExpression' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/integrate/{{expression}}',
            'method' => 'GET',
        ),
        'findZeros' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/zeroes/{{expression}}',
            'method' => 'GET',
        ),
        'findTangent' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/tangent/{{expression}}',
            'method' => 'GET',
        ),
        'getAreaUnderCurve' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/area/{{expression}}',
            'method' => 'GET',
        ),
        'getCosine' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/cos/{{expression}}',
            'method' => 'GET',
        ),
        'getSine' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/sin/{{expression}}',
            'method' => 'GET',
        ),
        'getTangent' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/tan/{{expression}}',
            'method' => 'GET',
        ),
        'getInverseCosine' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/arccos/{{expression}}',
            'method' => 'GET',
        ),
        'getInverseSine' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/arcsin/{{expression}}',
            'method' => 'GET',
        ),
        'getInverseTangent' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/arctan/{{expression}}',
            'method' => 'GET',
        ),
        'getAbsoluteValue' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/abs/{{expression}}',
            'method' => 'GET',
        ),
        'getLogarithm' => array (
            'dictionary' => array (
                'expression' => 'expression',
            ),
            'vendorUrl' => 'https://newton.now.sh/log/{{expression}}',
            'method' => 'GET',
        ),
    ),
);