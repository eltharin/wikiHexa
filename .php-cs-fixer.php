<?php

$finder = (new PhpCsFixer\Finder());

return (new PhpCsFixer\Config())
    ->setRules([
		'no_unused_imports' => true,
		'global_namespace_import' => [
			'import_classes' => true,
			'import_constants' => true,
			'import_functions' => true,
		],
		'no_null_property_initialization' => false,
		'concat_space' => ['spacing' => 'one'], 
	
	
	
	
	
	
	
	
	
            'encoding' => true,
            'full_opening_tag' => true,
            'blank_line_after_namespace' => true,
            'braces_position' => true,
            'class_definition' => true,
            'constant_case' => true,
            'control_structure_braces' => true,
            'control_structure_continuation_position' => true,
            'elseif' => true,
            'function_declaration' => true,
            'indentation_type' => true,
            'line_ending' => true,
            'lowercase_keywords' => true,
            'method_argument_space' => [
                'attribute_placement' => 'ignore',
                'on_multiline' => 'ensure_fully_multiline',
            ],
            'no_break_comment' => true,
            'no_closing_tag' => true,
            'no_multiple_statements_per_line' => true,
            'no_space_around_double_colon' => true,
            'no_spaces_after_function_name' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'single_blank_line_at_eof' => true,
            'single_class_element_per_statement' => [
                'elements' => [
                    'property',
                ],
            ],
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'spaces_inside_parentheses' => true,
            'statement_indentation' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'visibility_required' => ['elements' => ['method', 'property']],
            'binary_operator_spaces' => [
                'default' => 'at_least_single_space',
            ],
            'blank_line_after_opening_tag' => true,
            'blank_line_between_import_groups' => true,
            'blank_lines_before_namespace' => true,
            'braces_position' => [
                'allow_single_line_empty_anonymous_classes' => true,
            ],
            'class_definition' => [
                'inline_constructor_arguments' => false, // handled by method_argument_space fixer
                'space_before_parenthesis' => true, // defined in PSR12 ¶8. Anonymous Classes
            ],
            'compact_nullable_type_declaration' => true,
            'declare_equal_normalize' => true,
            'lowercase_cast' => true,
            'lowercase_static_reference' => true,
            'new_with_parentheses' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_leading_import_slash' => true,
            'no_whitespace_in_blank_line' => true,
            'ordered_class_elements' => [
                'order' => [
                    'use_trait',
                ],
            ],
            'ordered_imports' => [
                'imports_order' => [
                    'class',
                    'function',
                    'const',
                ],
                'sort_algorithm' => 'none',
            ],
            'return_type_declaration' => true,
            'short_scalar_cast' => true,
            'single_import_per_statement' => ['group_to_single_imports' => false],
            'single_trait_insert_per_statement' => true,
            'ternary_operator_spaces' => true,
            'unary_operator_spaces' => [
                'only_dec_inc' => true,
            ],
            'visibility_required' => true,
            'cast_spaces' => true,

		'align_multiline_comment' => true,
		'array_syntax' => true,
		'backtick_to_shell_exec' => true,
		'binary_operator_spaces' => true,
		'blank_line_before_statement' => [
			'statements' => [
				'return',
			],
		],
		'braces_position' => [
			'allow_single_line_anonymous_functions' => true,
			'allow_single_line_empty_anonymous_classes' => true,
		],
		'class_attributes_separation' => [
			'elements' => [
				'method' => 'one',
			],
		],
		'class_definition' => [
			'single_line' => true,
		],
		'class_reference_name_casing' => true,
		'clean_namespace' => true,
		
		'declare_parentheses' => true,
		'echo_tag_syntax' => true,
		'empty_loop_body' => ['style' => 'braces'],
		'empty_loop_condition' => true,
		'fully_qualified_strict_types' => true,
		'function_declaration' => true,
		'general_phpdoc_tag_rename' => [
			'replacements' => [
				'inheritDocs' => 'inheritDoc',
			],
		],
		
		'include' => true,
		'increment_style' => true,
		'integer_literal_case' => true,
		'lambda_not_used_import' => true,
		'linebreak_after_opening_tag' => true,
		'magic_constant_casing' => true,
		'magic_method_casing' => true,
		'method_argument_space' => [
			'on_multiline' => 'ignore',
		],
		'native_function_casing' => true,
		'native_type_declaration_casing' => true,
		'no_alias_language_construct_call' => true,
		'no_alternative_syntax' => true,
		'no_binary_string' => true,
		'no_blank_lines_after_phpdoc' => true,
		'no_empty_comment' => true,
		'no_empty_phpdoc' => true,
		'no_empty_statement' => true,
		'no_extra_blank_lines' => [
			'tokens' => [
				'attribute',
				'case',
				'continue',
				'curly_brace_block',
				'default',
				'extra',
				'parenthesis_brace_block',
				'square_brace_block',
				'switch',
				'throw',
				'use',
			],
		],
		'no_leading_namespace_whitespace' => true,
		'no_mixed_echo_print' => true,
		'no_multiline_whitespace_around_double_arrow' => true,
		
		'no_short_bool_cast' => true,
		'no_singleline_whitespace_before_semicolons' => true,
		'no_spaces_around_offset' => true,
		'no_superfluous_phpdoc_tags' => [
			'allow_hidden_params' => true,
			'remove_inheritdoc' => true,
		],
		'no_trailing_comma_in_singleline' => true,
		'no_unneeded_braces' => [
			'namespaces' => true,
		],
		'no_unneeded_control_parentheses' => [
			'statements' => [
				'break',
				'clone',
				'continue',
				'echo_print',
				'others',
				'return',
				'switch_case',
				'yield',
				'yield_from',
			],
		],
		'no_unneeded_import_alias' => true,
		'no_unset_cast' => true,
		
		'no_useless_concat_operator' => true,
		'no_useless_nullsafe_operator' => true,
		'no_whitespace_before_comma_in_array' => true,
		'normalize_index_brace' => true,
		'nullable_type_declaration' => true,
		'nullable_type_declaration_for_default_null_value' => true,
		'object_operator_without_whitespace' => true,
		'operator_linebreak' => [
			'only_booleans' => true,
		],
		'ordered_imports' => [
			'imports_order' => [
				'class',
				'function',
				'const',
			],
			'sort_algorithm' => 'alpha',
		],
		'ordered_types' => [
			'null_adjustment' => 'always_last',
			'sort_algorithm' => 'none',
		],
		'php_unit_fqcn_annotation' => true,
		'php_unit_method_casing' => true,
		'phpdoc_align' => true,
		'phpdoc_annotation_without_dot' => true,
		'phpdoc_indent' => true,
		'phpdoc_inline_tag_normalizer' => true,
		'phpdoc_no_access' => true,
		'phpdoc_no_alias_tag' => true,
		'phpdoc_no_package' => true,
		'phpdoc_no_useless_inheritdoc' => true,
		'phpdoc_order' => [
			'order' => [
				'param',
				'return',
				'throws',
			],
		],
		'phpdoc_return_self_reference' => true,
		'phpdoc_scalar' => true,
		'phpdoc_separation' => [
			'groups' => [
				['Annotation', 'NamedArgumentConstructor', 'Target'],
				['author', 'copyright', 'license'], 
				['category', 'package', 'subpackage'], 
				['property', 'property-read', 'property-write'], 
				['deprecated', 'link', 'see', 'since']
			],
		],
		'phpdoc_single_line_var_spacing' => true,
		'phpdoc_summary' => true,
		'phpdoc_tag_type' => [
			'tags' => [
				'inheritDoc' => 'inline',
			],
		],
		'phpdoc_to_comment' => true,
		'phpdoc_trim' => true,
		'phpdoc_trim_consecutive_blank_line_separation' => true,
		'phpdoc_types' => true,
		'phpdoc_types_order' => [
			'null_adjustment' => 'always_last',
			'sort_algorithm' => 'none',
		],
		'phpdoc_var_without_name' => true,
		'semicolon_after_instruction' => true,
		'simple_to_complex_string_variable' => true,
		'single_class_element_per_statement' => true,
		'single_import_per_statement' => true,
		'single_line_comment_spacing' => true,
		'single_line_comment_style' => [
			'comment_types' => [
				'hash',
			],
		],
		'single_line_empty_body' => false,
		'single_line_throw' => true,
		'single_quote' => true,
		'single_space_around_construct' => true,
		'space_after_semicolon' => [
			'remove_in_empty_for_expressions' => true,
		],
		'standardize_increment' => true,
		'standardize_not_equals' => true,
		'statement_indentation' => [
			'stick_comment_to_next_continuous_control_statement' => true,
		],
		'switch_continue_to_break' => true,
		'trailing_comma_in_multiline' => true,
		'trim_array_spaces' => true,
		'type_declaration_spaces' => true,
		'types_spaces' => true,
		'unary_operator_spaces' => true,
		'whitespace_after_comma_in_array' => true,
		//'yoda_style' => true,
		'array_syntax' => ['syntax' => 'short'],
		'control_structure_continuation_position' => ['position' => 'next_line'],
		'braces_position' => [
			'control_structures_opening_brace' => 'next_line_unless_newline_at_signature_end'
		],/**/
    ])
    ->setFinder($finder)
    //->setIndent("\t")
    ->setLineEnding("\r\n")
;