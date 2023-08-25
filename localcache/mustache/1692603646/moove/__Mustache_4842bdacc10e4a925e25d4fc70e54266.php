<?php

class __Mustache_4842bdacc10e4a925e25d4fc70e54266 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="filter-dates-popover" class="popover filter-dates-popover mt-3 hidden" data-openfilter="false">
';
        $buffer .= $indent . '    <h3 class="popover-header">';
        $value = $context->find('str');
        $buffer .= $this->section8e63d72c57d703a506aa92bf1173ee47($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '    <div class="popover-body" data-region="filter-dates">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('filterdatesform'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div id="dates-filter-warning" class="form-control-feedback text-danger hidden float-right">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section7897237aaa869b89cb38fbd6354ff77d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <br>&nbsp;
';
        $buffer .= $indent . '        <button type="button" class="filter-save float-right btn btn-link p-0" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section67ff6294eae5b56bee5bc66aaa93b70d($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <strong>';
        $value = $context->find('str');
        $buffer .= $this->section67ff6294eae5b56bee5bc66aaa93b70d($context, $indent, $value);
        $buffer .= '</strong>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8e63d72c57d703a506aa92bf1173ee47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' filter:datesname, forumreport_summary ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' filter:datesname, forumreport_summary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7897237aaa869b89cb38fbd6354ff77d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' filter:datesorderwarning, forumreport_summary ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' filter:datesorderwarning, forumreport_summary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67ff6294eae5b56bee5bc66aaa93b70d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' save ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' save ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
