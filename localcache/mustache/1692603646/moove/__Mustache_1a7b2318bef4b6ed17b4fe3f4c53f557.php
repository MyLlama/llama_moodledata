<?php

class __Mustache_1a7b2318bef4b6ed17b4fe3f4c53f557 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="day-navigation-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="controls clearfix">
';
        $buffer .= $indent . '    <div class="calendar-controls">
';
        $buffer .= $indent . '        <a';
        $buffer .= ' href="';
        $value = $this->resolveValue($context->find('previousperiodlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' class="arrow_link previous"';
        $buffer .= ' title="';
        $value = $context->find('str');
        $buffer .= $this->section384bcf9f10143ce805dfe7b379567016($context, $indent, $value);
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('previousperiod.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('previousperiod.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-day="';
        $value = $this->resolveValue($context->findDot('previousperiod.mday'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= '>
';
        $buffer .= $indent . '            <span class="arrow">';
        $value = $this->resolveValue($context->find('larrow'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            &nbsp;
';
        $buffer .= $indent . '            <span class="arrow_text">';
        $value = $this->resolveValue($context->find('previousperiodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <span class="hide"> | </span>
';
        $buffer .= $indent . '        <h2 class="current">';
        $value = $this->resolveValue($context->find('periodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h2>
';
        $buffer .= $indent . '        <span class="hide"> | </span>
';
        $buffer .= $indent . '        <a';
        $buffer .= ' href="';
        $value = $this->resolveValue($context->find('nextperiodlink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' class="arrow_link next"';
        $buffer .= ' title="';
        $value = $context->find('str');
        $buffer .= $this->section60ada46657f6f3675b98faf452868e28($context, $indent, $value);
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('nextperiod.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('nextperiod.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-day="';
        $value = $this->resolveValue($context->findDot('nextperiod.mday'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= '>
';
        $buffer .= $indent . '            <span class="arrow_text">';
        $value = $this->resolveValue($context->find('nextperiodname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '            &nbsp;
';
        $buffer .= $indent . '            <span class="arrow">';
        $value = $this->resolveValue($context->find('rarrow'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section384bcf9f10143ce805dfe7b379567016(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dayprev, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dayprev, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60ada46657f6f3675b98faf452868e28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'daynext, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'daynext, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
