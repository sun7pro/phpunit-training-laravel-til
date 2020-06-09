<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/config')
    ->in(__DIR__ . '/resources/lang')
    // ->in(__DIR__ . '/tests')
    ->in(__DIR__ . '/app');

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'binary_operator_spaces' => [
            'default' => 'single_space', // One space before and after operator
        ],
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'trailing_comma_in_multiline_array' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'trim_array_spaces' => true,
        'whitespace_after_comma_in_array' => true,
        'blank_line_before_statement' => [
            'statements' => ['return'],
        ],
        'braces' => [
            'allow_single_line_closure' => false,
            'position_after_anonymous_constructs' => 'same',
            'position_after_control_structures' => 'same',
            'position_after_functions_and_oop_constructs' => 'next',
        ],
        'cast_spaces' => [
            'space' => 'single',
        ],
        'lowercase_cast' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'class_attributes_separation' => [
            'elements' => ['const', 'method', 'property'],
        ],
        'linebreak_after_opening_tag' => true,
        'multiline_whitespace_before_semicolons' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => true,
        'no_leading_namespace_whitespace' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_multiline_whitespace_before_semicolons' => true,
        'single_quote' => true,
    ])
    ->setFinder($finder);
