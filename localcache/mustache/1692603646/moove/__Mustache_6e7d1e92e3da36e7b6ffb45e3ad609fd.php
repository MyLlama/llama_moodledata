<?php

class __Mustache_6e7d1e92e3da36e7b6ffb45e3ad609fd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h3>';
        $value = $context->find('str');
        $buffer .= $this->section366cc86c5fe1887da185777dada9a433($context, $indent, $value);
        $buffer .= '</h3>
';
        $value = $context->find('categories');
        $buffer .= $this->section1b389bb22a63569abd10b549acf197b4($context, $indent, $value);

        return $buffer;
    }

    private function section366cc86c5fe1887da185777dada9a433(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' customfield, qbank_customfields ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' customfield, qbank_customfields ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a81e7f55c5b98922d9840b8f929fd92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="customfield customfield_{{type}} customfield_{{shortname}}">
            <span class="customfieldname">{{{name}}}</span><span class="customfieldseparator">: </span><span class="customfieldvalue">{{{value}}}</span>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="customfield customfield_';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' customfield_';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="customfieldname">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span><span class="customfieldseparator">: </span><span class="customfieldvalue">';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b389bb22a63569abd10b549acf197b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h4>{{catname}}</h4>
    {{#fields}}
        <div class="customfield customfield_{{type}} customfield_{{shortname}}">
            <span class="customfieldname">{{{name}}}</span><span class="customfieldseparator">: </span><span class="customfieldvalue">{{{value}}}</span>
        </div>
    {{/fields}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <h4>';
                $value = $this->resolveValue($context->find('catname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h4>
';
                $value = $context->find('fields');
                $buffer .= $this->section9a81e7f55c5b98922d9840b8f929fd92($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
