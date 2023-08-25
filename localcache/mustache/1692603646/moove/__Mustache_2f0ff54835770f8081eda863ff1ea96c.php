<?php

class __Mustache_2f0ff54835770f8081eda863ff1ea96c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<button type="button" id="filter-dates-button" class="btn btn-primary rounded p-1" aria-expanded="false"
';
        $buffer .= $indent . '        aria-haspopup="true" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section408821aaaef24b07b6e63c12b33ec0f0($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('filterdatesname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '</button>
';
        $buffer .= $indent . '
';
        $value = $context->find('filterdatesdata');
        $buffer .= $this->section94cada9c0b14e329375353dc10aec8c7($context, $indent, $value);

        return $buffer;
    }

    private function section408821aaaef24b07b6e63c12b33ec0f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' filter:datesbuttonlabel, forumreport_summary ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' filter:datesbuttonlabel, forumreport_summary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94cada9c0b14e329375353dc10aec8c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<input type="hidden" name="date{{type}}[timestamp]" value="{{timestamp}}">
<input type="hidden" name="date{{type}}[enabled]" value="{{enabled}}">
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<input type="hidden" name="date';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '[timestamp]" value="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '<input type="hidden" name="date';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '[enabled]" value="';
                $value = $this->resolveValue($context->find('enabled'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
