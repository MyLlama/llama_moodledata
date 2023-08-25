<?php

class __Mustache_d416817416d4ef47e7718e9525f56c60 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<button class="btn btn-primary export-link" data-url="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" aria-label="';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" title="';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $context->find('str');
        $buffer .= $this->section9a88b3fb8f4e0a938ac5950b7aa8e573($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</button>
';

        return $buffer;
    }

    private function section9a88b3fb8f4e0a938ac5950b7aa8e573(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'export, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'export, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
